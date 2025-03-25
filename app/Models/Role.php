<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    protected $fillable = [
        'deptId',
        'roleName',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
