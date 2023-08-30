<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index(){
        return view('admin.pendingorder');
    }
}
