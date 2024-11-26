<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CopounController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\OrderItemController;
use App\Http\Controllers\Admin\AdminloginController;
use App\Http\Controllers\Admin\AppointmentController;

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
Route::get('/dashborad', [AdminloginController::class,'dashborad'])->name('admin.dashborad');


// Product recource route
Route::resource('/product',ProductController::class);
Route::resource('/contact',ContactUsController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/copoun', CopounController::class);
Route::get('/dashboard', [HomeController::class,'index'])->name('admin.dashboard');
Route::delete('/contact/{contact}', [ContactUsController::class, 'destroy'])->name('contact.destroy');
Route::delete('/contacts/{id}/force-delete', [ContactUsController::class, 'forceDelete'])->name('contact.forceDelete');
Route::resource('orders', OrderController::class);
Route::resource('orders', OrderController::class);
Route::resource('order_items', OrderItemController::class);
Route::get('order_items/trashed', [OrderItemController::class, 'trashed'])->name('order_items.trashed');
Route::post('order_items/{id}/restore', [OrderItemController::class, 'restore'])->name('order_items.restore');
Route::resource('carts', CartController::class);
Route::resource('reviews', ReviewController::class)->only(['index', 'show', 'destroy']);
Route::get('reviews/{id}/restore', [ReviewController::class, 'restore'])->name('reviews.restore');
Route::delete('reviews/{id}/force-delete', [ReviewController::class, 'forceDelete'])->name('reviews.forceDelete');
Route::resource('appointments', AppointmentController::class);
Route::resource('users', UserController::class);

// Soft delete restore and force delete routes
Route::get('users/{id}/restore', [UserController::class, 'restore'])->name('users.restore');
Route::delete('users/{id}/force-delete', [UserController::class, 'forceDelete'])->name('users.forceDelete');







Route::group(['prefix' => 'admin'],function(){
   
    Route::group(['middleware'=>'admin.guest'],function(){
        Route::get('/login', [AdminloginController::class,'index'])->name('admin.login');

        Route::post('/authenticate', [AdminloginController::class,'authenticate'])->name('admin.authenticate');


    });
    Route::group(['middleware'=>'admin.auth'],function(){

    });
});