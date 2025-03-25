<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    
    protected $table = 'superadmin';
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'phone',
        'doj',
        'dob',
    ];
}
