<?php



Route::get('/', function () {
    return view('welcome');
});



// Route::group(['middleware' => ['auth:web']], function () {});

    Route::resource('course/detailvalue', 'CoursedetailController');
Route::resource('course','CourseController');




Route::resource('frontend','FrontendController')->middleware('User');

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

