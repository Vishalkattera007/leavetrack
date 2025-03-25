<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function index()
    {
        $getsuperadmin = SuperAdmin::all();
        if($getsuperadmin)
        {
            return response()->json(['status' => 200,
            'message' => 'Superadmin list',
            'data' => $getsuperadmin]);
        }
        else
        {
            return response()->json(['status' => 404,
            'message' => 'No Superadmin found',
            'data' => '']);
        }
    }
}
