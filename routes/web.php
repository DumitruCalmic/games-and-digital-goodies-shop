<?php

use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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

Route::get('/', function () {
    return view('pages/homepage');

});

Route::get('/categories', function () {
    return view('pages/categories');

});

Route::get('/blog-list', function () {
    return view('pages/blog-list');

});

Route::get('/blog-article', function () {
    return view('pages/blog-article');

});

Route::match(['get'], '/contact-us',[ContactUsController::class, 'contactUs']);

Route::post('/store-contact-info',[ContactUsController::class, 'storeContactInfo']);

Route::get('/about-us', function () {
    return view('pages/about-us');

});

Route::group(['prefix' => '/user'], function () {
    Route::get('/info', ['uses' => UserInfoController::class . '@index']);
    Route::post('/info', ['uses' => UserInfoController::class . '@storeInfo']);
    Route::get('/info/stored', ['uses' => UserInfoController::class . '@stored']);
});

Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'create'])->name('contactUs.store');