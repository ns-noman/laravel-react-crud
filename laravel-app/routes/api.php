<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/students', [StudentController::class,'index']);
Route::post('/students', [StudentController::class,'store']);
Route::get('/students/{id}/edit', [StudentController::class,'edit']);
Route::put('/students/{id}/update', [StudentController::class,'update']);
Route::delete('/students/{id}/delete', [StudentController::class,'destroy']);