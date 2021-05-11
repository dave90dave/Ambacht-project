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

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

//admin panel
Route::group(['middleware'  => ['auth','admin']], function() {
    Route::redirect('/dashboard', '/admin', 301);

    // you can use "/admin" instead of "/dashboard"
	Route::get('/admin', function () {
    	return view('admin.dashboard');
	})->name('adminPanel');

    //USERS

    //list
	Route::get('/admin/users','App\Http\Controllers\Admin\DashboardController@registered')->name('users');
    //update
	Route::get('/admin/user/edit/{id}','App\Http\Controllers\Admin\DashboardController@registeredit');
    //update store
	Route::put('/admin/user/edit/{id}','App\Http\Controllers\Admin\DashboardController@registerupdate');
    //delete
	Route::delete('/admin/user/delete/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete');


    //PRODUCTS

    //list
    Route::get('/admin/products','App\Http\Controllers\Admin\ProductsController@show');
	//create
    Route::get('/admin/product/create','App\Http\Controllers\Admin\ProductsController@Create');
    //create store
    Route::post('/admin/product/create','App\Http\Controllers\Admin\ProductsController@show', 'store');
	//update
	Route::get('/admin/product/edit/{id}','App\Http\Controllers\Admin\ProductsController@registeredit');
	//update store
	Route::put('/admin/product/update/{id}','App\Http\Controllers\Admin\ProductsController@registerupdate');
	//delete
	Route::delete('/admin/product/delete/{id}','App\Http\Controllers\Admin\ProductsController@registerdelete');

});


//FRONT END

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/markets', [App\Http\Controllers\MarketController::class, 'index'])->name('markets');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

//LOGGED IN USERS
//user dashboard uitgeschakeld, omdat deze conflicteerde met het admin dashboard
//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
