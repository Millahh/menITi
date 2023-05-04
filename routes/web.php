<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiodataController;
use App\Models\User;
use App\Models\biodata_mentee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;

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
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('log-checkrole', [UserController::class, 'logincustom'])->name('login.checkrole');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('log-biodata', [UserController::class, 'registercustom'])->name('register.checkrole');

Route::post('biodata-mentee', [BiodataController::class, 'biodata_mentee'])->name('biodata.mentee');
// Route::post('biodata-mentor', [UserController::class, 'registercustom'])->name('register.checkrole');

Route::get('tes', function () {
    return view('user.biodata-mentee');
});

Route::get('beranda', function () {
    return view('beranda.mentee');
});
Route::get('/home', [App\Http\Controllers\UserController::class, 'login'])->name('home');

Route::get('tez', function () {
    return view('tez');
});

