<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadAllowanceTime extends Model
{
    use HasFactory;
    protected $table = 'allowance_time';

    protected $fillable = [
        'allowance_head_id',
        'allowance_detail_id',
        'duty_date',
        'time_in',
        'time_out',
        'time_hours',
    ];
}
