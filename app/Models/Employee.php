<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'supervisory',
        'hourly_rate',
        'daily_rate',
        'monthly_rate',
        'salary_type',
        'accounting_entry_id'
    ];
   
    
}
