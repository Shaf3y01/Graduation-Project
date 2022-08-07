<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Admin\Categorycontroller;
use App\Http\Controllers\Frontend\FrontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


    // frontend controllers
Route::get('/' , [FrontendController::class, 'index']);
Route::get('category' ,[FrontendController::class, 'category']);
Route::get('category/{slug}',[FrontendController::class, 'viewcategory'] );
Route::get('category/{cate_slug}/{prod_slug}',[FrontendController::class,'productview']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// add to cart route
Route::POST('add-to-cart' , [CartController::class , 'addProduct']);
Route::POST('delete-cart-item' , [CartController::class , 'deleteproduct']);
Route::middleware(['auth'])->group(function () {
    Route::get('cart' , [CartController::class , 'viewcart']);
});
 

Route::middleware(['auth','isAdmin'])->group(function(){
    
    // Dashboard route
    Route::get('/dashboard', "Admin\FrontendController@index");

    // categories route
    Route::get('categories',"Admin\Categorycontroller@index");
    Route::get('add-category','Admin\Categorycontroller@add');
    Route::POST('insert-category','Admin\Categorycontroller@insert');
    Route::get('edit-category/{id}', [Categorycontroller::class , 'edit']);
    Route::Put('update-category/{id}', [Categorycontroller::class , 'update']);
    Route::get('delete-category/{id}', [Categorycontroller::class , 'destroy']);

    // product route
    Route::get('products' , [ProductController::class, 'index']);
    Route::get('add-products' , [ProductController::class, 'add']);
    Route::POST('insert-product' , [ProductController::class, 'insert']);
    Route::get('edit-product/{id}' , [ProductController::class, 'edit']);
    Route::put('update-product/{id}' , [ProductController::class, 'update']);
    Route::get('delete-product/{id}',[ProductController::class, 'destroy']);
});
