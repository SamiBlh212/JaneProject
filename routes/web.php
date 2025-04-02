<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/test', [TestController::class, 'showTest']);
Route::post('/test-submit', [TestController::class, 'submitTest']);


// Route::get('/', function () {
//     return view('welcome');
// });
