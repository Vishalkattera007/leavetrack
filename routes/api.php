<?php
use App\Http\Controllers\Api\SuperadminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 // Import Controller

// Public Route (No authentication required)
Route::get('/superadmin', [SuperadminController::class, 'index']); 
Route::post('/login', [SuperadminController::class, 'login']); 


// Protected Routes (Require authentication)
