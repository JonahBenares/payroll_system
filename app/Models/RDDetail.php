<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RDDetail extends Model
{
    use HasFactory;
    protected $table = 'rd_detail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rd_head_id', 
        'employee_id', 
        'personal_id',
        'rd_date',
        'rd_hours',
        'hourly_rate',
        'rd_rate',
        'total_rd_amount'
        
    ];
}
