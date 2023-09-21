<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Index(){
        $admin = Auth::user()->name;
        $userphoto = Auth::user()->userphoto;
        return view('admin.dashboard', compact('admin', 'userphoto'));
    }

    public function AdminLogOut()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admindashboard');
    }
}
