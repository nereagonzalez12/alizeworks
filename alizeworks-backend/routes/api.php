<?php

use App\Http\Controllers\Api\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// ../api/types   -   -   -   -   TYPES ROUTES
Route::apiResource('types', TypeController::class);
