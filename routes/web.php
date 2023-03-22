<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\PostUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ListController::class, 'index']);
Route::get('/deletepost/{id}', [ListController::class, 'DELETE_POST']);
Route::get('/updatepost/{id}', [ListController::class, 'EDIT_POST']);
Route::post('/updatepost/{id}', [ListController::class, 'UPDATE_POST']);


Route::get('/postuser', [PostUserController::class, 'index']);
Route::post('/postuser', [PostUserController::class, 'POST_USER']);
