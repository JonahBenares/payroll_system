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
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\SwapScheduleController;
use App\Http\Controllers\UploadAllowanceController;
use App\Http\Controllers\PayrollSalaryController;
use App\Http\Controllers\PayrollAllowanceController;
use App\Http\Controllers\PayrollOvertimeController;
use App\Http\Controllers\PayrollBonusController;


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
Route::get('/allowancerate/destroy/{id}/{emp_id}', [AllowanceRateController::class, 'destroy'])->name('destroy');
//Route::get('/allowancerate/create/{employee_id}/{personal_id}', [AllowanceRateController::class, 'create'])->name('create');

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

// CutOff
Route::resource('cut_off', CutOffController::class); 

// Leave
Route::resource('leavefailure', LeaveFailureController::class); 

// Overtime
Route::resource('ot', OvertimeController::class); 


Route::resource('swapschedule', SwapScheduleController::class); 

Route::resource('uploadallowance', UploadAllowanceController::class); 

Route::resource('payrollsalary', PayrollSalaryController::class); 
Route::get('/payroll_salary/bulk', [PayrollSalaryController::class, 'printBulk'])->middleware(['auth'])->name('printBulkSalary');

Route::resource('payrollallowance', PayrollAllowanceController::class); 
Route::get('/payroll_allowance/bulk', [PayrollAllowanceController::class, 'printBulk'])->middleware(['auth'])->name('printBulkAllowance');

Route::resource('payrollovertime', PayrollOvertimeController::class); 
Route::get('/payroll_overtime/bulkprinting', [PayrollOvertimeController::class, 'printBulk'])->middleware(['auth'])->name('printBulkOvertime');

Route::resource('payrollbonus', PayrollBonusController::class); 
Route::get('/payroll_bonus/bulkprinting', [PayrollBonusController::class, 'printBulk'])->middleware(['auth'])->name('printBulkBonus');

Route::resource('uploadallowance', UploadAllowanceController::class); 

Route::resource('payrollsalary', PayrollSalaryController::class); 
Route::get('/payroll_salary/bulk', [PayrollSalaryController::class, 'printBulk'])->middleware(['auth'])->name('printBulkSalary');

Route::resource('payrollallowance', PayrollAllowanceController::class); 
Route::get('/payroll_allowance/bulk', [PayrollAllowanceController::class, 'printBulk'])->middleware(['auth'])->name('printBulkAllowance');

Route::resource('payrollovertime', PayrollOvertimeController::class); 
Route::get('/payroll_overtime/bulkprinting', [PayrollOvertimeController::class, 'printBulk'])->middleware(['auth'])->name('printBulkOvertime');

Route::resource('payrollbonus', PayrollBonusController::class); 
Route::get('/payroll_bonus/bulkprinting', [PayrollBonusController::class, 'printBulk'])->middleware(['auth'])->name('printBulkBonus');


Route::get('/shift_sched', [Shift_ScheduleController::class, 'shift_sched'])->middleware(['auth'])->name('shift_sched');
Route::get('/payroll_salary', [PayrollController::class, 'payroll_salary'])->middleware(['auth'])->name('payroll_salary');
Route::get('/payroll_allowance', [PayrollController::class, 'payroll_allowance'])->middleware(['auth'])->name('payroll_allowance');
Route::get('/payroll_bonus', [PayrollController::class, 'payroll_bonus'])->middleware(['auth'])->name('payroll_bonus');
Route::get('/payroll_overtime', [PayrollController::class, 'payroll_overtime'])->middleware(['auth'])->name('payroll_overtime');
Route::get('/upload_allowance', [UploadAllowController::class, 'uploadAllowance'])->middleware(['auth'])->name('upload_allowance');

// Route::get('/dash', [MasterfileController::class, 'dash'])->middleware(['auth'])->name("dash");
// Route::get('/masterfile/employee_list', 'App\Http\Controllers\MasterfileController@index');

Route::get('/toolkit', function () {
    return view('uikit/components');
});