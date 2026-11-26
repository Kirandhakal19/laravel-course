<?php
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});

Route::get('/grocery', function () {
    return view('grocery');
}); 


Route::view('/bitmap', 'bitmap.home')->name('bitmap.home');
Route::get('/bitmap', function () {
    $services = Service::all(); // Fetch all services
    return view('bitmap.home', compact('services')); // Pass to the view
})->name('bitmap.home');