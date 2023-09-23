<div class="container-xxl flex-grow-1 container-p-y">
    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> User Profile Information </h5>
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
    </div>
</div>

<div class="container-xxl flex-grow-1">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </div>
</div>

<div class="container-xxl flex-grow-1">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-body">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
