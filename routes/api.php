<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\SubtodoController;
use App\Models\Subtodo;
use App\Http\Middleware\AuthenticateJwt;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->controller(AuthController::class)->withoutMiddleware([AuthenticateJwt::class])->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::prefix('auth')->controller(AuthController::class)->middleware(AuthenticateJwt::class)->group(function () {
    Route::get('logout', 'logout');
});

// Routes for Todos
Route::prefix('todos')->middleware(AuthenticateJwt::class)->controller(TodoController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('{id}', 'show');
    Route::post('/', 'store');
    Route::put('{id}', 'update');
    Route::delete('{id}', 'destroy');
});

// Routes for Subtodos
Route::prefix('subtodos')->middleware(AuthenticateJwt::class)->controller(SubtodoController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('{id}', 'show');
    Route::post('/{todo_id}', 'store');
    Route::put('{id}', 'update');
    Route::delete('{id}', 'destroy');
});
