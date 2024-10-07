<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/client', function () {
    return view('user_client.client');
})->name('client');

Route::get('/worker', function () {
    return view('user_worker.worker');
})->name('worker');

Route::get('/admin', function () {
    return view('user_admin.admin');
})->name('admin');

Route::get('/userinfo', function () {
    return view('user_admin.userinfo');
})->name('userinfo');

Route::get('/conferenceinfo', function () {
    return view('user_admin.conferenceinfo');
})->name('conferenceinfo');

Route::get('/info', function () {
    return view('conferences.info');
})->name('info');
