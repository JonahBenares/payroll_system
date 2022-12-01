<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftScheduleDetail extends Model
{
    use HasFactory;

    protected $table = 'schedule_detail';
    
    protected $fillable = [
        'schedule_head_id',
        'rest_day',
        
    ];
}
