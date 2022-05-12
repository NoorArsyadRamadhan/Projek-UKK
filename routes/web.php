<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Iluminate\Http\Request;
use App\Http\Controllers\userController;
use App\Http\Controllers\perjalananController;
use App\Http\Controllers\loginController;
use App\Models\User;
use App\Models\Perjalanan;



Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->middleware('auth');

Route::get('/inputperjalanan', function (){
    return view('layouts.inputperjalanan');
})->middleware('auth');

Route::get('/register', function () {
    return view('layouts.register');
});

//Register
Route::get('/register', [userController::class, 'halamanRegister']);
Route::post('/simpanUser', [userController::class, 'simpanRegister']);

//LogIn
Route::get('/',[loginController::class,'halamanLogin'])->name('login');
Route::any('/postLogin',[loginController::class,'Login']);

//DataPerjalanan
Route::get('/perjalanan', [perjalananController::class, 'Perjalanan']);
Route::post('/simpanPerjalanan', [perjalananController::class, 'simpanPerjalanan']);
Route::get('/dataperjalanan', [perjalananController::class, 'index'])->middleware('auth');
Route::get('/order',  [perjalananController::class, 'Order']);

//Cari
Route::get('/search',[perjalananController::class,'searchPerjalanan']);

//LogOut
Route::get('/logout', [loginController::class, 'LogOut']);

//Delete
Route::post('/deletePerjalanan',[perjalananController::class,'deletePerjalanan']);