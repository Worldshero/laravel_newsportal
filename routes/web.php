<?php



// Route::get('/welcome', function () {
//     return view('welcome');
// });







Route::resource('course','CourseController');
Route::resource('frontend','FrontendController');
Route::resource('course/detailvalue', 'CoursedetailController');

Route::get('frontend/det/{id}', 'FrontendController@showFrontend');








// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

