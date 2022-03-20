<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ListController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/', function () {
    return view('auth.register');  // 変更：welcome → top
    });

//打刻ページ

Route::GET('/work', [WorkController::class, 'index'])->middleware('auth');
//勤務開始打刻
Route::GET('/work_in', [WorkController::class, 'work_in2'])->middleware('auth');
Route::post('/work_in', [WorkController::class, 'work_in'])->name('work_in');;

//勤務終了を送信
Route::GET('/work_end', [WorkController::class, 'work_end'])->middleware('auth');
Route::post('/work_out', [WorkController::class, 'work_out'])->middleware('auth');

//休憩開始
Route::POST('/break_in', [WorkController::class, 'break_in'])->middleware('auth');
Route::GET('/break_out', [WorkController::class, 'break_out'])->middleware('auth');
//休憩終了
Route::POST('/break_out', [WorkController::class, 'break_out2'])->middleware('auth');


//リスト一覧
Route::GET('/list', [ListController::class, 'create'])->middleware('auth');
Route::POST('/list', [ListController::class, 'work'])->middleware('auth');