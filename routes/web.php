<?php

use App\Http\Controllers\MobileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/addProd',function(){
    return view('addNewProd');
})->name('newprod');

Route::post('/addProd',[MobileController::class,'addNewProduct']);


