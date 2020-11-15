<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TweetController;

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

Route::get('/tweets', [TweetController::class, 'showListAll'])->name('post.tweets');
Route::get('/tweets/create', [TweetController::class, 'showForm'])->name('post.tweets.create');
Route::post('/tweets', [TweetController::class, 'formProcess'])->name('post.tweets.process');
