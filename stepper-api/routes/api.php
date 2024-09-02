<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;

Route::post('/submit', [ClientController::class, 'store']);

