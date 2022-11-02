<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;
    protected $table = 'deductions';
    protected $primaryKey = 'id';
    protected $fillable = ['payslip_info_id', 'deduction_frequency', 'deduction_period'];
}
