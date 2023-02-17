<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HmoRate extends Model
{
    use HasFactory;
    protected $table = 'hmo_rates';
    protected $fillable = [
        'level_description',
        'hmo_rate',
    ];
}
