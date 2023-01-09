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
use App\Http\Controllers\ShiftScheduleController;
use App\Http\Controllers\FiledLeaveController;
use App\Http\Controllers\AllowanceSummaryController;
use App\Http\Controllers\RfdReportController;
use App\Http\Controllers\PayrollComputationController;
use App\Http\Controllers\DTRofficeController;
use App\Http\Controllers\DTRsiteController;
use App\Http\Controllers\OTofficeController;
use App\Http\Controllers\OTsiteController;
use App\Http\Controllers\overallOTController;



use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\UploadAllowController;
use App\Models\UploadAllowance;

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

//FiledLeave
Route::resource('filedleave', FiledLeaveController::class);

// Overtime
Route::resource('ot', OvertimeController::class); 
Route::post('/ot/filter_overtime', [OvertimeController::class, 'filter_overtime'])->name('filter_overtime');
Route::post('/ot/fetchtime', [OvertimeController::class, 'fetchTime']);


Route::resource('swapschedule', SwapScheduleController::class); 
Route::post('/swapschedule/cancel/{id}/', [SwapScheduleController::class, 'cancel'])->name('cancel');

Route::resource('uploadallowance', UploadAllowanceController::class);
Route::post('/export-allowance',[UploadAllowanceController::class,'exportAllowance'])->name('export-allowance');
Route::post('/import',[UploadAllowanceController::class,'import'])->name('import');

Route::resource('payrollsalary', PayrollSalaryController::class); 
Route::get('/payroll_salary/bulk', [PayrollSalaryController::class, 'printBulk'])->middleware(['auth'])->name('printBulkSalary');

Route::resource('payroll_allowance', PayrollAllowanceController::class); 
Route::post('/generate',[PayrollAllowanceController::class,'generate'])->name('generate');
Route::get('/show/{id}/{head_id}', [PayrollAllowanceController::class, 'show'])->name('show');
Route::get('/bulk/{id}', [PayrollAllowanceController::class, 'printBulk'])->middleware(['auth'])->name('printBulkAllowance');

Route::resource('payrollovertime', PayrollOvertimeController::class); 
Route::get('/payroll_overtime/bulkprinting', [PayrollOvertimeController::class, 'printBulk'])->middleware(['auth'])->name('printBulkOvertime');

Route::resource('payrollbonus', PayrollBonusController::class); 
Route::get('/payroll_bonus/bulkprinting', [PayrollBonusController::class, 'printBulk'])->middleware(['auth'])->name('printBulkBonus');


Route::resource('payrollsalary', PayrollSalaryController::class); 
Route::get('/payroll_salary/bulk', [PayrollSalaryController::class, 'printBulk'])->middleware(['auth'])->name('printBulkSalary');

Route::resource('payrollovertime', PayrollOvertimeController::class); 
Route::get('/payroll_overtime/bulkprinting', [PayrollOvertimeController::class, 'printBulk'])->middleware(['auth'])->name('printBulkOvertime');

Route::resource('payrollbonus', PayrollBonusController::class); 
Route::get('/payroll_bonus/bulkprinting', [PayrollBonusController::class, 'printBulk'])->middleware(['auth'])->name('printBulkBonus');

Route::resource('shiftschedule', ShiftScheduleController::class);

Route::resource('allowancesummary', AllowanceSummaryController::class);
Route::post('api/fetch-period', [AllowanceSummaryController::class, 'fetchPeriod']);
//Route::resource('api/fetch-period', [AllowanceSummaryController::class]);

Route::resource('rfdreport', RfdReportController::class);
Route::get('rfd_report/print/{head_id}', [RfdReportController::class, 'print'])->name('printRFD');

Route::get('/upload/receive', [UploadAllowanceController::class, 'receive'])->middleware(['auth'])->name('receiveForm');
Route::resource('payrollComp', PayrollComputationController::class);
Route::resource('dtrOffice', DTRofficeController::class);
Route::resource('dtrSite', DTRsiteController::class);
Route::resource('otOffice', OTofficeController::class);
Route::resource('otSite', OTsiteController::class);
Route::resource('overall_OT', overallOTController::class);


// Route::get('/shift_sched', [Shift_ScheduleController::class, 'shift_sched'])->middleware(['auth'])->name('shift_sched');
// Route::get('/payroll_salary', [PayrollController::class, 'payroll_salary'])->middleware(['auth'])->name('payroll_salary');
// Route::get('/payroll_allowance', [PayrollController::class, 'payroll_allowance'])->middleware(['auth'])->name('payroll_allowance');
// Route::get('/payroll_bonus', [PayrollController::class, 'payroll_bonus'])->middleware(['auth'])->name('payroll_bonus');
// Route::get('/payroll_overtime', [PayrollController::class, 'payroll_overtime'])->middleware(['auth'])->name('payroll_overtime');
// Route::get('/upload_allowance', [UploadAllowController::class, 'uploadAllowance'])->middleware(['auth'])->name('upload_allowance');

// Route::get('/dash', [MasterfileController::class, 'dash'])->middleware(['auth'])->name("dash");
// Route::get('/masterfile/employee_list', 'App\Http\Controllers\MasterfileController@index');

Route::get('/toolkit', function () {
    return view('uikit/components');
});