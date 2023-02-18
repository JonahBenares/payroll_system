<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'db_payroll.employees';
    protected $fillable = [
        'supervisory',
        'hourly_rate',
        'daily_rate',
        'monthly_rate',
        'salary_type',
        'accounting_entry_id'
    ];
    public function timekeeping()
    {
        $_this = new self;
        return $_this->belongsToMany(Timekeeping::class, 'employees', 'personal_id', 'personal_id');
    }
    
}
