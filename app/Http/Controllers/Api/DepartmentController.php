<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
   public function getdept()
   {
        $alldept = Department::all();
        if($alldept)
        {
            return response()->json(['status' => 200,
             'message' => 'Department list',
             'data' => $alldept]);
        }
        else
        {
            return response()->json(['status' => 404,
            'message' => 'No Department found',
            'data' => '']);
        }
   }

   public function store(Request $request)
   {
    $department = Department::firstOrCreate(
        [
            'DepartmentName'=>$request->departmentname,
            'created_by' => $request->created_by
        ]);
        if($department->wasRecentlyCreated)
        {
            return response()->json([
            'status' => 200,
            'message' => 'Department created successfully',
            'data' => $department]);
        }
        else
        {
            return response()->json([
            'status' => 404,
            'message' => 'Department already exists',
            'data' => '']);
        }
    }   


}
