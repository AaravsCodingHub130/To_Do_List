<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::put('/tasks/{task}/toggleComplete', [TaskController::class, 'toggleComplete'])->name('tasks.toggleComplete');
Route::resource('tasks', TaskController::class);
