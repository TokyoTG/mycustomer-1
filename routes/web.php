<?php

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


// backend codes

Route::get('/backend/login', function () {
    return view('backend.login');
});

Route::get('backend/recoverPassword', function () {
    return view('backend.recoverPassword.recoverPassword');

});

Route::get('backend/activate', function () {
    return view('backend.activate.activate');

});


// dashboard
Route::get('/backend/dashboard', function () {
    return view('backend.dashboard');
});


// transaction

Route::get('/backend/transactions' , function () {
    return view ('backend.transactions.index');	    
});

Route::get('/backend/transactions/view', function () {
    return view('backend.transactions.show');	    
});





