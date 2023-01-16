<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadAllowanceDetail extends Model
{
    use HasFactory;
    protected $table = 'allowance_detail';

    protected $fillable = [
        'allowance_head_id',
        'employee_id',
        'personal_id',
        'total_days',
        'allowance_amount',
        'OT_allowance_amount',
        'total_allowance',
        'remarks',
    ];
}
