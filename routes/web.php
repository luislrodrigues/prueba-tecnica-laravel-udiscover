<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('auth.login');
});

// Auth::routes();

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'showLoginForm')->name('login');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->name('logout');
});

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::resources([
//     'company' => CompanyController::class,
// ]);

Route::controller(CompanyController::class)->group(function(){
    Route::get('/','index')->name('company.index');
    Route::get('/create','create')->name('company.create');
    Route::post('/','store')->name('company.store');
    Route::get('/{company}','show')->name('company.show');
    Route::get('/{company}/edit','edit')->name('company.edit');
    Route::put('/{company}','update')->name('company.update');
    Route::delete('/{company}','destroy')->name('company.destroy');
});
