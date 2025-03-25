<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   public function index()
   {
        $roles = Role::all();
        if($roles)
        {
            return response()->json([
                'status' => 200,
                'message' => 'Roles retrieved successfully',
                'data' => $roles]);
            
        }
        else
        {
            return response()->json([
                'status' => 404,
                'message' => 'No roles found'
            ]);
        }
    }

    public function store(Request $request)
    {
        $role = Role::firstOrCreate([
            'deptId' => $request->deptId,
            'rolename' => $request->rolename,

    ]);
    if($role->wasRecentlyCreated)
    {
        return response()->json([
            'status' => 201,
            'message' => 'Role created successfully',
            'data' => $role
            ]);
    }
    else
    {
        return response()->json([
            'status' => 409,
            'message' => 'Role already exists'
            ]);
    }

    }
}
