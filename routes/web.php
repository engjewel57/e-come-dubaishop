<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerDeshboardController;
use App\Http\Controllers\AdminOrderController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [HomeController::class, 'category'])->name('category');
Route::get('/product/{id}', [HomeController::class, 'detail'])->name('detail');

Route::post('/add-to-card/{id}', [CartController::class, 'index'])->name('add-to-card');
Route::get('/show-cart', [CartController::class, 'show'])->name('show-cart');
Route::get('/remove-cart-product/{id}', [CartController::class, 'remove'])->name('remove-cart-product');
Route::post('/update-cart-product/{id}', [CartController::class, 'update'])->name('product.update-cart');

Route::get('/checkout',[CheckoutController::class, 'index'])->name('checkout');
Route::post('/new-order',[CheckoutController::class, 'neworder'])->name('new-order');
Route::get('/complete-order',[CheckoutController::class, 'completeOrder'])->name('complete-order');


Route::get('/customer-logout',[CustomerAuthController::class, 'logout'])->name('customer.logout');
Route::get('/customer-login',[CustomerAuthController::class, 'login'])->name('customer.login');
Route::post('/customer-signin',[CustomerAuthController::class, 'signIn'])->name('customer.signin');
Route::get('/customer-register',[CustomerAuthController::class, 'register'])->name('customer.register');
Route::post('/new-customer',[CustomerAuthController::class, 'newCustomer'])->name('new.customer');

Route::get('/customer.dashboard',[CustomerDeshboardController::class, 'index'])->name('customer.dashboard');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/add-category',[CategoryController::class,'index'])->name('category.add');
    Route::post('/new-category',[CategoryController::class,'create'])->name('category.new');
    Route::get('/manage-category',[CategoryController::class,'manage'])->name('category.manage');
    Route::get('/edit-category{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/update-category{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/delete-category{id}',[CategoryController::class,'delete'])->name('category.delete');

    Route::get('/add-brand',[BrandController::class,'index'])->name('brand.add');
    Route::post('/new-brand',[BrandController::class,'create'])->name('brand.new');
    Route::get('/manage-brand',[BrandController::class,'manage'])->name('brand.manage');
    Route::get('/edit-brand{id}',[BrandController::class,'edit'])->name('brand.edit');
    Route::post('/upload-brand{id}',[BrandController::class,'update'])->name('brand.update');
    Route::get('/delete-brand{id}',[BrandController::class,'delete'])->name('brand.delete');

    Route::get('/add-sub_category',[SubCategoryController::class,'index'])->name('sub_category.add');
    Route::post('/create-new-sub_category',[SubCategoryController::class,'create'])->name('sub_category.new');
    Route::get('/manage-sub_category',[SubCategoryController::class,'manage'])->name('sub_category.manage');
    Route::get('/edit-sub_category{id}',[SubCategoryController::class,'edit'])->name('sub_category.edit');
    Route::post('/update-sub_category{id}',[SubCategoryController::class,'update'])->name('sub_category.update');
    Route::get('/delete-sub_category{id}',[SubCategoryController::class,'delete'])->name('sub_category.delete');

    Route::get('/add-unit',[UnitController::class,'index'])->name('unit.add');
    Route::post('/new-unit',[UnitController::class,'create'])->name('unit.new');
    Route::get('/manage-unit',[UnitController::class,'manage'])->name('unit.manage');
    Route::get('/edit-unit{id}',[UnitController::class,'edit'])->name('unit.edit');
    Route::post('/update-unit{id}',[UnitController::class,'update'])->name('unit.update');
    Route::get('/delete-unit{id}',[UnitController::class,'delete'])->name('unit.delete');

    Route::get('/add-product',[ProductController::class,'index'])->name('product.add');
    Route::get('/get-sub-category', [ProductController::class, 'getSubCategory'] )->name('product.get-sub-category');
    Route::post('/new-product',[ProductController::class,'create'])->name('product.new');
    Route::get('/manage-product',[ProductController::class,'manage'])->name('product.manage');
    Route::get('/detail-product{id}',[ProductController::class,'detail'])->name('product.detail');
    Route::get('/edit-product{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/update-product{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/delete-product{id}',[ProductController::class,'delete'])->name('product.delete');

    Route::get('/admin-manage-order',[AdminOrderController::class,'index'])->name('order.manage');
    Route::get('/admin-order.detail/{id}',[AdminOrderController::class,'detail'])->name('admin-order.detail');
    Route::get('/admin-order.view-invoice/{id}',[AdminOrderController::class,'viewInvoice'])->name('admin-order.view-invoice');
    Route::get('/admin-order.download-invoice/{id}',[AdminOrderController::class,'downloadInvoice'])->name('admin-order.download-invoice');
    Route::get('/admin-order.edit/{id}',[AdminOrderController::class,'edit'])->name('admin-order.edit');
    Route::get('/admin-order.delete/{id}',[AdminOrderController::class,'delete'])->name('admin-order.delete');

});
