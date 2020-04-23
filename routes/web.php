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
    return view('index');
})->name('index');

/*
Route::get('/view', function () {
    return view('view');
})->name('view');
*/
Route::GET('/', 'FormController@index')->name('form.index');

Route::POST('/create', 'FormController@store')->name('form.create');

Route::GET('/edit', 'FormController@edit')->name('form.edit');

Route::PUT('/update{$id}','FormController@update')->name('form.update');

Route::DELETE('/delete{$id}','FormController@destroy')->name('form.destroy');







 Route::resource('/forms','FormController');





