<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MasterfileController;
use App\Http\Controllers\Shift_ScheduleController;
use App\Http\Controllers\AccountingEntryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\PayslipInfoController;
use App\Http\Controllers\AllowanceController;
use App\Http\Controllers\AllowanceRateController;
use App\Http\Controllers\AdjustmentRateController;
use App\Http\Controllers\HmoRateController;
use App\Http\Controllers\DeductionController;
use App\Http\Controllers\StatutoryBracketController;
use App\Http\Controllers\TardinessRateController;
use App\Http\Controllers\CutOffController;
use App\Http\Controllers\LeaveFailureController;


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


// AccountEntry
Route::resource('entry', AccountingEntryController::class);
Route::resource('emp', EmployeeController::class);

// Employee 

// Schedule
Route::resource('schedules', ScheduleController::class);

// Holiday
Route::resource('holiday', HolidayController::class);

// PayslipInfo

Route::resource('payslip_info', PayslipInfoController::class);

// Allowance
Route::resource('allowance', AllowanceController::class);

// AllowanceRate
Route::resource('allowancerate', AllowanceRateController::class);
Route::post('/allowancerate/fetchrate', [AllowanceRateController::class, 'fetchRate']);

// AdjustmentRate
Route::resource('adjustmentrate', AdjustmentRateController::class);

// HMORate
Route::resource('hmorate', HmoRateController::class);

//Deduction
Route::resource('deductions', DeductionController::class); 

// StatutoryBracket
Route::resource('statutorybracket', StatutoryBracketController::class); 

// TardinessRate
Route::resource('tardinessrate', TardinessRateController::class); 


Route::resource('cut_off', CutOffController::class); 




Route::resource('leavefailure', LeaveFailureController::class); 
// Route::get('/leave_list', [LeaveController::class, 'filingLeave'])->middleware(['auth'])->name('leave_list');
// Route::get('/deduction_list', [MasterfileController::class, 'deduction_list'])->middleware(['auth'])->name('deduction_list');
// Route::get('/hmo_rates', [MasterfileController::class, 'hmo_rates'])->middleware(['auth'])->name('hmo_rates');
// Route::get('/statutory_bracket', [MasterfileController::class, 'statutory_bracket'])->middleware(['auth'])->name('statutory_bracket');
// Route::get('/tardiness_rate_list', [MasterfileController::class, 'tardiness_rate_list'])->middleware(['auth'])->name('tardiness_rate_list');
// Route::get('/cut_off_list', [MasterfileController::class, 'cut_off_list'])->middleware(['auth'])->name('cut_off_list');
Route::get('/shift_sched', [Shift_ScheduleController::class, 'shift_sched'])->middleware(['auth'])->name('shift_sched');
Route::get('/ot_list', [LeaveController::class, 'overtime'])->middleware(['auth'])->name('ot_list');
Route::get('/swap_list', [LeaveController::class, 'swap_list'])->middleware(['auth'])->name('swap_list');
Route::get('/payroll_salary', [PayrollController::class, 'payroll_salary'])->middleware(['auth'])->name('payroll_salary');
Route::get('/payroll_allowance', [PayrollController::class, 'payroll_allowance'])->middleware(['auth'])->name('payroll_allowance');
Route::get('/payroll_bonus', [PayrollController::class, 'payroll_bonus'])->middleware(['auth'])->name('payroll_bonus');
Route::get('/payroll_overtime', [PayrollController::class, 'payroll_overtime'])->middleware(['auth'])->name('payroll_overtime');
Route::get('/upload_allowance', [UploadAllowController::class, 'uploadAllowance'])->middleware(['auth'])->name('upload_allowance');

// Route::get('/dash', [MasterfileController::class, 'dash'])->middleware(['auth'])->name("dash");
// Route::get('/masterfile/employee_list', 'App\Http\Controllers\MasterfileController@index');