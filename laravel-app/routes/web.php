<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyDatailsController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('admin.auth.login');
});

Route::middleware('auth')->group(function () {

    Route::get('/usermanage', [UserController::class,'index']);
    Route::get('/usermanageCreate', [UserController::class,'create']);
    Route::post('/usermanage', [UserController::class,'store']);
    Route::get('/usermanageDestroy/{id}', [UserController::class,'destroy']);
    Route::get('/usermanageEdit/{id}', [UserController::class,'edit']);
    Route::patch('/usermanage', [UserController::class,'update']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard',[DashboardController::class,'index']);

    Route::resource('company', CompanyDatailsController::class);


   
});

require __DIR__.'/auth.php';
