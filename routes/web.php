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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/upload', function () {
    return view('upload');
})->middleware(['auth', 'verified'])->name('upload');
Route::post('/upload', [FilesController::class, 'store'])->middleware(['auth', 'verified'])->name('upload');

Route::get('/search', [Search_suggest_updateController::class, 'search'])->middleware(['auth', 'verified'])->name('search');
// Route::get('/files/{id}/update', [SearchController::class, 'showUpdateForm'])->name('update');
Route::get('/update/{file_id}', [Search_suggest_updateController::class, 'showUpdateForm'])->middleware(['auth', 'verified'])->name('update');
Route::post('/update/{file_id}', [Search_suggest_updateController::class, 'update'])->middleware(['auth', 'verified'])->name('update');
Route::get('/suggestions', [Search_suggest_updateController::class, 'suggestions'])->middleware(['auth', 'verified'])->name('suggestions');
// Route to delete a file
// Route::delete('/files/{file}/delete', [Search_suggest_updateController::class, 'destroy'])->middleware(['auth', 'verified'])->name('delete');

// Route to update the file
// Route::post('/files/{file}', [FilesController::class, 'update'])->name('files.update');



// Route::post('/upload', [FilesController::class, 'store'])->middleware(['auth', 'verified'])->name('upload');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
