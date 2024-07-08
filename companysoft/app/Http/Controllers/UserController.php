<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json([
                'status' => 200,
                'message' => 'Registration Successfull!'
            ]);
        }
    }

    //user login method
    public function loginUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:100',
            'password' => 'required|max:6'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => $validator->getMessageBag()
            ]);
        } else {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $request->session()->put('loggedInUser', $user->id);
                    return response()->json([
                        'status' => 200,
                        'message' => 'success',
                    ]);
                } else {
                    return response()->json([
                        'status' => 401,
                        'message' => 'User or Password incorrect!'
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 401,
                    'message' => 'User not found!'
                ]);
            }
        }
    }

    //User profile page
    public function profile(Request $request)
    {
        $userInfo =  User::where('id', $request->session()->get('loggedInUser'))->first();
        return view('profile', compact('userInfo'));
    }

    //user logout method
    public function logout(Request $request)
    {
        if ($request->session()->has('loggedInUser')) {
            $request->session()->pull('loggedInUser');
            return redirect('/');
        }
    }

    //update user profile image ajax request
    public function profileImageUpdate(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::find($user_id);

        if ($request->picture) {
            $image_path = public_path($user->picture);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $file = $request->picture;
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('images'), $fileName);
            $user->picture = 'images/' . $fileName;
            $user->update();
            return response()->json([
                'status' => 200,
                'message' => 'Profile picture uploaded success!'
            ]);
        } else {
            return response()->json(['status' => 400,
                'message' => 'Picture not found!'
            ]);
        }
    }
}
