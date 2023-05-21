<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\BackendController;
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
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/single-post', [FrontendController::class, 'single'])->name('frontend.single-post');


Route::group(['prefix' =>'dashboard'], function(){
    Route::get('/', [BackendController::class, 'index'])->name('back.index');
    Route::get('/category', [BackendController::class, 'category'])->name('back.category');
});

