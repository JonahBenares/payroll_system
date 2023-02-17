<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdjustmentHead extends Model
{
    use HasFactory;
    protected $table = 'adjustment_head';
    protected $primaryKey = 'id';
    protected $fillable = [
        'personal_id',
        'location_id',
        'employee_id', 
        'period_type', 
        'month_year'
    ];
}
