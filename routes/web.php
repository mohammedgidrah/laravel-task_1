<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/', function () {
    return view('master');
});
Route::get('/chart', function () {
    return view('chart');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/form', function () {
    return view('form');
});


