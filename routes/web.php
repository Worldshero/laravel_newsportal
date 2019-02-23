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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/newsportal', 'CourseController@index');

Route::get('/newsportal/detail', function ()
 {
    return view('newsportal.detail');
});
Route::get('/newsportal/course', function ()
 {
    return view('newsportal.course');
});



Route::resource('course','CourseController');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
