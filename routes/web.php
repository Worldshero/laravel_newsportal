<?php


// Route::auth();
//Backend app for insert values
Route::group(['middleware'=>['User:web']],function (){
    Route::resource('course/detailvalue', 'CoursedetailController');
    Route::resource('course','CourseController');
    Route::get('dashboard', 'DashboardController@BarGraph');
});


// login and registration Admin and other roles

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::resource('/user', 'UserController');
//frontend view and actions for user
Route::resource('frontend','FrontendController');




