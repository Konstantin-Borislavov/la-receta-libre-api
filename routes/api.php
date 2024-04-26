<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\LoginController;
use Laravel\SerializableClosure\Serializers\Signed;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register',[SigninController::class, 'register']);
Route::post('/login',[LoginController::class, 'login']);

Route::get('/prueba', function (Request $request) {
    return ('FUNCIONA');
});