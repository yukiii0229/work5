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
        $items = DB::select('select * from works');
        $users = DB::select('select * from users');
        $items = work::Paginate(2);

        $fromTime = strtotime("2021-01-21 06:00:00"); 
        $toTime = strtotime("2021-01-22 05:00:00"); 
        // 2つの異なる日付
        $fromTime = strtotime("2021-01-21 06:00:00"); 
        $toTime = strtotime("2021-01-22 05:00:00"); 
        // strtotimeを使って差分
        $diff = $toTime - $fromTime;
        // 差分を日付に戻す
        $diffTime = date("H:i:s", $diff);
        // 23:00:00が出力される
        echo $diffTime;

        return view('list', ['items' => $items],['users' => $users],['diffTime' => $diffTime]);
    }


}