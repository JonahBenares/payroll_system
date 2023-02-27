<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimekeepingLogs extends Model
{
    use HasFactory;
    protected $table = 'timekeeping_logs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'employee_id', 
        'personal_id', 
        'month_year',
        'year',
        'month',
        'period',
        'log_date', 
        'time_in', 
        'time_out',
        'break_in',
        'break_out',
        'total_time',
        'total_breaktime',
        'overall_time',
        'incomplete',
        'incomplete_time_desc',
        'night_shift',
        'nd_hours',
        'regular_hours',
        'rest_day',
        'holiday'
    ];
}
