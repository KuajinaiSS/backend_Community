<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\MusicListController;

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

// http://localhost:8000/api/users
Route::get('/users', [UserController::class, 'index']);

// http://localhost:8000/api/users/1
Route::get('/users/{id}', [UserController::class, 'show']);

// http://localhost:8000/api/users
Route::post('/users', [UserController::class, 'store']);



// http://localhost:8000/api/upload
Route::post('/upload', [MusicController::class, 'store']);

// http://localhost:8000/api/songs
Route::get('/songs', [MusicController::class, 'songs']);

// http://localhost:8000/api/play/1
Route::get('/play/{id}', [MusicController::class, 'playSong']);



// http://localhost:8000/api/musiclist
Route::get('/musiclist', [MusicListController::class, 'index']);

// http://localhost:8000/api/musiclist/1
Route::get('/musiclist/{id}', [MusicListController::class, 'show']);

// http://localhost:8000/api/musiclist
Route::post('/musiclist', [MusicListController::class, 'store']);


