<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;


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


Route::get('/login',[LoginController::class, 'showFormLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [DashboardController::class, 'showDashBoard'])->name('admin.DashBoard');

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/create', [UserController::class, 'store'])->name('users.store');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('{id}/edit', [UserController::class, 'update'])->name('users.update');
        Route::get('{id}/delete', [UserController::class, 'delete'])->name('users.delete');
        Route::get('{id}/userProfile', [UserController::class, 'showUserProfile'])->name('users.profile');
    });

    Route::prefix('books')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('books.index');
        Route::get('/create', [BookController::class, 'create'])->name('books.create');
        Route::post('/create', [BookController::class, 'store'])->name('books.store');
        Route::get('{id}/bookDetail', [BookController::class, 'showBookDetail'])->name('books.detail');
        Route::get('{id}/edit', [BookController::class, 'edit'])->name('books.edit');
        Route::post('{id}/edit', [BookController::class, 'update'])->name('books.update');
        Route::get('{id}/delete', [BookController::class, 'delete'])->name('books.delete');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'] )->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'] )->name('categories.create');
        Route::post('/create', [CategoryController::class, 'store'] )->name('categories.store');
        Route::get('{id}/edit', [CategoryController::class, 'edit'] )->name('categories.edit');
        Route::post('{id}/edit', [CategoryController::class, 'update'] )->name('categories.update');
        Route::get('{id}/delete', [CategoryController::class, 'delete'] )->name('categories.delete');
    });

    Route::prefix('authors')->group(function () {
        Route::get('/', [AuthorController::class, 'index'])->name('authors.index');
        Route::get('/create', [AuthorController::class, 'create'])->name('authors.create');
        Route::post('/create', [AuthorController::class, 'store'])->name('authors.store');
        Route::get('{id}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
        Route::post('{id}/edit', [AuthorController::class, 'update'])->name('authors.update');
        Route::get('{id}/delete', [AuthorController::class, 'delete'])->name('authors.delete');
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
        Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
        Route::post('/create', [CustomerController::class, 'store'])->name('customers.store');
        Route::get('{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
        Route::post('{id}/edit', [CustomerController::class, 'update'])->name('customers.update');
        Route::get('{id}/delete', [CustomerController::class, 'delete'])->name('customers.delete');
    });

    Route::prefix('orders')->group(function () {
        Route::get('/',[OrderController::class, 'index'] )->name('orders.index');
        Route::get('{id}/orderDetail',[OrderController::class, 'orderDetail'] )->name('orders.detail');
        Route::get('{id}/confirmOrder',[OrderController::class, 'confirm'] )->name('orders.confirm');
    });
});


Route::prefix('home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('{category_id}/showBooks', [HomeController::class, 'showBookByCategory'])->name('home.showBookByCategory');
    Route::get('{id}/BookDetail', [HomeController::class, 'bookDetailById'])->name('home.bookDetail');
    Route::get('/AboutUs', [HomeController::class, 'aboutUs'])->name('home.AboutUs');

});

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'showCart'])->name('cart.showCart');
    Route::get('{idProduct}/add-to-cart', [CartController::class, 'addToCart'])->name('cart.addToCart');
    Route::get('{idProduct}/decrease', [CartController::class, 'decreaseCart'])->name('cart.decreaseCart');
    Route::get('{idProduct}/removeOne', [CartController::class, 'removeByOne'])->name('cart.removeByOne');
    Route::get('/removeAll', [CartController::class, 'removeAll'])->name('cart.removeAll');
    Route::get('/check-out', [CheckOutController::class, 'formCheckOut'])->name('cart.formCheckOut');
    Route::post('/check-out', [CheckOutController::class, 'checkOut'])->name('cart.checkOut');

});

Route::post('/search', [HomeController::class, 'search'])->name('book.search');
