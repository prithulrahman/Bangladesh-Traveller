<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/historical-places', function () {
    return view('pages.historical-places');
})->name('historical-places');
Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/old', function () {
    return view('home-old');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'view'])->name('profile.view');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/explore', [DistrictController::class, 'explore'])->name('explore');

Route::resource('districts', DistrictController::class);

// API routes for cascading dropdowns
Route::get('/api/districts/{divisionId}', [DistrictController::class, 'getByDivision'])->name('districts.byDivision');

// API route for bus search
Route::get('/api/buses/search/{originDistrictId}/{destinationDistrictId}', [\App\Http\Controllers\BusController::class, 'searchRoutes'])->name('buses.search');

// Explore page route
Route::get('/explore', function () {
    return view('explore', [
        'toDivisionId' => request('to_division'),
        'toDistrictId' => request('to_district'),
    ]);
})->name('explore');

require __DIR__.'/auth.php';
