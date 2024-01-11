<?php

use App\Http\Livewire\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarehouseController;

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

// Route::middleware(['guest'])->group(function(){
//     return view('guest');
// });

Route::middleware(['guest'])->group(function(){
    Route::get('/', Login::class)->name('login');
    Route::get('/login', Login::class)->name('login');
});
