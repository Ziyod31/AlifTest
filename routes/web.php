<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\SearchController;
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

Route::view('/', 'index')->name('index');
Route::resource('contacts', ContactController::class);
Route::resource('phones', PhoneController::class);
Route::resource('emails', EmailController::class);
Route::get('/search/', [SearchController::class, 'search'])->name('search');
Route::get('/reset', [SearchController::class, 'reset'])->name('reset');