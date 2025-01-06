<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/api/tasks', [TaskController:: class, 'index']);
Route::post('/api/tasks', [TaskController:: class, 'store']);


Route::get('/', function () {
    return  response() -> json([
        'sucess' => true
    ]);
});