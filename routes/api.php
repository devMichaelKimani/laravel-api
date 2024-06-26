<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('tasks', [TaskController::class, 'index'])->name('tasks');
Route::get('tasks/{id}', [TaskController::class, 'show'])->name('show');
