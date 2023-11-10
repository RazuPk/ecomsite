<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductImageRequest;
use App\Http\Requests\ProductsRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Services\ProductsHelpers;

class ProductController extends Controller
{
    public function Index()
    {
        return (new ProductsHelpers())->Index();
    }
    public function AddProduct()
    {
        return (new ProductsHelpers())->AddProduct();
    }

    public function FetchSubCategory($id)
    {
        return (new ProductsHelpers())->FetchSubCategory($id);
    }

    public function StoreProduct(ProductsRequest $request)
    {
        return (new ProductsHelpers())->StoreProduct($request);
    }

    public function EditPhoto($id)
    {
        return (new ProductsHelpers())->EditPhoto($id);
    }

    public function UpdatePhoto(ProductImageRequest $request)
    {
        return (new ProductsHelpers())->UpdatePhoto($request);
    }

    public function EditProduct($id)
    {
        return (new ProductsHelpers())->EditProduct($id);
    }

    public function UpdateProduct(ProductUpdateRequest $request)
    {
        return (new ProductsHelpers())->UpdateProduct($request);
    }

    public function DeleteProduct($id)
    {
        return (new ProductsHelpers())->destroyProduct($id);
    }
}
