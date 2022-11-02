<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdjustmentRate extends Model
{
    use HasFactory;
    protected $table = 'rates';
    protected $fillable = [
        'payslip_info_id',
        'deduction_type', 
        'rate_amount'
    ];
}
