<?php

use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PivotController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('about');
});

Route::get('/EersteRoute', function () {
    return view('pages/EersteRoute');
});


Route::get('/planets1', function () {
    return view("pages/Views");
});

Route::get('/planets2', function () {
    return view("pages/Requests");
});


Route::get('/planets', [PlanetController::class, 'index']);

Route::get('/planets/{planet}', [PlanetController::class, 'show']);

// routes/web.php


// routes/web.php


Route::get('/planet/{planetId}', [PlanetController::class, 'show']);

Route::get('/pivot-data', [PivotController::class, 'getData']);
