<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::patch('/api/tasks/{id}', [TaskController:: class, 'update']);
Route::get('/api/tasks/{id}', [TaskController:: class, 'show']);
Route::get('/api/tasks', [TaskController:: class, 'index']);
Route::post('/api/tasks', [TaskController:: class, 'store']);
Route::delete('/api/tasks/{id}', [TaskController:: class, 'destroy']);


Route::get('/', function () {
    return  response() -> json([
        'sucess' => true
    ]);
});