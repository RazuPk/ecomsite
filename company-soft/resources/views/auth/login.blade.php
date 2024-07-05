@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-secondary text-center">Login</h2>
                </div>
                <div class="card-body p-5">
                    <form action="#" method="post" id="login_form">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="email" id="email" class="form-control rounded-0" placeholder="E-mail">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="password">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <a href="/forgot" class="text-decoration-none">Forgot Password?</a>
                        </div>

                        <div class="mb-3 d-grid">
                            <input type="submit" value="Login" class="btn btn-dark rounded-0" id="login_btn">
                        </div>
                        <div class="text-center text-secondary">
                            <div>Don't have an account? <a href="/register" class="text-decoration-none">Register Here</a></div>
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
