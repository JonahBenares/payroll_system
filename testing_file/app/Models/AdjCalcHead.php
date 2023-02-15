<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdjCalcHead extends Model
{
    use HasFactory;
    protected $table = 'adj_calc_head';
    protected $primaryKey = 'id';
    protected $fillable = ['salary_year', 'salary_month', 'cutoff'];
}
