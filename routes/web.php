<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LogoutController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/logout', [LogoutController::class, 'logout']);



//打刻ページ
Route::GET('/work', [WorkController::class, 'index'])->middleware('auth');
//勤務開始打刻
Route::post('/work_in', [WorkController::class, 'work_in']);



//勤務終了を送信
Route::post('/work_out', [WorkController::class, 'work_out'])->middleware('auth');

//休憩開始
// Route::post('/reststart', [WorkController::class, 'reststart'])->middleware('auth');

//休憩終了
// Route::post('/restend', [WorkController::class, 'restend'])->middleware('auth');