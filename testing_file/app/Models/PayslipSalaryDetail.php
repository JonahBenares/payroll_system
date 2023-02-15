<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayslipSalaryDetail extends Model
{
    use HasFactory;
    protected $table = 'payslip_salary_detail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'payslip_salary_head_id', 
        'employee_id', 
        'personal_id', 
        'payslip_info_id',
        'description',
        'total_amount'
    ];
}
