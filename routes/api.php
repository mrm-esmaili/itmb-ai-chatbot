<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatController;

Route::get('/test', function () {
    return response()->json([
        'status' => 'API working'
    ]);
});

Route::post('/chat', [ChatController::class, 'chat']);
