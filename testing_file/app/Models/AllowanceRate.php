<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllowanceRate extends Model
{
    use HasFactory;
    protected $table = 'allowance_rates';
    protected $fillable = [
        'employee_id',
        'personal_id', 
        'allowance_id',
        'allowance_rate'
    ];
}
