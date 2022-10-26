<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterfileController;
use App\Http\Controllers\Shift_ScheduleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\UploadAllowController;

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

Route::get('/accounting_entry', [MasterfileController::class, 'accounting_entry'])->middleware(['auth'])->name('accounting_entry');
// Employee 
Route::get('/employee_list', [EmployeeController::class, 'index'])->middleware(['auth'])->name('employee_list');
Route::get('/employee_add', [EmployeeController::class, 'create'])->middleware(['auth'])->name('employee_add');
Route::get('/employee_update', [EmployeeController::class, 'edit'])->middleware(['auth'])->name('employee_update');


Route::get('/schedule_list', [MasterfileController::class, 'schedule_list'])->middleware(['auth'])->name('schedule_list');
Route::get('/calendar_list', [MasterfileController::class, 'calendar_list'])->middleware(['auth'])->name('calendar_list');
Route::get('/allowance_list', [MasterfileController::class, 'allowance_list'])->middleware(['auth'])->name('allowance_list');
Route::get('/allowance_rate_list', [MasterfileController::class, 'allowance_rate_list'])->middleware(['auth'])->name('allowance_rate_list');
Route::get('/deduction_list', [MasterfileController::class, 'deduction_list'])->middleware(['auth'])->name('deduction_list');
Route::get('/rates_list', [MasterfileController::class, 'rates_list'])->middleware(['auth'])->name('rates_list');
Route::get('/hmo_rates', [MasterfileController::class, 'hmo_rates'])->middleware(['auth'])->name('hmo_rates');
Route::get('/statutory_bracket', [MasterfileController::class, 'statutory_bracket'])->middleware(['auth'])->name('statutory_bracket');
Route::get('/tardiness_rate_list', [MasterfileController::class, 'tardiness_rate_list'])->middleware(['auth'])->name('tardiness_rate_list');
Route::get('/cut_off_list', [MasterfileController::class, 'cut_off_list'])->middleware(['auth'])->name('cut_off_list');
Route::get('/payslip_info', [MasterfileController::class, 'payslip_info'])->middleware(['auth'])->name('payslip_info');
Route::get('/shift_sched', [Shift_ScheduleController::class, 'shift_sched'])->middleware(['auth'])->name('shift_sched');
Route::get('/leave_list', [LeaveController::class, 'filingLeave'])->middleware(['auth'])->name('leave_list');
Route::get('/ot_list', [LeaveController::class, 'overtime'])->middleware(['auth'])->name('ot_list');
Route::get('/swap_list', [LeaveController::class, 'swap_list'])->middleware(['auth'])->name('swap_list');
Route::get('/payroll_salary', [PayrollController::class, 'payroll_salary'])->middleware(['auth'])->name('payroll_salary');
Route::get('/payroll_allowance', [PayrollController::class, 'payroll_allowance'])->middleware(['auth'])->name('payroll_allowance');
Route::get('/payroll_bonus', [PayrollController::class, 'payroll_bonus'])->middleware(['auth'])->name('payroll_bonus');
Route::get('/payroll_overtime', [PayrollController::class, 'payroll_overtime'])->middleware(['auth'])->name('payroll_overtime');
Route::get('/upload_allowance', [UploadAllowController::class, 'uploadAllowance'])->middleware(['auth'])->name('upload_allowance');

// Route::get('/dash', [MasterfileController::class, 'dash'])->middleware(['auth'])->name("dash");
// Route::get('/masterfile/employee_list', 'App\Http\Controllers\MasterfileController@index');

