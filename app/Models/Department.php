<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    protected $fillable = [
        'departmentName',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'status'
    ];
}
