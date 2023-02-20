<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdjustmentDetails extends Model
{
    use HasFactory;
    protected $table = 'adjustment_details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'adjustment_id',
        'description',
        'amount',
        'days_hr',
        'total_amount',
    ];
}
