<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\ImagesUploadController;
use App\Http\Controllers\PresentationController;

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


Route::get('/', function() {
    return redirect()->route('presentations.index');
});



Route::resource('rapports', RapportController::class);
Route::resource('presentations', PresentationController::class);


Route::post('/upload-images', ImagesUploadController::class)->name('images.store');


