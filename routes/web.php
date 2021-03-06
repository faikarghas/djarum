<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KretekCollectionController;
use App\Http\Controllers\InspirationController;
use App\Http\Controllers\StoreLocationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
// Route::get('/kretek-collection',[KretekCollectionController::class,'index'])->name('kretek');
Route::get('/kretek-collection',[KretekCollectionController::class,'kretek'])->name('kretek');
Route::get('/kretek/{slug}',[KretekCollectionController::class,'detail'])->name('kretek-detail');
Route::get('/inspiration',[InspirationController::class,'index'])->name('inspiration');
Route::get('/inspiration/{slug}',[InspirationController::class,'detail'])->name('inspiration-detail');
Route::get('/testimonials',[TestimonialsController::class,'index'])->name('testimonials');
Route::get('/store-location',[StoreLocationController::class,'index'])->name('store');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/membership',[ContactController::class,'membership'])->name('membership');

Route::post('/api/post-contact',[ContactController::class,'postContact'])->name('post-contact');


Route::get('/api-store-name/api/{city}',[StoreLocationController::class,'getStoreNameByCity'])->name('getStoreNameByCity');
Route::get('/api-store-location/api/{city}/{store_name}',[StoreLocationController::class,'getStoreLocation'])->name('getStoreLocation');
Route::get('/api-store-location/api/{city}',[StoreLocationController::class,'getStoreLocationByCity'])->name('getStoreLocationByCity');



// AUTH
Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware'=>['check_auth:admin']],function(){
        Route::get('/admin',[AdminController::class,'index'])->name('homeadmin');
    });
});

Route::get('login',[AuthController::class,'index'])->name('login');
Route::post('proses_login',[AuthController::class,'proses_login']);
Route::post('proses_register',[AuthController::class,'proses_register']);