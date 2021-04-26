<?php

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

Route::get('/top', function () {
    return view('top');
})->name('top');

Route::get('/mypage/{userId}', 'UserController@mypage')->name('mypage'); 

Route::get('/gate', function () {
    return view('gate');
})->name('gate.get');

// Route::get('/gate', 'Auth\RegisterController@showRegistrationForm')->name('gate');
Route::post('/sinup', 'Auth\RegisterController@register')->name('sinup.post');
//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.post');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout.get');


Route::get('/calendar/{year}-{month}', 'CalendarController@show')->name('calendar');


// 認証のいるページ
Route::group(['middleware' => ['auth']], function () {
    Route::get('/create', 'DrugController@createGet')->name('createDrug.get');
    Route::post('/create', 'DrugController@createPost')->name('createDrug.post');
    Route::post('/store', 'DrugController@store')->name('storeDrug');
    Route::delete('/delete/{drugId}', 'DrugController@destroy')->name('destroyDrug');
    Route::get('/take/{timeId}/{date}', 'HistoryController@take')->name('take');
    Route::get('/forget/{timeId}/{date}', 'HistoryController@forget')->name('forget');
    Route::get('/user/destroy', 'UserController@destroyPage')->name('destroyUserPage');
    Route::delete('/user/destroy/{id}', 'UserController@destroy')->name('destroyUser');



});

