<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\brake;
use App\Models\work;
use Carbon\Carbon;

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
    public function work_in()
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
        if (($oldTimestampDay == $newTimestampDay) && (empty($oldTimestamp->work_out))){
            return redirect()->back()->with('error', 'すでに出勤打刻がされています');
        }
        $timestamp = work::create([
            'user_id' => $user->id,
            'work_in' => Carbon::now(), //現在時刻
            'date' => Carbon::today(), //今日の日付
        ]);
        return redirect()->back()->with('my_status', '出勤打刻が完了しました');
    }

    public function work_out()
    {
        $user = Auth::user();
        $timestamp = work::where('user_id', $user->id)->latest()->first();

        if( !empty($timestamp->punchOut)) {
            return redirect()->back()->with('error', '既に退勤の打刻がされているか、出勤打刻されていません');
        }
        $timestamp->update([
            'work_out' => Carbon::now()
        ]);

        return redirect()->back()->with('my_status', '退勤打刻が完了しました');
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
