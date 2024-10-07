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
