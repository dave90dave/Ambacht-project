<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MapController;
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



Route::get('/market', function () {
    return view('market');
});

Route::get('/product', function () {
    return view('product');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::post('/home','RegisterController@upload')->name('upload');

Route::get('/image/upload', [HomeController::class, 'uploadImage']);
Route::post('/image/save', [HomeController::class, 'saveImage']);

//Route::get('/home', 'HomeController@index')->name('home');
//create for redirect to admin panel using middleware (we have changes in AdminMiddleware,kernel,LoginController files //here auth and admin indicate to folder)
Route::group(['middleware'  => ['auth','admin']], function() {
	// you can use "/admin" instead of "/dashboard"
	Route::get('/dashboard', function () {
    	return view('admin.dashboard');
	})->name('adminPanel');
	// below is used for adding the users.
    Route::get('/users','App\Http\Controllers\Admin\DashboardController@users')->name('users');
    //below route for edit the users detail and update.
    Route::get('/user-edit/{id}','App\Http\Controllers\Admin\DashboardController@useredit');
    //update button route
    Route::put('/user-register-update/{id}','App\Http\Controllers\Admin\DashboardController@userupdate');
    //delete route
    Route::delete('/user-delete/{id}','App\Http\Controllers\Admin\DashboardController@userdelete');

    Route::get('/searchuser/', 'App\Http\Controllers\UserController@searchuser')->name('searchuser');

    Route::get('/profile-info', 'App\Http\Controllers\UserController@profile');

    Route::get('/map/', 'App\Http\Controllers\MapController@index')->name('map');

    Route::get('/products','App\Http\Controllers\Admin\ProductsController@show');


	Route::get('/products-create','App\Http\Controllers\Admin\ProductsController@Create');

    Route::post('/products','App\Http\Controllers\Admin\ProductsController@show', 'store');
	//below route for edit the products detail and update.
	Route::get('/products-edit/{id}','App\Http\Controllers\Admin\ProductsController@registeredit');
	//update button route
	Route::put('/products-update/{id}','App\Http\Controllers\Admin\ProductsController@registerupdate');
	//delete route
	Route::delete('/products-delete/{id}','App\Http\Controllers\Admin\ProductsController@registerdelete');


    //Route::get('/admin.products', [ProductsController::class, 'show']);
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//user dashboard uitgeschakeld, omdat deze conflicteerde met het admin dashboard
//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/markets', [App\Http\Controllers\MarketController::class, 'index'])->name('markets');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
