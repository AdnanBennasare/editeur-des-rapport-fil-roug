<?php

use Illuminate\Support\Facades\Route;

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
    return view('presentations.index');
});


Route::get('/presentations', function () {
    return view('presentations.index');
});


Route::get('/presentations/create', function () {

    return view('presentations.create');

})->name('presentations.create');



Route::get('/rapports', function () {
    return view('rapports.index');
});

Route::post('/parse', function (){
    return Illuminate\Support\str::of(request('markdown'))->markdown();
});
