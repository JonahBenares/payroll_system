<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeSchedule extends Model
{
    use HasFactory;
<<<<<<< HEAD
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
=======
>>>>>>> 25c1ed314941e9c72afe617b7fd45db92cf68dc8
}
