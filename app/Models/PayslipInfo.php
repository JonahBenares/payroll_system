<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayslipInfo extends Model
{
    use HasFactory;
    protected $table = 'payslip_info';
    protected $primaryKey = 'id';
    protected $fillable = ['description', 'pay_type', 'editable'];
}
