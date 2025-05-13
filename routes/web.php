<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BacaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookfrondController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\StorefrondController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\SpecialBookController;
use App\Http\Controllers\ContactfrondController;
use App\Http\Controllers\User\UserLoginController;

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


// routes untuk user 
Route::middleware(['auth', 'usermiddleware'])->group(function () { 
   
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    
});


// routes untuk admin
Route::middleware(['auth', 'adminmiddleware'])->group(function () {
   
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('manajemen', ManajemenController::class);
    Route::get('/user', [UserLoginController::class, 'index'])->name('userlogin');
    
});


// route untuk special book
Route::get('specialbook', [SpecialBookController::class, 'index'])->name('specialbook')->middleware('auth');


// route untuk baca 
Route::get('/baca/{id}', [BacaController::class, 'index'])->name('baca')->middleware('auth');

// route untuk bagian depan
Route::get('/contact', [ContactfrondController::class, 'index'])->name('contactfrond');
Route::get('/store', [StorefrondController::class, 'index'])->name('storefrond');
Route::get('/books', [BookfrondController::class, 'index'])->name('bookfrond');
