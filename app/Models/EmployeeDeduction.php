<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDeduction extends Model
{
    use HasFactory;
    protected $table = 'employee_deduction_rate';
    protected $fillable = [
        'employee_id',
        'personal_id', 
        'payslip_info_id',
        'employee_rate'
    ];
}
