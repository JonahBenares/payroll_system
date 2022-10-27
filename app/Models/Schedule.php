<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule_code';
    protected $primaryKey = 'id';
    protected $fillable = ['schedule_code', 'time_in', 'time_out'];
}
