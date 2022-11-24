<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveFailureDetail extends Model
{
    use HasFactory;
    protected $table = 'leave_filing_detail';
    protected $primaryKey = 'id';
    protected $fillable = ['date_filed', 'with_pay', 'pay_percentage','filed','cancelled','cancel_remarks'];
}
