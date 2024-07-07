@extends('layouts.app')
@section('title','Forgot Password')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-secondary text-center">Forgot Password!</h2>
                </div>
                <div class="card-body p-5">
                    <form action="#" method="post" id="forgot_form">
                        @csrf
                        <div class="mb-3 text-secondary">
                            Enter your E-mail address and we will send you a link to reset your password.
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-mail">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3 d-grid">
                            <input type="submit" value="Reset Password" class="btn btn-dark rounded-0">
                        </div>
                        <div class="text-center text-secondary">
                            <div>Back to <a href="/" class="text-decoration-none">Login</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection
