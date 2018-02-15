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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles','ArticleController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/siswa/create', 'HomeController@create')->name('siswa.create');
Route::post('/siswa/create', 'HomeController@store')->name('siswa.store');
Route::get('/siswa/{post}/edit', 'HomeController@edit')->name('siswa.edit');
Route::post('/siswa/{post}/edit', 'HomeController@update')->name('siswa.update');
Route::delete('/siswa/{post}/delete', 'HomeController@destroy')->name('siswa.destroy'); 

