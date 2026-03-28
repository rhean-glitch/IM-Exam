<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// HTTP METHODS
// GET
// POST
// PUT
// PATCH
// DELETE

Route::get('/students', [StudentController::class, 'show']);
Route::post('/students', [StudentController::class, 'create']);
Route::delete('/students/{id}', [StudentController::class, 'delete']);
Route::patch('/students/{id}', [StudentController::class, 'update']);
Route::put('/students/{id}', [StudentController::class, 'update']);