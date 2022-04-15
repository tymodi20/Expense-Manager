<?php

use App\Http\Controllers\AccountController;
use App\Models\Account;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('add-category',[]);

// add account routes
Route::get('add-account',[AccountController::class,'index'])->name('add');

Route::post('add-account',[AccountController::class,'addAccount'])->name('add.account');

Route::get('edit-account/{id}',[AccountController::class,'editAccount'])->name('edit.account');
Route::put('edit-account/{id}',[AccountController::class,'uptAccount'])->name('update.account');


