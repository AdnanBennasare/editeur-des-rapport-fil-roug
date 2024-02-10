<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\RapportController;

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







Route::resource('rapports', RapportController::class);
Route::resource('presentations', PresentationController::class);







Route::post('/parse', function (){
    return Illuminate\Support\str::of(request('markdown'))->markdown();
});
