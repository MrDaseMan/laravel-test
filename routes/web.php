<?php

use Illuminate\Support\Facades\Route;

// Connect with controller
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/sendContacts', [HomeController::class, 'sendContacts']);



use App\Http\Controllers\ProductsController;

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products/create', [ProductsController::class, 'create']);

Route::post('/products/store', [ProductsController::class, 'store']);



use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/create', [UserController::class, 'create']);

Route::get('/users/{id}/delete', [UserController::class, 'delete']);

Route::post('/users/store', [UserController::class, 'store']);

// get user posts by id
Route::get('/users/{id}/posts', [UserController::class, 'posts']);

Route::get('/users/{id}/latest-post', [UserController::class, 'latestPost']);



use App\Http\Controllers\PostsController;

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/posts/create', [PostsController::class, 'create']);

Route::get('/posts/{id}/delete', [PostsController::class, 'delete']);

Route::post('/posts/store', [PostsController::class, 'store']);

Route::get('/posts/{id}/user', [PostsController::class, 'user']);

Route::get('/posts/{id}/comments', [PostsController::class, 'comments']);

Route::get('/posts/{id}/delete-comment', [PostsController::class, 'deleteComment']);

Route::get('/posts/{id}/comment', [PostsController::class, 'comment']);



use App\Http\Controllers\TagsController;

Route::get('/tags', [TagsController::class, 'index']);

Route::get('/tags/{id}/delete', [TagsController::class, 'delete']);

Route::post('/tags/store', [TagsController::class, 'store']);

Route::get('/tags/create', [TagsController::class, 'create']);