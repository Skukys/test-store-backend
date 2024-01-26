<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('fabricator', [\App\Http\Controllers\FabricatorController::class, 'get']);
Route::get('model', [\App\Http\Controllers\ModelController::class, 'get']);
Route::get('product', [\App\Http\Controllers\ProductController::class, 'get']);
Route::get('product-page', [\App\Http\Controllers\ProductController::class, 'getPage']);
Route::get('product-single', [\App\Http\Controllers\ProductController::class, 'getSingle']);
