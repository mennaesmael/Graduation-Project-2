<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\Search_suggest_updateController;
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
// welcome page
Route::get('/', function () {
    return view('welcome');
});
// dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
// upload page
Route::get('/upload', function () {
    return view('upload');
})->middleware('auth')->name('upload');

Route::post('/upload', [FilesController::class, 'store'])->middleware('auth')->name('upload');
// search page
Route::get('/search', [Search_suggest_updateController::class, 'search'])->middleware('auth')->name('search');
// update page
Route::get('/update/{file_id}', [Search_suggest_updateController::class, 'showUpdateForm'])->middleware('auth')->name('update');
Route::post('/update/{file_id}', [Search_suggest_updateController::class, 'update'])->middleware('auth')->name('update');
// suggestion list
Route::get('/suggestions', [Search_suggest_updateController::class, 'suggestions'])->middleware('auth')->name('suggestions');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
