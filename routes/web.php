<?php

use App\Http\Controllers\AjaxController\CustomerAjaxController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryTagController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\CategoryController;

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


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::resource('/', HomeController::class);


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//  Admin
    Route::resource('User', UserController::class);
    Route::resource('Role', RoleController::class);
    Route::resource('Permission', PermissionController::class);
    Route::resource('Category', CategoryController::class);
    Route::resource('Child-Category', ChildCategoryController::class);
    Route::resource('Category-Tag', CategoryTagController::class);

//  Seller
    Route::resource('SellerDashboard', SellerDashboardController::class);
    Route::resource('SellerProduct', ProductController::class);
    Route::patch('SellerProductPhoto/{id}', [ProductController::class, 'SellerProductPhoto'])->name('SellerProductPhoto.update');

//  Customer
    Route::resource('CustomerDashboard', CustomerDashboardController::class);
    Route::resource('Cart',CartController::class);
    Route::get('QuantityUpdate',[CustomerAjaxController::class, 'QuantityUpdate']);
    Route::get('QuantityCart',[CustomerAjaxController::class, 'Cart']);
    Route::resource('Order',OrderController::class);
});

require __DIR__.'/auth.php';
