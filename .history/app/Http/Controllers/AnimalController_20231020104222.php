<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    Route::get('/animals', [AnimalController::class, 'index']);
    
}
