<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadAllowance extends Model
{
    use HasFactory;
    protected $table = 'allowance_head';

    protected $fillable = [
        'from_date',
        'to_date',
        'allowance_id',
        'bu_id',
        'company',
        'pay_to',
        'apv_no',
        'rfd_date',
        'due_date',
        
    ];
}
