<?php

use App\Http\Controllers\VulnerabilityController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/','login')->name('home');

Route::middleware(['auth'])->group(function() {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Vulnerabilities
    Route::resource('vulnerabilities', VulnerabilityController::class)->except('show');
});


require __DIR__.'/auth.php';
