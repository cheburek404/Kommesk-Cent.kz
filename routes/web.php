<?php

use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('category/{id}', [\App\Http\Controllers\FrontendController::class, 'viewcategory']);
Route::get('show/{id}', [\App\Http\Controllers\FrontendController::class, 'productview']);
Route::get('order/{id}', [\App\Http\Controllers\FrontendController::class, 'orderproduct']);

Auth::routes();

//Admin
Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', [FrontendController::class, 'index']);

    //Category
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('add-category', [CategoryController::class, 'add']);
    Route::post('insert-category', [CategoryController::class, 'insert']);
    Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);
    Route::get('deletePopup/{id}', [CategoryController::class, 'deletePopup'])->name('delete');

    //Product
    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-product', [ProductController::class, 'add']);
    Route::post('insert-product', [ProductController::class, 'insert']);
    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);
    Route::get('show-product/{id}', [ProductController::class, 'show']);
    Route::get('deletePopup/{id}', [ProductController::class, 'deletePopup'])->name('delete');

    //Order
    Route::get('orders', [OrderController::class, 'index']);
    Route::get('add-order', [OrderController::class, 'add']);
    Route::post('insert-order', [OrderController::class, 'insert']);

    //Access to admin panel
    Route::get('access', [FrontendController::class, 'indexForAccess']);
    Route::get('search', [FrontendController::class, 'searchByEmail']);
    Route::get('give-access/{id}', [FrontendController::class, 'giveAccessForAdmin']);
    Route::put('change-role/{id}', [FrontendController::class, 'changeRole']);

});

//Выводить админов и добавлить им их продукты
//Супер-Админ через админ панель должжен добавлять определенные поля для заказа
//Исправить поисковик в Access for admins
