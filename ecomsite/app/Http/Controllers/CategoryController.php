<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Http\Services\CategoriesHelpers;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Index(){
        return (new CategoriesHelpers())->getAllCategories();
    }

    public function AddCategory(){
        return (new CategoriesHelpers)->AddCategory();
    }

    public function StoreCategory(CategoriesRequest $request)
    {
        return (new CategoriesHelpers)->storeCategory($request);
    }

    public function EditCategory($id){
        return (new CategoriesHelpers)->editCategory($id);
    }

    public function UpdateCategory(CategoriesRequest $request)
    {
        return (new CategoriesHelpers)->updateCategory($request, $request->category_id);
    }

    public function DeleteCategory($id){
        return (new CategoriesHelpers)->destroyCategory($id);
    }
}
