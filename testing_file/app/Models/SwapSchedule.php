<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwapSchedule extends Model
{
    use HasFactory;
    protected $table = 'swap';

    protected $fillable = [
        'employee_id',
        'personal_id',
        'file_date',
        'shift_from_rd',
        'shift_to_duty',
        'shift_from_duty',
        'shift_to_rd',
        
    ];
}
