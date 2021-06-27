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

//admin panel
Route::group(['middleware'  => ['auth','admin']], function() {

	// you can use "/admin" instead of "/dashboard"
    Route::get('/admin', 'App\Http\Controllers\Admin\DashboardController@index')->name('adminPanel');

    Route::post('/admin/profile/togglepublic','App\Http\Controllers\Admin\DashboardController@togglePublic');

    Route::redirect('/dashboard', '/admin', 301);

    //USERS

    //list
	Route::get('/admin/users','App\Http\Controllers\Admin\UserController@list')->name('users');
    //create
	Route::get('/admin/user/create','App\Http\Controllers\Admin\UserController@createUserView');
    //create update
	Route::post('/admin/user/create','App\Http\Controllers\Admin\UserController@createUserPost');
    //update
	Route::get('/admin/user/edit/{id}','App\Http\Controllers\Admin\UserController@updateUserView');
    //update store
	Route::put('/admin/user/edit/{id}','App\Http\Controllers\Admin\UserController@updateUserPut');
    //delete
	Route::delete('/admin/user/delete/{id}','App\Http\Controllers\Admin\UserController@deleteUser');


    //PRODUCTS

    //list
    Route::get('/admin/products','App\Http\Controllers\Admin\ProductsController@list');
	//create
    Route::get('/admin/product/create','App\Http\Controllers\Admin\ProductsController@createProductView');
    //create store
    Route::post('/admin/product/create','App\Http\Controllers\Admin\ProductsController@createProductPost');
	//update
	Route::get('/admin/product/edit/{id}','App\Http\Controllers\Admin\ProductsController@updateProductView');
	//update store
	Route::put('/admin/product/edit/{id}','App\Http\Controllers\Admin\ProductsController@updateProductPut');
	//delete
	Route::delete('/admin/product/delete/{id}','App\Http\Controllers\Admin\ProductsController@deleteProduct');

    //REVIEW
        //select page
        Route::get('/admin/review/','App\Http\Controllers\Admin\ReviewController@select');

    //product
        //list
        Route::get('/admin/review/products','App\Http\Controllers\Admin\ReviewController@productList');
        //approve
        Route::post('/admin/review/product/approve/{id}','App\Http\Controllers\Admin\ReviewController@productApprove');
        //refuse
        Route::get('/admin/review/product/refuse/{id}','App\Http\Controllers\Admin\ReviewController@productRefuseView');
        Route::put('/admin/review/product/refuse/{id}','App\Http\Controllers\Admin\ReviewController@productRefusePut');

    //market
        //list
        Route::get('/admin/review/markets','App\Http\Controllers\Admin\ReviewController@marketList');
        //approve
        Route::post('/admin/review/market/approve/{id}','App\Http\Controllers\Admin\ReviewController@marketApprove');
        //refuse
        Route::get('/admin/review/market/refuse/{id}','App\Http\Controllers\Admin\ReviewController@marketRefuseView');
        Route::put('/admin/review/market/refuse/{id}','App\Http\Controllers\Admin\ReviewController@marketRefusePut');

});


//FRONT END

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/markets', [App\Http\Controllers\MarketController::class, 'index'])->name('markets');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/profiles', [App\Http\Controllers\HomeController::class, 'profiles'])->name('profiles');
Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::get('/profile','App\Http\Controllers\ProfileController@viewImage')->name('profileUploadFileView');
Route::put('/profile','App\Http\Controllers\ProfileController@storeImage')->name('profileUploadFile');


//LOGGED IN USERS
//user dashboard uitgeschakeld, omdat deze conflicteerde met het admin dashboard
//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
