<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Car Accident pages (short root-level routes)
Route::view('/help', 'Car_accident.help')->name('help');
Route::view('/help2', 'Car_accident.help2')->name('help2');
Route::view('/help3', 'Car_accident.help3')->name('help3');
Route::view('/cars', 'Car_accident.cars')->name('cars');
Route::view('/notifications', 'Car_accident.notifications')->name('notifications');
Route::view('/record', 'Car_accident.record')->name('record');
Route::view('/settings', 'Car_accident.settings')->name('settings');
// Optional alias to old namespace
Route::view('/car-accident', 'Car_accident.index')->name('car-accident.index');
