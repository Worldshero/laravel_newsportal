<?php



Route::get('/', function () {
    return view('welcome');
});






Route::resource('course/detailvalue', 'CoursedetailController');
Route::resource('course','CourseController');
Route::resource('frontend','FrontendController');

Route::get('frontend/det/{id}', 'FrontendController@showFrontend');



Route::resource('slides', 'SliderController');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

