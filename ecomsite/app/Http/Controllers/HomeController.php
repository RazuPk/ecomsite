<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $allproducts = Products::latest()->get();
        return view('users_template.home', compact('allproducts'));
    }
}
