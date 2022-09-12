<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Top\IndexController;
use App\Http\Controllers\Top\melancholy;
use App\Http\Controllers\Contact\ContactFormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/a', function () {
    return view('welcome');
});
Route::get('/',[IndexController::class,'show'])->name('top');

Route::prefix('melancholy')->group(function () {
    Route::get('/',[melancholy::class,'show']);
    Route::get('/check',[melancholy::class,'check']);
    Route::post('/check/ans',[melancholy::class,'ans'])->name('ans');
});
//お問合せフォーム
Route::prefix('contact')->group(function(){
    Route::get('/',[ContactFormController::class,'input']);
});
