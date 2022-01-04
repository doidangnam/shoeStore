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

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'authisadmin'], function() {

            Route::get('/manager/users/create', [ManagerController::class, 'createUser']);
            Route::post('/manager/users/create', [ManagerController::class, 'storeUser']);
            Route::get('/manager/users/{user:name}/show', [ManagerController::class, 'showUser']);
            Route::get('/manager/users/{user:name}/edit', [ManagerController::class, 'editUser']);
            Route::post('/manager/users/{user:name}/edit', [ManagerController::class, 'updateUser']);
            Route::get('/manager/users/{user:name}/delete', [ManagerController::class, 'deleteUser']);

            Route::get('/posts/create', [PostController::class, 'create']);
            Route::post('/posts/create', [PostController::class, 'store']);
            Route::get('/posts/{post:slug}/edit', [PostController::class, 'edit']);
            Route::post('/posts/{post:slug}/edit', [PostController::class, 'update']);
            Route::get('/posts/{post:slug}/delete', [PostController::class, 'delete']);
        Route::get('/dashboard', [DashboardController::class, 'dashboard']);
        Route::get('/categories', [CategoryController::class, 'categories']);
        Route::get('/products', [ProductController::class, 'products']);
        Route::get('/posts', [PostController::class, 'posts']);

        Route::get('/promotions', [PromotionController::class, 'promotions']);
        Route::get('/orders', [OrderController::class, 'orders']);
        Route::get('/manager/users', [ManagerController::class, 'indexUsers']);
    });
    Route::get('/login', [AuthController::class, 'showLoginForm']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout']);
});