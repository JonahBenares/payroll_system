<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayslipSalary extends Model
{
    use HasFactory;
    protected $table = 'payslip_salary_head';
    protected $primaryKey = 'id';
    protected $fillable = ['salary_month', 'salary_year', 'cutoff', 'created_at'];
}
