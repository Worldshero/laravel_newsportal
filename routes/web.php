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




//route for frontend view

Route::get('/newsportal', 'CourseController@index');

//route for detail

Route::get('/newsportal/detail', function ()
 {
    return view('newsportal.detail');
});

// storing front end landing page data

Route::get('/newsportal/course', function ()
 {
    return view('newsportal.course');

});
// route for detail blade data storing in database
Route::get('/newsportal/detailvalve', function ()
 {
    return view('newsportal.DetailValue');





Route::resource('course','CourseController');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
