<?php

use App\Http\Controllers\TaskController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('tasks', TaskController::class);

Route::get('/tasks', [TaskController::class, 'index']);

// Create a new task
Route::post('/tasks', [TaskController::class, 'store']);

// Get a specific task by ID
Route::get('/tasks/{id}', [TaskController::class, 'show']);

// Update a task by ID
Route::put('/tasks/{id}', [TaskController::class, 'update']);

// Delete a task by ID
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);