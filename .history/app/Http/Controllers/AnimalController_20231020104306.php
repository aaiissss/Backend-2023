<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    Route::get('/animals', [AnimalController::class, 'index']);
    Route::post('/animals', [AnimalController::class, 'store']);
    Route::put('/animals', [AnimalController::class, 'update']);
    Route::('/animals', [AnimalController::class, 'update']);
}
