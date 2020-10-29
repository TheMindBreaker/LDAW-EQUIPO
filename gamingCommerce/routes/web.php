<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/fer', function () {
    return view('fernando');
});

Route::get('/memo', function () {
    return view('memo');
});

Route::get('/juan', function () {
    return view('juan');
});


Route::resource('users', App\Http\Controllers\usersController::class);

Route::resource('consoles', App\Http\Controllers\consolesController::class);