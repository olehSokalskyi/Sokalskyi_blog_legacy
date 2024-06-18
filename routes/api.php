<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/blog/posts', [\App\Http\Controllers\Api\Blog\PostController::class, 'index']);
Route::get('/blog/posts/{id}', [\App\Http\Controllers\Api\Blog\PostController::class, 'show']);
Route::get('/blog/tests', [\App\Http\Controllers\Api\Blog\PostGetController::class, 'index']);
