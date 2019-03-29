<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('detail/{id}', 'ApiController@CourseDetails');

//For course category
Route::get('course/{id}', 'ApiController@ShowCourse');
Route::post('course','ApiController@CreateCourse');

//for user register loginWithDetails
Route::post('user','userapiController@CreateUser');
Route::post('user','userapiController@loginWithDetails');
