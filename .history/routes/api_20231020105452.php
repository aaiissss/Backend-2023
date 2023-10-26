<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get ('/animals', function(){
    echo "Menampilkan data animals";
});
Route::post('/animals', function(){
    echo "mengupdate hewan baru";
});
Route::delete('/animals', function(){
    echo "menghapus hewan baru";
});

Route::get('/animals', [AnimalController::class, 'index']);Route::post('/animals', [AnimalController::class, 'store']);
    Route::put('/animals', [AnimalController::class, 'update']);
    Route::delete('/animals', [AnimalController::class, 'destroy']);