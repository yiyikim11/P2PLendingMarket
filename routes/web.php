<?php

use App\Http\Controllers\LenderProfileController;
use App\Http\Controllers\BorrowerProfileController;
use App\Http\Controllers\ProfileController;
use App\Models\LenderProfile;
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
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
//    Route::get('/pages/lender-info-form', function () {
//        return view('pages.lender-info-form');
//    })->name('lender-info-form');
//
//    Route::get(('/pages/lender-info-form'), function () {
//        return view('pages.borrower-info-form');
//    })->name('borrower-info-form');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Lender Profile Routes uncomment after edit everything bcuz u need auth to access this
  //  Route::get('/lender-info-form', [LenderProfileController::class, 'create'])->name('lender-profile.create');
 //   Route::post('/lender-profile', [LenderProfileController::class, 'store'])->name('lender-profile.store');
});

//lenderinfoform
Route::get('/lender-info-form', [LenderProfileController::class, 'create'])->name('lender-profile.create');
Route::post('/lender-profile', [LenderProfileController::class, 'store'])->name('lender-profile.store');

//borrowerinfoform

Route::get('/borrower-info-form', [BorrowerProfileController::class, 'create'])->name('borrower-profile.create');
Route::post('/borrower-profile', [BorrowerProfileController::class, 'store'])->name('borrower-profile.store');




require __DIR__ . '/auth.php';
