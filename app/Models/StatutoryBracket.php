<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatutoryBracket extends Model
{
    use HasFactory;
    protected $table = 'statutory_bracket';
    protected $primaryKey = 'id';
    protected $fillable = ['payslip_info_id', 'salary_from', 'salary_to', 'deduction_amount', 'as_of'];
}
