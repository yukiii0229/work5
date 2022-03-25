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

class ListController extends Controller
{
    public function create(Request $request)
    {
        // $break = Auth::user();
        // $dete = Auth::user();;
        // $work = work::all()->first();
        // $rest = rest::all()->first();


        // $rest_time = DB::table('works');
        // $DATE = date("Y-m-d");
        // $work_in = $DATE."work_in";
        // $work_out = $DATE."work_out";
        // $work_time = (strtotime($work_out) - strtotime($work_in))/60;
        // 現在認証しているユーザーを取得
            $user = Auth::user();
            $date = $request['date'];
    
            
            //stamp_dateは今日の日付
            // $work_date = work::select('date')->get();
    
    
            
    
            // $rests = rest::select('work_id');
            
            // //その日の日付だけの合計の休憩時間を取得（表示する）
            // $rest_time = DB::table('rests')
            //     ->where('work_id', $user->id)
            //     ->where('updated_at','like', "$date%")//（updated_at）の％で(日付のみ)前方一致//likeはカラムの文字列検索ができる
            //     ->sum('rest_time');

            //     $seconds = $rest_time % 60;
            //     $seconds=sprintf('%02d', $seconds);//0埋め00:00:00
            //     //分
            //     $difMinutes = ($rest_time - ($rest_time % 60)) / 60;
            //     $minutes = $difMinutes % 60;
            //     $minutes = sprintf('%02d', $minutes);//0埋め00:00:00
            //     //時
            //     $difHours = ($difMinutes - ($difMinutes % 60)) / 60;
            //     $hours = $difHours;
            //     $hours=sprintf('%02d',$hours);//0埋め00:00:00]

            //     $users = work::Join('users', 'work.user_id', 'users.id')
            //     ->leftJoinsub($rests, 'rests', function ($join) {
            //         $join->on('work.id', '=', 'rests.work_id');
            //     })
            // ->where('work_date', $date)
            // ->get();
    
    
            // //$items = list::Paginate(5);
            // $items = list::orderBy('updated_at', 'asc')->Paginate(5);
            
            // return view('auth.datepege', compact('users', 'date','stamp_date','rest_time', 'minutes', 'seconds','hours','items'));

        $date = Auth::user();;
        $work = work::all()->first();
        $rest = rest::all()->first();


        return view ('list')->with(['date'=>$date])->with(['work'=>$work])->with(['rest'=>$rest]);
    }
    
}