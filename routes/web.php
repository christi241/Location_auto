<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarificationController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DashboardController;


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
     Route::resource('locations',LocationController::class);
    Route::resource('chauffeurs',ChauffeurController::class);
    Route::resource('vehicules',VehiculeController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/client', [DashboardController::class, 'index'])->name('clients');
Route::get('/location', [DashboardController::class, 'location'])->name('location');
Route::get('/afficheVoit', [DashboardController::class, 'detailsVoit'])->name('detailsVoit');


Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
