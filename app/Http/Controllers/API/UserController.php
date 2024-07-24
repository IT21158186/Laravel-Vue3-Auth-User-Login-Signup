<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $success = true;
            $message = "User Logged In Successfully";
        } else {
            $success = false;
            $message = "Invalid Email or Password";
        }

        $response = [
            "success" => $success,
            "message" => $message,
            // "data" => Auth::user()
        ];

        return response()->json($response, 200);
    }

    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $success = true;
            $message = "User created successfully";
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;  // Correct this to false on exception
            $message = $ex->getMessage();
        }

        $response = [
            "success" => $success,
            "message" => $message,
            // "data" => Auth::user()
        ];

        return response()->json($response, 200);
    }

    public function logout()
    {
        try {
            Session::flush();
            $success = true;
            $message = "User Logged Out Successfully";
        } catch (\Exception $ex) { // Catch a general exception
            $success = false;
            $message = "User Log Out Failed";
        }

        $response = [
            "success" => $success,
            "message" => $message,
        ];

        return response()->json($response, 200);
    }
}
