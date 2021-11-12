<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
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

Route::prefix('/admin')->group(function (){
    Route::get('/login',[LoginController::class,'showFormLoginAdmin'])->name('admin.login');
    Route::post('/login',[LoginController::class,'checkLoginAdmin'])->name('admin.checkLogin');
    Route::get('/logout',[LoginController::class,'logoutAdmin'])->name('admin.logout');
});



Route::middleware('checkLogin')->prefix('/admin')->group(function (){
    Route::get('/',function (){return view('admin.dashboard');})->name('dashboard');
    Route::prefix('/products')->group(function (){
        Route::get('/',[ProductsController::class,'index'])->name('admin.product.list');
        Route::get('/create',[ProductsController::class,'create'])->name('admin.product.create');
        Route::post('/create',[ProductsController::class,'store'])->name('admin.product.store');
        Route::get('/update/{id}',[ProductsController::class,'edit'])->name('admin.product.edit');
        Route::post('/update/{id}',[ProductsController::class,'update'])->name('admin.product.update');
        Route::get('/delete/{id}',[ProductsController::class,'destroy'])->name('admin.product.delete');
        Route::post('/detail/{id}',[ProductsController::class,'show'])->name('admin.product.detail');
        Route::get('/stopsale',[ProductsController::class,'listStopSale'])->name('admin.product.stopsale');
        Route::get('/resale/{id}',[ProductsController::class,'reSale'])->name('admin.product.resale');
        Route::post('/importproduct',[ProductsController::class,'upQuantity'])->name('admin.product.importproduct');
        Route::get('/search',[ProductsController::class,'search'])->name('admin.product.search');
    });
});

Route::prefix('/')->group(function (){
    Route::get('/',[ProductsController::class,'index'])->name('product');
    Route::get('/{id}/addToCart',[CartsController::class,'addToCart'])->name('addToCart');
    Route::get('/cart',[CartsController::class,'cart'])->name('showCart');
    Route::post('/cart',[CartsController::class,'updateCart'])->name('updateCart');
});
Route::prefix('/users')->group(function (){
    Route::get('/checkout',[UsersController::class,'checkOutCart'])->name('user.checkout.cart');
    Route::get('/login',[LoginController::class,'showFormLogin'])->name('user.showFormLogin');
    Route::post('/login',[LoginController::class,'login'])->name('user.login');
    Route::post('/register',[LoginController::class,'register'])->name('user.register');
   /* Route::get('/addInfoUser',[UsersController::class,'showFormAddInfo'])->name('user.showFormAddInfo');
    Route::post('/addInfoUser',[UsersController::class,'addUserInfo'])->name('user.updateInfo');*/
});



Route::get('/weather',[\App\Http\Controllers\WeatherController::class,'showWeather'])->name('weather');

Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

