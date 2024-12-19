<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('AdminDashboard');
});
Route::get('/AdminDashboard', function () {
    return view('AdminDashboard');
});

Route::get('/AdminBooks', function () {
    return view('AdminBooks');
});

Route::get('/AdminUsers', function () {
    return view('AdminUsers');
});

Route::get('/AdminAddBook', function () {
    return view('AdminAddBook');
});

Route::get('/AdminAddBook', function () {
    return view('AdminAddBook');
});

Route::get('/AdminAproveBook', function () {
    return view('AdminAproveBook');
});

Route::get('/AdminRemoveBook', function () {
    return view('AdminRemoveBook');
});

Route::get('/booklist', function () {
    return view('booklist');
});

Route::get('/BookView', function () {
    return view('BookView');
});

Route::get('/landingPage', function () {
    return view('landingPage');
});


Route::get('/booklist', function () {
    return view('booklist');
});

Route::get('/BookView', function () {
    return view('BookView');
});

Route::get('/landingPage', function () {
    return view('landingPage');
});