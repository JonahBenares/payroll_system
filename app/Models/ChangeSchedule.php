<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeSchedule extends Model
{
    use HasFactory;
    protected $table = 'change_schedule';
    protected $primaryKey = 'id';
    protected $fillable = [
        'date_applied',
        'employee_id',
        'personal_id', 
        'schedule_code', 
        'month_year',
        'start_date',
        'end_date',
        'cancel',
        'cancel_reason',
        'cancel_date',
    ];
}
