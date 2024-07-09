@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold text-secondary text-center">Register</h2>
                </div>
                <div class="card-body p-5">
                    <div id="showregistration_alert"></div>
                    <form action="#" method="post" id="register_form">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="empid" id="empid" class="form-control rounded-0" placeholder="Employee Id">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <input type="text" name="name" id="name" class="form-control rounded-0" placeholder="Full Name">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-mail">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="cpassword" id="cpassword" class="form-control rounded-0" placeholder="Confirm Password">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="mb-3 d-grid">
                            <input type="submit" value="Register" class="btn btn-dark rounded-0" id="register_btn">
                        </div>
                        <div class="text-center text-secondary">
                            <div>Already have an account? <a href="/" class="text-decoration-none">Login Here</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $("#register_form").submit(function(e){
        e.preventDefault();
        $("#register_btn").val('Please Wait...');
        $.ajax({
            url:'{{ route('auth.register') }}',
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            success:function(res){
                if(res.status == 400){
                    showError('empid', res.message.empid);
                    showError('name', res.message.name);
                    showError('email', res.message.email);
                    showError('password', res.message.password);
                    showError('cpassword', res.message.cpassword);
                    $("#register_btn").val('Register');
                }else if(res.status == 200){
                    $("#showregistration_alert").html(showMessage('success', res.message));
                    $("#register_form")[0].reset();
                    removeValidationClasses("#register_form");
                    $("#register_btn").val('Register');
                }
            }
        });
    });
</script>
@endsection
