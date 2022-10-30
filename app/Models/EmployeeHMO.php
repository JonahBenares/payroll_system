<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeHMO extends Model
{
    use HasFactory;
    protected $table = 'employees_hmo';
    protected $fillable = [
        'employee_id',
        'hmo_rate_id',
        'no_of_dependent',
    ];
    public function Employees(){
     return $this->belongsToMany(Employee::class);
    }

}
