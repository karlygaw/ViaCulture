<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NationController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\GeminiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\Admin\AdminController;
use App\Http\Controllers\Api\Admin\NationAdminController;

Route::middleware('throttle:80,60')->get('/nations', [NationController::class, 'index']);
Route::middleware('throttle:80,60')->get('/nations/{id}', [NationController::class, 'show']);
Route::middleware('throttle:80,60')->post('/gemini-chat', [GeminiController::class, 'chat']);
