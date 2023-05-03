<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcertController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/profilereservation', [ProfileController::class, 'show'])->name('profile.reservations');

Route::get('/testreservation', [ProfileController::class, 'test'])->name('test.reservations');

Route::get('/', [ConcertController::class, "liste"])->name("concert.list"); // <------- Chemin de la page d'accueil
Route::get('/reservation', [ConcertController::class, "reservation"])->name("concert.reservation");
Route::resource('concert',ConcertController::class)
    ->only(['show', 'store']);
// Route::get('/addconcert', [ConcertController::class, "store"])->name("concert.store");
Route::get('/addconcertview', [ConcertController::class, "storeview"])->name("admin.addconcertview");
require __DIR__.'/auth.php';
