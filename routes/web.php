<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;


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

Route::get('this-is-about-route',[UserController::class, 'aboutMethod'])->name('about.route.name');
Route::get('contact',[UserController::class, 'contact'])->name('contact');

Route::prefix('contact')->group(function(){
    Route::get('add',[ContactController::class,'addContact'])->name('add.contact');
    Route::post('save',[ContactController::class,'saveContact'])->name('save.contact');
    Route::get('member',[ContactController::class,'addMember'])->name('add.member');
    Route::post('save-member',[ContactController::class,'saveMember'])->name('save.member');
    Route::get('student',[ContactController::class,'student'])->name('add.student');
    Route::post('save-student',[ContactController::class,'saveStudent'])->name('save.student');
//    register
    Route::get('register',[ContactController::class,'register'])->name('register');
    Route::post('save-register',[ContactController::class,'saveRegister'])->name('save.register');
});

Route::get('/',function(){
    return view('index');
});

// Route Grouping (prefix)
// Model
// Bootstrapping OK
// 01611910296 - Zamirul Kabir

// make controller
//php artisan make:controller AdminController
