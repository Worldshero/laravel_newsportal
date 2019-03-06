<?php



Route::get('/', function () {
    return view('welcome');
});






Route::resource('course/detailvalue', 'CoursedetailController');
Route::resource('course','CourseController');
Route::resource('frontend','FrontendController');

Route::resource('frontend/admin/home','AdminController');











Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

