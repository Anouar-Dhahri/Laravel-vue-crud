<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('post/all', [PostController::class, 'index']);
Route::post('post/add', [PostController::class,'add']);
Route::get('post/edit/{id}', [PostController::class,'edit']);
Route::post('post/update/{id}', [PostController::class,'update']);
Route::delete('post/delete/{id}', [PostController::class,'delete']);
