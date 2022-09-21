<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterfileController;
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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::resource('masterfile', MasterfileController::class);
Route::get('/employee_list', [MasterfileController::class, 'index'])->middleware(['auth'])->name("employee_list");

// Route::get('/masterfile', 'App\Http\Controllers\MasterfileController@index');

