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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/team', function () {
    return view('team');
});

Route::get('/user', function () {
    return view('userPage');
});
Route::get('/admin', function () {
    return view('admin.dasboard');
})->middleware(['auth','admin']);

Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/dasboard', [App\Http\Controllers\Admin\DasboardController::class,'index']);
    Route::get('/category/profile', [App\Http\Controllers\HomeController::class,'profile']);
    Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('/category/create', [App\Http\Controllers\Admin\CategoryController::class,'store']);
    Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class,'update']);
    Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class,'destroy']);
    Route::get('/trash', [App\Http\Controllers\Admin\CategoryController::class,'trash']);
    Route::get('/trash/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class,'delete']);
    Route::get('/trash/restore/{id}', [App\Http\Controllers\Admin\CategoryController::class,'restore']);



    


    
});



