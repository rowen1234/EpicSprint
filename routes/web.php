<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route for task view
Route::get('task/task', [TaskController::class, 'index' ])->name('task.index');
Route::post('task/tasks', [TaskController::class, 'store'])->name('task.store');
Route::get('task/create_task', [TaskController::class, 'create'])->name('task.create');
Route::get('task/tasks/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('task/tasks/{task}', [TaskController::class, 'update'])->name('task.update');
Route::delete('task/tasks/{task}', [TaskController::class, 'destroy'])->name('task.destroy');


require __DIR__.'/auth.php';
