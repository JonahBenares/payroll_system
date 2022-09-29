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

Route::get('/masterfile/employee_list', [MasterfileController::class, 'employee_list'])->middleware(['auth'])->name('employee_list');
Route::get('/masterfile/schedule_list', [MasterfileController::class, 'schedule_list'])->middleware(['auth'])->name('schedule_list');
Route::get('/masterfile/calendar_list', [MasterfileController::class, 'calendar_list'])->middleware(['auth'])->name('calendar_list');
Route::get('/masterfile/allowance_list', [MasterfileController::class, 'allowance_list'])->middleware(['auth'])->name('allowance_list');
Route::get('/masterfile/allowance_rate_list', [MasterfileController::class, 'allowance_rate_list'])->middleware(['auth'])->name('allowance_rate_list');
Route::get('/masterfile/deduction_list', [MasterfileController::class, 'deduction_list'])->middleware(['auth'])->name('deduction_list');
Route::get('/masterfile/rates_list', [MasterfileController::class, 'rates_list'])->middleware(['auth'])->name('rates_list');
Route::get('/masterfile/statutory_bracket', [MasterfileController::class, 'statutory_bracket'])->middleware(['auth'])->name('statutory_bracket');
Route::get('/masterfile/tardiness_rate_list', [MasterfileController::class, 'tardiness_rate_list'])->middleware(['auth'])->name('tardiness_rate_list');
Route::get('/masterfile/cut_off_list', [MasterfileController::class, 'cut_off_list'])->middleware(['auth'])->name('cut_off_list');
// Route::get('/shift_sched/shift_sched', [MasterfileController::class, 'shift_sched'])->middleware(['auth'])->name('shift_sched');


// Route::get('/dash', [MasterfileController::class, 'dash'])->middleware(['auth'])->name("dash");
// Route::get('/masterfile/employee_list', 'App\Http\Controllers\MasterfileController@index');

