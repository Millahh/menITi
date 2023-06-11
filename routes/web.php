<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendRequestController;
use App\Http\Controllers\SearchAndSortController;
use App\Http\Controllers\BookmarkController;
use App\Models\User;
use App\Models\biodata_mentee;
use App\Models\biodata_mentor;
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

Route::match(['post'],'biodata-mentee', [BiodataController::class, 'biodata_mentee'])->name('biodata.mentee');
Route::match(['post'],'biodata-mentor', [BiodataController::class, 'biodata_mentor'])->name('biodata.mentor');

Route::get('profile_mentor/{id_mentor}/{id_user}', [ProfileController::class, 'profile_mentor'])->name('profile_mentor');
Route::get('profile_mentee/{id_mentee}/{id_user}', [ProfileController::class, 'profile_mentee'])->name('profile_mentee');

Route::get('beranda-mentee', [BiodataController::class, 'beranda_mentee'])->name('beranda.mentee');
Route::get('beranda-mentor', [BiodataController::class, 'beranda_mentor'])->name('beranda.mentor');

Route::get('search', [SearchAndSortController::class, 'search'])->name('search');

Route::get('send-req/{id}/{id_user}', [SendRequestController::class, 'send'])->name('send-req');
Route::get('reject/{id}', [SendRequestController::class, 'reject'])->name('req-reject');
Route::get('acc/{id}', [SendRequestController::class, 'acc'])->name('req-acc');

Route::get('/home', [App\Http\Controllers\UserController::class, 'login'])->name('home');

Route::get('review-rating/{id}/{id_user}', [ProfileController::class, 'review_rating'])->name('review-rating');
Route::get('send-review-rating', [ProfileController::class, 'send_review_rating'])->name('send-review-rating');

Route::get('bookmark/{id}', [BookmarkController::class, 'action'])->name('action');
Route::get('bookmark-list', [BookmarkController::class, 'bookmark_list'])->name('bookmark-list');

Route::get('/tez', function () {
    return view('tez');
});