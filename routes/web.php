<?php

use App\Http\Controllers\AjaxController\CustomerAjaxController;
use App\Http\Controllers\AjaxController\SellerAjaxController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CategoryMenuController;
use App\Http\Controllers\CategoryTagController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductDetailsController;

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
Route::resource('ProductDetails', ProductDetailsController::class);
Route::get('Categories/{id}', [CategoryMenuController::class, 'Categories']);
Route::get('ChildCategory/{id}', [CategoryMenuController::class, 'ChildCategory']);
Route::get('Tag/{id}', [CategoryMenuController::class, 'Tag']);


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
    Route::patch('SellerProductColor/{id}', [ProductController::class, 'SellerProductColor'])->name('SellerProductColor.updateColor');

//  Seller Ajax
    Route::get('CategoryChild',[SellerAjaxController::class, 'CategoryChild']);
    Route::get('CategoryTags',[SellerAjaxController::class, 'CategoryTags']);

//  Customer
    Route::resource('CustomerDashboard', CustomerDashboardController::class);
    Route::resource('Cart',CartController::class);
    Route::resource('Wishlist',WishlistController::class);
    Route::resource('Order',OrderController::class);
    Route::resource('OrderDetails',OrderDetailsController::class);
    Route::resource('Comment',CommentController::class);

//  Customer Ajax
    Route::get('AddToCart',[CustomerAjaxController::class, 'AddToCart']);
    Route::get('DeleteCart',[CustomerAjaxController::class, 'DeleteCart']);
    Route::get('QuantityUpdate',[CustomerAjaxController::class, 'QuantityUpdate']);
    Route::get('QuantityCart',[CustomerAjaxController::class, 'Cart']);
    Route::get('IncrementCart',[CustomerAjaxController::class, 'IncrementCart']);
    Route::get('DecrementCart',[CustomerAjaxController::class, 'DecrementCart']);
    Route::get('Favori',[CustomerAjaxController::class, 'wishlist']);
});

require __DIR__.'/auth.php';
