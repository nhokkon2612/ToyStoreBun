<?php

use App\Http\Controllers\Api\ProductControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::middleware('checkLogin')->prefix('/admin')->group(function (){
    Route::prefix('/product')->group(function (){
        Route::get('/show/{value}',[ProductsController::class,'show'])->name('admin.product.show');
    });
});*/


Route::get('products',[ProductControllerApi::class,'index']);



