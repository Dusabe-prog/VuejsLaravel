<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

Route::middleware('auth:sanctum')->post('logout', [AuthenticatedSessionController::class, 'destroy']);

// Categories
Route::middleware('auth:sanctum')->post('/categories/create', [CategoryController::class, 'store']);
Route::middleware('auth:sanctum')->get('/categories/{category}', [CategoryController::class, 'show']);
Route::middleware('auth:sanctum')->put('/categories/{category}', [CategoryController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/categories/{category}', [CategoryController::class, 'destroy']);

//post
Route::middleware('auth:sanctum')->post('/posts', [PostController::class, 'store']);

////////////////////////////////////////////// PUBLIC ROUTES /////////////////////////////////////////////

Route::post('register', [RegisteredUserController::class, 'store']);
Route::post('login', [AuthenticatedSessionController::class, 'store']);

//categories
Route::middleware('auth:sanctum')->get('categories', [CategoryController::class, 'index']);
