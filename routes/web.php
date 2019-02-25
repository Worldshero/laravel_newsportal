<?php



// Route::get('/welcome', function () {
//     return view('welcome');
// });


// Route::get('/course/detail', function ()
//  {
//     return view('newsportal.detail');
// });







 
Route::resource('course/detailvalue', 'CoursedetailController');

Route::get('course/detail', 'CourseController@detail');
Route::resource('course','CourseController');







// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

