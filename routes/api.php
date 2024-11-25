<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialAccountController;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/nabnit-profile', function () {
    return view('nabnit_dashboard');
});

// about me routes

// Route for listing about_me details
Route::get('/about_me/index', [AboutMeController::class, 'index'])->name('about_me.index'); // GET: List all about_me
Route::view('/about_me/create', 'partials.about_me.create')->name('about_me.create'); // GET: Create Form
Route::post('/about_me/store', [AboutMeController::class, 'store'])->name('about_me.store'); // POST: Create a new about_me
Route::get('/about_me/{id}/edit', [AboutMeController::class, 'show'])->name('about_me.edit'); // GET: Show a specific about_me
Route::put('/about_me/{id}/update', [AboutMeController::class, 'update'])->name('about_me.update'); // PUT: Update a specific about_me
Route::delete('/about_me/{id}/delete', [AboutMeController::class, 'destroy'])->name('about_me.destroy'); // DELETE: Delete a specific about_me

// skills me routes
Route::get('/skills/index', [SkillController::class, 'index'])->name('skills.index'); // GET: List all skills
Route::view('/skills/create', 'partials.skills.create')->name('skills.create'); // GET: Create Form
Route::post('/skills/store', [SkillController::class, 'store'])->name('skills.store'); // POST: Create a new skills
Route::get('/skills/{id}/edit', [SkillController::class, 'show'])->name('skills.edit'); // GET: Show a specific skills
Route::put('/skills/{id}/update', [SkillController::class, 'update'])->name('skills.update'); // PUT: Update a specific skills
Route::delete('/skills/{id}/delete', [SkillController::class, 'destroy'])->name('skills.destroy'); // DELETE: Delete a specific skills

// work me routes
Route::get('/work/index', [WorkController::class, 'index'])->name('works.index'); // GET: List all work
Route::view('/work/create', 'partials.my_work.create')->name('works.create'); // GET: Create Form
Route::post('/work/store', [WorkController::class, 'store'])->name('works.store'); // POST: Create a new work
Route::get('/work/{id}/edit', [WorkController::class, 'show'])->name('works.edit'); // GET: Show a specific work
Route::put('/work/{id}/update', [WorkController::class, 'update'])->name('works.update'); // PUT: Update a specific work
Route::delete('/work/{id}/delete', [WorkController::class, 'destroy'])->name('works.destroy'); // DELETE: Delete a specific work

// social_account me routes
Route::get('/social_account/index', [SocialAccountController::class, 'index'])->name('social_account.index'); // GET: List all social_account
Route::view('/social_account/create', 'partials.social_account.create')->name('social_account.create'); // GET: Create Form
Route::post('/social_account/store', [SocialAccountController::class, 'store'])->name('social_account.store'); // POST: Create a new social_account
Route::get('/social_account/{id}/edit', [SocialAccountController::class, 'show'])->name('social_account.edit'); // GET: Show a specific social_account
Route::put('/social_account/{id}/update', [SocialAccountController::class, 'update'])->name('social_account.update'); // PUT: Update a specific social_account
Route::delete('/social_account/{id}/delete', [SocialAccountController::class, 'destroy'])->name('social_account.destroy'); // DELETE: Delete a specific social_account

// image_upload me routes
Route::get('/image_upload/index', [ImageUploadController::class, 'index'])->name('image_upload.index'); // GET: List all image_upload
Route::view('/image_upload/create', 'partials.image_upload.create')->name('image_upload.create'); // GET: Create Form
Route::post('/image_upload/store', [ImageUploadController::class, 'store'])->name('image_upload.store'); // POST: Create a new image_upload
Route::get('/image_upload/{id}/edit', [ImageUploadController::class, 'show'])->name('image_upload.edit'); // GET: Show a specific image_upload
Route::put('/image_upload/{id}/update', [ImageUploadController::class, 'update'])->name('image_upload.update'); // PUT: Update a specific image_upload
Route::delete('/image_upload/{id}/delete', [ImageUploadController::class, 'destroy'])->name('image_upload.destroy'); // DELETE: Delete a specific image_upload

// cv_upload me routes
Route::get('/cv_upload/index', [ImageUploadController::class, 'index'])->name('cv_upload.index'); // GET: List all cv_upload
Route::view('/cv_upload/create', 'partials.cv_upload.create')->name('cv_upload.create'); // GET: Create Form
Route::post('/cv_upload/store', [ImageUploadController::class, 'store'])->name('cv_upload.store'); // POST: Create a new cv_upload
Route::get('/cv_upload/{id}/edit', [ImageUploadController::class, 'show'])->name('cv_upload.edit'); // GET: Show a specific cv_upload
Route::put('/cv_upload/{id}/update', [ImageUploadController::class, 'update'])->name('cv_upload.update'); // PUT: Update a specific cv_upload
Route::delete('/cv_upload/{id}/delete', [ImageUploadController::class, 'destroy'])->name('cv_upload.destroy'); // DELETE: Delete a specific cv_upload

// Route::group([

//     'middleware' => 'auth:sanctum',
//     // 'prefix' => 'auth'

// ], function ($router) {

//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');

// });
