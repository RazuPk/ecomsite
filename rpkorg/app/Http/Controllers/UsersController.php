<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login()
    {
        $userid = Users::where('id', 0)->first();
        return 'This is Login ' . $userid;
    }
}
