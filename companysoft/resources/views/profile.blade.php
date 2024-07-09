@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="fw-bold text-secondary">User Profile</h2>
                        <a href="{{ route('auth.logout') }}" class="btn btn-dark">Logout</a>
                    </div>
                    <input type="hidden" name="user_id" id="user_id" value="{{ $userInfo->id }}">

                    <div class="card-body p-5">
                        <div id="profile_alert"></div>
                        <div class="row">
                            <div class="col-lg-4 text-center" style="border-right:1px solid #999;">
                                <div class="justify-content-center align-items-center mb-3">
                                    <form action="#" method="post" id="empid_form">
                                        @csrf
                                        <div class="input-group">
                                            <span class="input-group-text btn btn-success text-light rounded-1">Employee Id:</span>
                                            <input type="text" name="empid" id="empid"
                                                class="form-control rounded-0" value="{{ $userInfo->empid }}"
                                                onkeyup="checkEmpId(this)">
                                            <input type="submit" class="btn btn-secondary rounded-1" id="empid_btn"
                                                value="Done">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-5">
                                    <img src="{{ $userInfo->picture ? $userInfo->picture : asset('img/profileimg.jpg') }}"
                                        id="image_preview" class="img-fluid rounded-circle img-thumnail" width="200">
                                    <div>
                                        <label for="picture">Change Profile Picture</label>
                                        <input type="file" name="picture" id="picture"
                                            class="form-control rounded-pill">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 px-5">
                                <form action="#" method="post" id="profile_form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="name">Full Name</label>
                                            <input type="text" name="name" id="name"
                                                class="form-control rounded-0" value="{{ $userInfo->name }}">
                                        </div>
                                        <div class="col-lg">
                                            <label for="usertype">User Type</label>
                                            <select name="usertype" id="usertype" class="form-select rounded-0">
                                                <option value="" selected disabled>-Select-</option>
                                                <option value="1" {{ $userInfo->usertype == '1' ? 'selected' : '' }}>
                                                    Admin</option>
                                                <option value="2" {{ $userInfo->usertype == '2' ? 'selected' : '' }}>
                                                    Manager</option>
                                                <option value="3" {{ $userInfo->usertype == '3' ? 'selected' : '' }}>IT
                                                </option>
                                                <option value="4" {{ $userInfo->usertype == '4' ? 'selected' : '' }}>
                                                    Employee</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <label for="phone">Phone</label>
                                        <input type="tel" name="phone" id="phone" class="form-control rounded-0"
                                            value="{{ $userInfo->phone }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" class="form-select rounded-0">
                                                <option value="" selected disabled>-Select-</option>
                                                <option value="Male" {{ $userInfo->gender == 'Male' ? 'selected' : '' }}>
                                                    Male</option>
                                                <option value="Female"
                                                    {{ $userInfo->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-lg">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" name="dob" id="dob"
                                                class="form-control rounded-0" value="{{ $userInfo->dob }}">
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <label for="email">E-mail</label>
                                        <input type="email" name="email" id="email" class="form-control rounded-0"
                                            value="{{ $userInfo->email }}">
                                    </div>
                                    <div class="my-2">
                                        <input type="submit" value="Update Profile"
                                            class="btn btn-primary rounded-0 float-end" id="profile_btn">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $("#picture").change(function(e) {
                const file = e.target.files[0];
                let url = window.URL.createObjectURL(file);
                $("#image_preview").attr('src', url);
                let fd = new FormData();
                fd.append('picture', file);
                fd.append('user_id', $("#user_id").val());
                fd.append('_token', '{{ csrf_token() }}');
                $.ajax({
                    url: '{{ route('profile.image') }}',
                    method: 'post',
                    data: fd,
                    cache: false,
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 200) {
                            $("#profile_alert").html(showMessage('success', response.message));
                            $("#picture").val('');
                        }
                    }
                });
            });

            checkEmpId = (obj) => {
                var emp_code = obj.value;
                $.ajax({
                    url: '{{ route('empid.check') }}',
                    method: 'post',
                    data: {
                        empid: emp_code,
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        if (res.status == 400) {
                            showError('empid', res.message.empid);
                        } else if (res.status == 200) {
                            showError('empid', res.message.empid);
                        }
                    }
                });
            }

            $("#empid_form").submit(function(e) {
                e.preventDefault();
                let id = $("#user_id").val();
                $("#empid_btn").val("Loading...");
                $.ajax({
                    url: '{{ route('empid.update') }}',
                    method: 'post',
                    data: $(this).serialize() + '&id=' + id,
                    dataType: 'json',
                    success: function(res) {
                        if (res.status == 400) {
                            showError('empid', res.message.empid);
                            $("#empid_btn").val("Done");
                        } else if (res.status == 401) {
                            $("#profile_alert").html(showMessage('danger', res.message));
                            $("#empid_btn").val("Done");
                        } else if (res.status == 200) {
                            $("#profile_alert").html(showMessage('success', res.message));
                            removeValidationClasses("#empid_form");
                            $("#empid_btn").val("Done");
                        }
                    }
                });
            });

            $("#profile_form").submit(function(e) {
                e.preventDefault();
                $("#profile_btn").val('Updating...');
                let id = $("#user_id").val();
                $.ajax({
                    url: '{{ route('profile.update') }}',
                    method: 'post',
                    data: $(this).serialize() + '&id=' + id,
                    dataType: 'json',
                    success: function(res) {
                        if (res.status == 400) {
                            $("#profile_alert").html(showMessage('danger', res.message));
                            $("#profile_btn").val('Update Profile');
                        } else if (res.status == 401) {
                            $("#profile_alert").html(showMessage('danger', res.message));
                            $("#profile_btn").val('Update Profile');
                        } else if (res.status == 200) {
                            $("#profile_alert").html(showMessage('success', res.message));
                            $("#profile_btn").val('Update Profile');
                        }
                    }
                });
            });
        });
    </script>
@endsection
