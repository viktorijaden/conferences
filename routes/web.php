<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InfoController;

Route::get('/', function () { return view('welcome'); });

Route::get('/index', function () { return view('main.index'); })->name('index');

Route::get('/client', function () { return view('user_client.client'); })->name('client');

Route::get('/conferencecontent', function () { return view('user_client.conferencecontent'); })->name('conferencecontent');

Route::get('/show', function () { return view('user_client.show'); })->name('show');

Route::get('/worker', function () { return view('user_worker.worker'); })->name('worker');

Route::get('/admin', function () { return view('user_admin.admin'); })->name('admin');

Route::get('/userinfo', function () { return view('user_admin.userinfo'); })->name('userinfo');

Route::get('/conferenceinfo', function () { return view('user_admin.conferenceinfo'); })->name('conferenceinfo');

Route::get('/info', function () { return view('conferences.info'); })->name('info');

Route::get('/', [HomeController::class, 'index'])->name('main.index');

