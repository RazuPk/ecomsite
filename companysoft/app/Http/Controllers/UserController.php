<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //welcome page
    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function reset()
    {
        return view('auth.reset');
    }

    //User save method
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'userid' => 'required|unique:users|max:10',
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users|max:100',
            'password' => 'required|max:50',
            'cpassword' => 'required|same:password'
        ], [
            'cpassword.same' => 'Password did not match!',
            'cpassword.required' => 'Confirm Password is required!'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->getMessageBag()
            ]);
        } else {
            $user = new User();
            $user->userid = $request->userid;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            return response()->json([
                'status' => 200,
                'message' => 'Registration Successfull!'
            ]);
        }
    }
}
