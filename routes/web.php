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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});*/

Route::get('/course', 'CourseController@index')->name('course.index');
Route::Post('/course', 'CourseController@store')->name('course.store');
Route::get('/course/create', 'CourseController@create')->name('course.create');
Route::PUT('/course/{id}', 'CourseController@update')->name('course.update');
Route::get('/course/{id}', 'CourseController@show')->name('course.show');
Route::delete('/course/{id}/destroy', 'CourseController@destroy')->name('course.destroy');
Route::get('/course/{id}/edit', 'CourseController@edit')->name('course.edit');

//Route::resource('course', 'CourseController');
