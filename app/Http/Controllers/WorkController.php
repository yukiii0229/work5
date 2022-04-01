<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\rest;
use App\Models\work;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class WorkController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        if (Auth::attempt(['name' => $name])){
            $name = User::user()->name;
        }
       
        return view('work');
    }
    
// 打刻ページ開始
    public function work_in(Request $request)
  {
      
    $user = Auth::user();
    $oldTimestamp = work::where('user_id', $user->id)->latest()->first();
        if ($oldTimestamp) {
            $oldTimeStampStart= new Carbon($oldTimestamp->work_in);
            $oldTimestampDay = $oldTimeStampStart->startOfDay();
        }

        $newTimestampDay = Carbon::today();
        
        
        /**
         * 日付を比較する。同日付の出勤打刻で、かつ直前のTimestampの退勤打刻がされていない場合エラーを吐き出す。
         */
        if (($oldTimestamp)&&($oldTimestampDay == $newTimestampDay) && (empty($oldTimestamp->work_out))){
            return redirect()->back()->with('error', 'すでに出勤打刻がされています');
             }
             
        $timestamp = work::create([
            'user_id' => $user->id,
            'work_in' => Carbon::now(), //現在時刻
            'date' => Carbon::today(), //今日の日付
            "work_out" => null,
        ]);
        return  redirect('work_in');
        
    }
    public function work_in2(Request $request)
    {
        $name = $request->name;
        if (Auth::attempt(['name' => $name])){
            $name = User::user()->name;
        }
       
        return view('work_in');
    }

    public function work_out(Request $request)
    {
        Log::info('最初');
        $user = Auth::user();
        $timestamp = work::where('user_id', $user->id)
                    ->where('date', Carbon::today())->latest();


        if( !empty($timestamp->punchOut)) {
            return redirect()->back()->with('error', '既に退勤の打刻がされているか、出勤打刻されていません');
        }
        $timestamp->update([
            'work_out' => Carbon::now()
        ]);

        return  redirect('work_end');
    }
    public function work_end()
    {
        $date = Auth::user();
        return view('work_end',['date' => $date]);
    }


    public function break_in(Request $request)
    {
    $user= Auth::user();
    $work = work::where('user_id', $user->id)->latest()->first();

    // $work =work::where('user_id', $user->id)
    // ->where('date', Carbon::today())->latest()->first();
    $break_in = rest::create([
        'user_id' => $user->id,
        'work_id' => $work->id,
        'rest_in' => Carbon::now(),
    ]);

    return redirect('break_out');
}

    public function break_out()

    {
          return view('break_out');
    }

    public function break_out2(Request $request)
    {
        Log::info('休憩終了最初');
    $user = Auth::user();
    $today = Carbon::today()->format("Y-m-d");
    
    $work = work::where('user_id', $user->id)->where('date',$today)->latest()->first();
    $timestamp = rest::where('user_id', $user->id)->where('work_id', $work->id)->latest()->first();
    $in = $timestamp->rest_in;
    if (!empty($timestamp->punchOut)) {
        return redirect()->back()->with('error', '既に休憩終了の打刻がされているか、休憩開始が打刻されていません。');
    }
    Log::info('休憩終了真ん中');
    Log::info($timestamp->rest_in);
    $timestamp->update([
        'rest_in' => $in,
        'rest_out' => Carbon::now()
    ]);


    // $data = rest::select(DB::raw('timediff( rest_out,rest_in) as resttime'))->where('id', $timestamp->id)->value('resttime');
    // $restdata = rest::select(DB::raw('rest_time'))->where('id', $timestamp->work_id)->value('rest_time');
    // Log::info('休憩終了と中');
    // $sum = DB::select('select addtime(:restdata, :data) as sum', ['restdata' => $restdata, 'data' => $data]);


    // $attendance->update([
    //     'rest_time' => $sum[0]->sum
    // ]);
    Log::info('休憩終了最後');

    return redirect('work_in');
}

    public function work_out1()
    {
        return view('work_out');
    }

    
    


}


//         $timestamp = work::create([
//             'user_id' => $user->id,
//             'work_in' => Carbon::now(), //現在時刻
//             'work_out' => 0,
//             'date' => Carbon::today(), //今日の日付
//         ]);

//     return redirect()->back()->with(['start_in' ,'出勤打刻が完了しました']);
// }

//     //勤務終了
//     public function end()
//     {
//         $user = Auth::user();
//         $endtimestamp = Stamp::where('user_id', $user->id)->latest()->first();

//         $endtimestamp->update([
//             'end_work' => Carbon::now()
//         ]);

//         return redirect()->back()->with('end_in', '退勤打刻が完了しました');
//     }
    
// }
