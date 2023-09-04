<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $categories = Categories::latest()->get();
        return view('users_template.home', compact('categories'));
    }
}
