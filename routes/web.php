<?php

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Default welcome route
Route::get('/', function () {
    return 'welcome';
});

// Your untouched grocery route
Route::get('/grocery', function () {
    return view('grocery');
}); 

// --- BITMAP WEBSITE ---
// This fetches the services from the database and passes them to the view
Route::get('/bitmap', function () {
    $services = Service::all(); 
    return view('bitmap.home', compact('services')); 
})->name('bitmap.home');


// --- ADMIN DASHBOARD ---
// 1. Show the form you just created
Route::get('/admin/services', function () {
    return view('admin.services');
});

// 2. Save the new service to the database
Route::post('/admin/services', function (Request $request) {
    Service::create([
        'icon' => $request->icon,
        'title' => $request->title,
        'description' => $request->description,
    ]);
    return redirect('/admin/services')->with('success', 'Service added successfully!');
});