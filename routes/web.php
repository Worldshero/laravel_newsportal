<?php



Route::get('/', function () {
    return view('welcome');
});

 Route::auth();

Route::group(['middleware'=>['User:web']],function (){
    Route::resource('course/detailvalue', 'CoursedetailController');
    Route::resource('course','CourseController');
    Route::get('dashboard', function () {
        return view('Admin.layout.dashboard');
    });
});
Route::get('check', 'DashboardController@BarGraph');

Route::resource('frontend','FrontendController');

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

