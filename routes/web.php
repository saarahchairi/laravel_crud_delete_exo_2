<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LuxeController;
use App\Http\Controllers\CheapController;
use App\Http\Controllers\ReducController;
use App\Http\Controllers\VoitureController;


Route::get('/', [VoitureController::class,"voiture"])->name('home');
Route::post('/create', [VoitureController::class,'store']);

Route::get('/cheap', [CheapController::class,"cheap"])->name('cheap');
Route::delete('/{id}/delete', [CheapController::class,"destroy"]);

Route::get('/luxe', [LuxeController::class,"luxe"])->name('luxe');
Route::delete('/{id}/delete', [LuxeController::class,"destroy"]);

Route::get('/reduc', [ReducController::class,"reduc"])->name('reduc');
Route::delete('/{id}/delete', [ReducController::class,"destroy"]);

