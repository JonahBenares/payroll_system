<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CutOff extends Model
{
    use HasFactory;
    protected $table = 'cutoff';
    protected $primaryKey = 'id';
    protected $fillable = ['cutoff_type', 'cutoff_start', 'cutoff_end'];
}
