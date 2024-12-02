<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () { return view('welcome'); });
Route::get('/index', function () { return view('main.index'); })->name('index');
Route::get('/', [HomeController::class, 'index'])->name('main.index');

Route::get('/client', [ClientController::class , 'index' ])->name('client');
Route::get('/worker', function () { return view('user_worker.worker'); })->name('worker');
Route::get('/admin', function () { return view('user_admin.admin'); })->name('admin');

Route::get('/userinfo', [AdminController::class , 'index' ])->name('userinfo');
Route::delete('/userinfo/{id}', [AdminController::class, 'destroy'])->name('userinfo.destroy');


Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/conferenceinfo', [ConferenceController::class, 'index'])->name('conferenceinfo');
Route::post('/conference/store', [ConferenceController::class, 'store'])->name('conferences.store');
Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
Route::get('/conferences/edit/{id}', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::post('/conference/update/{id}', [ConferenceController::class, 'update'])->name('conferences.update');
