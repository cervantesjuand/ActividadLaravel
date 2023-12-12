<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

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
    return redirect()->route('login');
});

Route::post('/crear-usuario', [Usercontroller::class, 'store'])->name('registro');
Route::get('/hola',[Usercontroller::class, 'index'])->name('hola');

Route::get('/login',[Usercontroller::class, 'loginView'])->name('login');
Route::post('/login',[Usercontroller::class, 'login']);

Route::get('/crear-usuario',[Usercontroller::class, 'storeView']);

Route::get('/dashboard',[Usercontroller::class, 'dashboardView'])->name('dashboard');