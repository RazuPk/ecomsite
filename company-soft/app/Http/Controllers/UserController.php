<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
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
    //handle register user ajax request
    public function saveUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'userid' => 'required|unique:users|max:10',
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:100',
            'password' => 'required|max:6',
            'cpassword' => 'required|same:password'
        ], [
            'cpassword.same' => 'Password did not matched!',
            'cpassword.required' => 'Confirm password is required!'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->getMessageBag()
            ]);
        } else {
            $user = new User();
            $user->userid = $request->input('userid');
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->save();
            return response()->json([
                'status' => 200,
                'message' => 'Registered Successfull!'
            ]);
        }
    }
}
