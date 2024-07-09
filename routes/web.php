<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/",[ProductController::class, 'index']);
Route::get("products/create",[ProductController::class, 'create']);

Route::post("products/store",[ProductController::class, 'store']);

Route::get("products/{id}/show",[ProductController::class, 'show']);

Route::get("products/{id}/edit",[ProductController::class, 'edit']);

Route::put("products/{id}/update",[ProductController::class, 'update']);

Route::get("products/{id}/delete",[ProductController::class, 'destroy']);