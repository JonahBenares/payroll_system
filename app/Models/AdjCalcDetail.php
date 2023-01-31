<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdjCalcDetail extends Model
{
    use HasFactory;
    protected $table = 'adj_calc_detail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'adj_calc_head_id', 
        'employee_id', 
        'personal_id',
        'rd_date',
        'rd_hours',
        'normal_hours',
        'np_hours',
        'hourly_rate',
        'rd_rate',
        'rd_amount',
        'holiday_rate',
        'holiday_amount',
        'np_rate',
        'np_amount',
        'total_amount'
        
    ];
}
