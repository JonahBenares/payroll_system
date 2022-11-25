<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftSchedule extends Model
{
    use HasFactory;
    protected $table = 'schedule_head';
    
    protected $fillable = [
        'personal_id',
        'employee_id',
        'schedule_code',
        'month_year',
        'schedule_type',
        'alternate_week',
        
    ];

    public function scheudule_detail()
    {
        return $this->hasMany(scheudule_detail::class);
    }

}
