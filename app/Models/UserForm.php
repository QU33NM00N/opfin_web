<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserForm extends Model
{
    use HasFactory;

    // Add the fillable property
    protected $fillable = [
        'name',
        'email',
        'department',
        'company_name',
        'start_date',
        'end_date',
        'work_schedule',
        'gross_salary', // Add this
        'net_salary',   // Add this
    ];
    
    
    
}

