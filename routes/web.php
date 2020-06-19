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

Route::get('/backend/login', function () {
    return view('backend.login');
});

Route::get('/backend/transactions' , function () {
    return view ('backend.transactions.index');
});

Route::get('/backend/transactions/view', function () {
    return view('backend.transactions.show');
});

Route::get('/backend/settings', function () {
    return view('backend.settings.settings');
});
