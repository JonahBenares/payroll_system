<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveFailureDetail extends Model
{
    use HasFactory;
    protected $table = 'leave_filing_detail';
    protected $primaryKey = 'id';
    protected $fillable = ['filed', 'date_filed', 'with_pay', 'pay_percentage','cancelled','cancel_remarks','cancel_date','cancelled_by'];
}
