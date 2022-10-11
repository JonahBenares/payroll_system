<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'emp_num',
        'business_unit',
        'supervisory',
        'hourly_rate',
        'daily_rate',
        'bi_monthly_rate',
        'monthly_rate',
        'hmo_dependents',
        'emp_category',
        'business_unit',
        'emp_location'
        
    ];
}
