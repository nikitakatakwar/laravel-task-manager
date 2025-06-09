<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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


// Home redirect to task list
Route::get('/', function () {
    return redirect()->route('tasks.index');
});

// Task Routes
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');           // List all tasks
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');  // Show form to create
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');          // Store new task
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit'); // Edit form
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');  // Update task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // Delete task


