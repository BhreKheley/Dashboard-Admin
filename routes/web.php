<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\filmController;
use App\http\Controllers\TiketController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return  view('home');
});

    Route::get('/about', function () {
        return  view('about');
    });

Route::group(['prefix' => '/tiket'], function(){
    Route::get('/all', [TiketController::class, 'index']);
    Route::get('/detail/{tiket:id}', [TiketController::class, 'show']);
    Route::get('/create', [TiketController::class, 'create']);
    Route::post('/add', [TiketController::class, 'store']);

    Route::get('/edit/{tiket}', [TiketController::class, 'edit']);
    Route::post('/update/{tiket}', [TiketController::class, 'update']);
    Route::delete('/delete/{tiket}', [TiketController::class, 'destroy']);
});

Route::group(['prefix' => '/film'], function(){
    Route::get('/all', [filmController::class, 'index']);
    Route::get('/detail/{film:id}', [filmController::class, 'show']);
});