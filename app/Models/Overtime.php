<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    use HasFactory;
    protected $table = 'ot_head';
    protected $primaryKey = 'id';
    protected $fillable=[
        'month_year',
        'payroll_period'
    ];
}
