<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OvertimeDetails extends Model
{
    use HasFactory;
    protected $table = 'ot_detail';
    protected $primaryKey = 'id';
    protected $fillable = [
        'employee_id', 
        'personal_id', 
        'ot_head_id', 
        'hourly_rate',
        'reg_day',
        'RD',
        'SH',
        'SH_RD',
        'RH',
        'RH_RD',
        'reg_day_np',
        'reg_np_ot',
        'SH_RD_NP',
        'SH_OT_NP',
        'SH_RD_OT_NP',
        'RH_NP',
        'RH_RD_NP',
        'RH_RD_OT_NP',
        'RH_OT_NP',
        'reg_day_hr',
        'RD_HR',
        'SH_HR',
        'SH_RD_HR',
        'RH_HR',
        'RH_RD_HR',
        'reg_day_np_hr',
        'reg_np_ot_hr',
        'SH_RD_NP_HR',
        'SH_OT_NP_HR',
        'SH_RD_OT_NP_HR',
        'RH_NP_HR',
        'RH_RD_NP_HR',
        'RH_RD_OT_NP_HR',
        'RH_OT_NP_HR',
        'total_amount'
    ];
}
