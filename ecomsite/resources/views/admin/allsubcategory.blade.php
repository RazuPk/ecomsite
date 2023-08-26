@extends('admin.layouts.template')
@section('page-title')
    All Sub-Category | EcomSite
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Sub Category</h5>
        <div class="card">
            <h5 class="card-header">Available Sub Category Information</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Sub Category Name</th>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($subcategories as $subcategory)
                        <tr>
                            <td>{{ $subcategory->id }}</td>
                            <td>{{ $subcategory->subcategory_name }}</td>
                            <td>{{ $subcategory->category_name }}</td>
                            <td>{{ $subcategory->slug }}</td>
                            <td>
                                <a href="{{ route('editsubcategory', $subcategory->id) }}" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
