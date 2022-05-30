<?php

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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/stats', function () {
    return view('stats');
});

Route::get('/profile', function () {
    return view('profile');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/testing1', 'App\Http\Controllers\HomeController@index')->name('testing1');
Route::resource('topics', 'App\Http\Controllers\TopicController');
Route::resource('questions', 'App\Http\Controllers\QuestionController');
Route::resource('results', 'App\Http\Controllers\ResultsController');
Route::resource('adminpanel', 'App\Http\Controllers\AdminPanelController');
Route::resource('questionsOptions', 'App\Http\Controllers\QuestionsOptionsController');
Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('stats', 'App\Http\Controllers\StatsController');