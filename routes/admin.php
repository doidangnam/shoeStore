<?php

use App\Models\Admin;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManagerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PromotionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::group(['middleware' => 'authisadmin'], function() {      
        Route::get('/dashboard', [DashboardController::class, 'dashboard']);
        Route::group(['prefix' => 'categories', 'as' => 'categories.'], function(){
            Route::get('/', [CategoryController::class, 'index']);
            Route::post('/store', [CategoryController::class, 'store'])->name('store');
            Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
            Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        });
        
        Route::get('/products', [ProductController::class, 'products']);
        Route::get('/posts', [PostController::class, 'posts']);

        Route::get('/promotions', [PromotionController::class, 'promotions']);
        Route::get('/orders', [OrderController::class, 'orders']);
        Route::get('/users', [ManagerController::class, 'indexUsers']);
    });
    Route::get('/login', [AuthController::class, 'showLoginForm']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
