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

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Check user credentials (without hashing)
        $user = SuperAdmin::where('email', $request->email)
                ->where('password', $request->password) // Directly comparing passwords
                ->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid email or password'], 401);
        }

        // Redirect to dashboard on successful login
        return redirect()->route('dashboard')->with([
            'message' => 'Login successful',
            'user' => $user
        ]);
    }
}
