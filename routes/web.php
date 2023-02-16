<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MasterfileController;
use App\Http\Controllers\Shift_ScheduleController;
use App\Http\Controllers\AccountingEntryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\PayslipInfoController;
use App\Http\Controllers\EmployeeDeductionController;
use App\Http\Controllers\AllowanceController;
use App\Http\Controllers\AllowanceRateController;
use App\Http\Controllers\AdjustmentRateController;
use App\Http\Controllers\HmoRateController;
use App\Http\Controllers\DeductionController;
use App\Http\Controllers\StatutoryBracketController;
use App\Http\Controllers\TardinessRateController;
use App\Http\Controllers\CutOffController;
use App\Http\Controllers\BusUnitController;
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
use App\Http\Controllers\ChangeScheduleController;



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

// Employee Deduction
Route::resource('empDeduction', EmployeeDeductionController::class);
Route::post('/empDeduction/fetch', [EmployeeDeductionController::class, 'fetchRate']);
Route::get('/empDeduction/destroy/{id}/{emp_id}', [EmployeeDeductionController::class, 'destroy'])->name('delete_info');
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

// Business Unit
Route::resource('busUnit', BusUnitController::class); 

// Leave
Route::resource('leavefailure', LeaveFailureController::class);
Route::post('/leavefailure/unfiled', [LeaveFailureController::class, 'unfiled'])->name('unfiled');

//FiledLeave
Route::resource('filedleave', FiledLeaveController::class);

// Overtime
Route::resource('ot', OvertimeController::class); 
Route::post('/ot/filter_overtime', [OvertimeController::class, 'filter_overtime'])->name('filter_overtime');
Route::post('/ot/fetchtime', [OvertimeController::class, 'fetchTime']);

Route::resource('swapschedule', SwapScheduleController::class); 
Route::post('/swapschedule/cancel/{id}/', [SwapScheduleController::class, 'cancel'])->name('cancel');

Route::resource('changeSched', ChangeScheduleController::class);
Route::post('/changeSched/cancel_schedule/', [ChangeScheduleController::class, 'cancel_schedule'])->name('cancel_sched');

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
Route::post('/payrollovertime/filter_payroll_ot', [PayrollOvertimeController::class, 'filter_payroll_ot'])->name('filter_payroll_ot');
Route::get('/payroll_overtime/bulkprinting/{month_year}/{period}', [PayrollOvertimeController::class, 'printBulk'])->middleware(['auth'])->name('printBulkOvertime');
Route::get('/payrollovertime/show/{personal_id}/{month_year}/{period}', [PayrollOvertimeController::class, 'show'])->name('show');

Route::resource('payrollbonus', PayrollBonusController::class); 
//Route::post('/payrollbonus/filter_payroll_bonus', [PayrollBonusController::class, 'filter_payroll_bonus'])->name('filter_payroll_bonus');
Route::get('/payroll_bonus/bulkprinting/{type}/{year}', [PayrollBonusController::class, 'printBulk'])->middleware(['auth'])->name('printBulkBonus');
Route::get('/payrollbonus/show/{personal_id}/{type}/{year}', [PayrollBonusController::class, 'show'])->name('show');


Route::resource('payrollsalary', PayrollSalaryController::class); 
Route::get('/payroll_salary/bulk', [PayrollSalaryController::class, 'printBulk'])->middleware(['auth'])->name('printBulkSalary');
Route::get('/rd_computation/{month}/{year}/{cutoff}', [PayrollSalaryController::class, 'rd_computation'])->name('rd_computation');
Route::get('/holiday_computation/{month}/{year}/{cutoff}', [PayrollSalaryController::class, 'holiday_computation'])->name('holiday_computation');
Route::get('/time_computation/{month}/{year}/{cutoff}', [PayrollSalaryController::class, 'time_computation'])->name('time_computation');

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
//OT Office
Route::resource('otOffice', OTofficeController::class);
Route::post('/otOffice/filter_otoffice', [OTofficeController::class, 'filter_otoffice'])->name('filter_otoffice');
// Route::post('/otOffice/store', [OTofficeController::class, 'store'])->name('store');
Route::post('/otOffice/fetchEmployee', [OTofficeController::class, 'fetchEmployee']);
Route::get('/otOffice/destroyed/{id}/{emp_id}', [OTofficeController::class, 'destroy'])->name('destroyed');
//OT Site
Route::resource('otSite', OTsiteController::class);
Route::post('/otSite/filter_otsite', [OTsiteController::class, 'filter_otsite'])->name('filter_otsite');
Route::get('/otSite/destroy/{id}/{emp_id}', [OTsiteController::class, 'destroy'])->name('destroy');

Route::resource('overall_OT', overallOTController::class);
Route::post('/overallOT/filter_overallot', [overallOTController::class, 'filter_overallot'])->name('filter_overallot');


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