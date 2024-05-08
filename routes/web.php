<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ForgetPasswordManager;

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

Route::controller(AuthManager::class)->group(function() {
    Route::get('/login','login')->name('login');
    Route::post('/login','loginPost')->name('login.post');
    Route::get('/register','register')->name('register');
    Route::post('/register','registerPost')->name('register.post');
    Route::get('/logout','logout')->name('logout');
});
Route::controller(ForgetPasswordManager::class)->group(function (){
    Route::get('/forget-password',[ForgetPasswordManager::class,'ForgetPassword'])
        ->name('forget.password');
    Route::post('/forget-passoword',[ForgetPasswordManager::class,'ForgetPasswordPost'])
        ->name('forget.password.post');
    Route::get('/forget-passoword/{token}',[ForgetPasswordManager::class,'resetPassword'])
        ->name('reset.password');
    Route::post('/reset-password',[ForgetPasswordManager::class,'resetPasswordPost'])
        ->name('reset.password.post');
});

Route::middleware("auth")->group(function() {
    Route::get('/', function(){
        return view("dashboard");
    })->name('dashboard');

    Route::get('/product/index',[ProductController::class,'index'])->name('product.index');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('product/{product}/edit',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/product/{product}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/product/{product}', [ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/search',[ProductController::class,'search'])->name('search');
});