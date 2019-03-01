<?php



// Route::get('/welcome', function () {
//     return view('welcome');
// });






Route::resource('course/detailvalue', 'CoursedetailController');
Route::resource('course','CourseController');
Route::resource('frontend','FrontendController');

Route::get('frontend/det/{id}', 'FrontendController@showFrontend');








// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

