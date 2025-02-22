<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProtfolioController;


Route::get('/',[ProtfolioController::class,'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
