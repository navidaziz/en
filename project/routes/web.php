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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('psra.home');
// });

Route::get('/', function () {
    return view('psra_new.home2');
})->name('home2');

Route::get('registration', function () {
    return view('psra_new.registration');
})->name('registration');
Route::get('administration', function () {
    return view('psra_new.administration');
})->name('administration');
Route::get('operation', function () {
    return view('psra_new.operation');
})->name('operation');

Route::get('circular', function () {
    return view('psra.circular');
})->name('circular');
Route::get('notification', function () {
    return view('psra.notification');
})->name('notification');
Route::get('archives', function () {
    return view('psra.archives');
})->name('archives');
