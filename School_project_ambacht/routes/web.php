<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/market', function () {
    return view('market');
});

Route::get('/product', function () {
    return view('product');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
//create for redirect to admin panel using middleware (we have changes in AdminMiddleware,kernel,LoginController files //here auth and admin indicate to folder)
Route::group(['middleware'  => ['auth','admin']], function() {
	// you can use "/admin" instead of "/dashboard"
	Route::get('/dashboard', function () {
    	return view('admin.dashboard');
	})->name('adminPanel');
	// below is used for adding the users.
	Route::get('/role-register','App\Http\Controllers\Admin\DashboardController@registered')->name('role-register');
	//below route for edit the users detail and update.
	Route::get('/role-edit/{id}','App\Http\Controllers\Admin\DashboardController@registeredit');
	//update button route
	Route::put('/role-register-update/{id}','App\Http\Controllers\Admin\DashboardController@registerupdate');
	//delete route
	Route::delete('/role-delete/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete');

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

