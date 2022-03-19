<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\rest;
use App\Models\work;
use App\Models\rest_time;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ListController extends Controller
{
    public function create(Request $request)
    {

    //     $break = Auth::user();
    // $break_out = rest::where('work_id', $break->id)->latest()->first();
    // $user = Auth::user();
    // $date = $request['date'];
    // $work_date = work::select('date')->get();
    //     $rests = rest::select('work_id');


    //         $rest_time = DB::table('rests')
    //         ->where('work_id', $user->id)
    //         ->sum('rest_time');
    //         //秒
    //         $seconds = $rest_time % 60;
    //         $seconds=sprintf('%02d', $seconds);//0埋め00:00:00
    //         //分
    //         $difMinutes = ($rest_time - ($rest_time % 60)) / 60;
    //         $minutes = $difMinutes % 60;
    //         $minutes = sprintf('%02d', $minutes);//0埋め00:00:00
    //         //時
    //         $difHours = ($difMinutes - ($difMinutes % 60)) / 60;
    //         $hours = $difHours;
    //         $hours=sprintf('%02d',$hours);//0埋め00:00:00]

    //         $users = work::Join('users', 'works.user_id', 'users.id')
    //         ->leftJoinsub($rests, 'rests', function ($join) {
    //             $join->on('works.id', '=', 'rests.rest_id');
    //         })
    //     ->where('rest_time', $date)
    //     ->get();
    //     $items = work::orderBy('updated_at', 'asc')->Paginate(5);
    //     return view('auth.datepege', compact('users', 'date','work_date','rest_time', 'minutes', 'seconds','hours','items'));




    // $break_out->update([
    //     'rest_time' => Carbon::now()
    //     ]);









        $dete = Auth::user();;
        $work = work::all()->first();
        $rest = rest::all()->first();


        return view ('list')->with(['dete'=>$dete])->with(['work'=>$work])->with(['rest'=>$rest]);
    }
    
}
