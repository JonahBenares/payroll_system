<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountingEntry extends Model
{
    use HasFactory;
    protected $table = 'accounting_entry';

    protected $fillable = ['description'];
}
    
