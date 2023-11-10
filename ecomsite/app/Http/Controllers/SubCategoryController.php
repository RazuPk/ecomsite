<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubCategoriesRequest;
use App\Http\Services\SubCategoriesHelpers;

class SubCategoryController extends Controller
{
    public function Index(){
        return (new SubCategoriesHelpers())->Index();
    }
    public function AddSubCategory(){
        return (new SubCategoriesHelpers())->AddSubCategory();
    }
    public function StoreSubCategory(SubCategoriesRequest $request)
    {
        return (new SubCategoriesHelpers())->StoreSubCategory($request);
    }

    public function EditSubCategory($id){
        return (new SubCategoriesHelpers())->EditSubCategory($id);
    }

    public function UpdateSubCategory(SubCategoriesRequest $request)
    {
        $id = $request->category_id;
        return (new SubCategoriesHelpers())->UpdateSubCategory($request, $id);
    }

    public function DeleteSubCategory($id)
    {
        return (new SubCategoriesHelpers())->destroySubCategory($id);
    }
}
