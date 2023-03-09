<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTRremark extends Model
{
    use HasFactory;
    protected $table = 'dtr_remarks';
    protected $primaryKey = 'id';
    protected $fillable = ['employee_id', 'personal_id', 'date','remarks'];
}
