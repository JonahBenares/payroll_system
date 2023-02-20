<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timekeeping extends Model
{
    use HasFactory;
    public $connection = 'mysql_second';
    protected $table = 'timekeeping';
    public static function employees(){
        $_this = new self;
        return $_this->belongsToMany(Employee::class, 'timekeeping', 'personal_id', 'personal_id');
    }
    // public function schedule()
    // {
    //     return $this->belongsToMany(ShiftSchedule::class, 'schedule_head', 'personal_id', 'personal_id');
    // }
}
