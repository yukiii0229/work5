<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::GET('/work', [WorkController::class, 'index']);
Route::POST('/work/in', [WorkController::class, 'index']);
