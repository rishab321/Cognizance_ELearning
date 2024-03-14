<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/services', function () {
    return view('home.services');
});
Route::get('/portfolio', function () {
    return view('home.portfolio');
});
Route::get('/team', function () {
    return view('home.team');
});
Route::get('/user', function () {
    return view('home.user');
});

Route::middleware(['auth'])->group(function () {

Route::get('/category/{slug}', [App\Http\Controllers\Client\CategoryController::class,'index']);
Route::get('/category/{category_slug}/{course_slug}', [App\Http\Controllers\Client\CourseController::class,'index']);
    
});


Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/dasboard', [App\Http\Controllers\Admin\DasboardController::class,'index']);

    Route::get('/category/profile', [App\Http\Controllers\HomeController::class,'profile']);
    Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('/category/create', [App\Http\Controllers\Admin\CategoryController::class,'store']);
    Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class,'update']);
    Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class,'destroy']);
    
    Route::get('/courses', [App\Http\Controllers\Admin\CourseController::class,'index']);
    Route::get('/course/create', [App\Http\Controllers\Admin\CourseController::class,'create']);
    Route::post('/course/create', [App\Http\Controllers\Admin\CourseController::class,'store']);
    Route::get('/course/edit/{id}', [App\Http\Controllers\Admin\CourseController::class,'edit']);
    Route::post('/course/update/{id}', [App\Http\Controllers\Admin\CourseController::class,'update']);
    Route::get('/course/delete/{id}', [App\Http\Controllers\Admin\CourseController::class,'destroy']);

    Route::get('/trash', [App\Http\Controllers\Admin\CategoryController::class,'trash']);
    Route::get('/trash/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class,'delete']);
    Route::get('/trash/restore/{id}', [App\Http\Controllers\Admin\CategoryController::class,'restore']);    
    
    Route::get('/featured/categories', [App\Http\Controllers\Admin\FeaturedController::class,'view_featured_categories']); 
    Route::get('/featured/courses', [App\Http\Controllers\Admin\FeaturedController::class,'view_featured_courses']);  
    Route::post('/featured/categories/store', [App\Http\Controllers\Admin\FeaturedController::class,'store_featured_category']);   
    Route::get('/featured/courses', [App\Http\Controllers\Admin\FeaturedController::class, 'view_featured_courses']);
    Route::get('/featured/categories/delete/{id}', [App\Http\Controllers\Admin\FeaturedController::class, 'remove_featured_category']);
    
});



