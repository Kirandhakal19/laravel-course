<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});

Route::get('/grocery', function () {
    return view('grocery');
}); 


Route::view('/bitmap', 'bitmap.home')->name('bitmap.home');