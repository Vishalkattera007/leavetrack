<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table='admin';

    protected $fillable = [
        'deptId',
        'roleId',
        'firstName',
        'lastName',
        'email',
        'password',
        'phone',
        'doj',
        'dob',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'status'
    ];
}
