<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProxyController;

// Define a route for the proxy method in the ProxyController
Route::post('/proxy', [ProxyController::class, 'proxy']);
