<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TardinessRate extends Model
{
    use HasFactory;
    protected $table = 'tardiness_rate';
    protected $fillable = [
        'minute_to',
        'minute_from', 
        'deduction_percent'
    ];
}
