<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);



Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/nabnit-profile', function () {
    return view('nabnit_dashboard');
});

Route::view('/about-me', 'partials.about_me')->name('about_me');
Route::view('/skills', 'partials.what_i_am_good')->name('skills');
Route::view('/work', 'partials.my_work')->name('work');
Route::view('/image-upload', 'partials.image_upload')->name('image_upload');





// Route::group([

//     'middleware' => 'auth:sanctum',
//     // 'prefix' => 'auth'

// ], function ($router) {

//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });