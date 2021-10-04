<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('anggota/index', [App\Http\Controllers\AnggotaController::class, 'index'])->name('anggota.index');

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/daftaranggota', function () {
    return view('daftaranggota');
})->name('daftaranggota');
