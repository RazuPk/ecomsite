@extends('users_template.layouts.template')
@section('page-title')
    User Profile | EcomSite
@endsection
@section('main-content')
   <h2>User Profile {{ Auth::user()->name }}</h2>
@endsection
