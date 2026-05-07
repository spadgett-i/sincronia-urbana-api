<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TrackController;

Route::get('/tracks', [TrackController::class, 'index']);
Route::get('/tracks/{id}', [TrackController::class, 'show']);
Route::post('/tracks', [TrackController::class, 'store']);
Route::put('/tracks/{id}', [TrackController::class, 'update']);