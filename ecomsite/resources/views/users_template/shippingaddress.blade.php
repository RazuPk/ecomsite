@extends('users_template.layouts.template')
@section('page-title')
    Shipping Address | EcomSite
@endsection
@section('banner-slider')
    <div class="row">
        <div class="col-sm-12">
            <div class="box_main">
                <h2>Provide Your Shipping Address</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('storeshippinginfo') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="road_no">Address:</label>
                        <input class="form-control" type="text" name="shipping_address" placeholder="Address details...">
                    </div>
                    <div class="form-group">
                        <label for="city">City/Area:</label>
                        <input class="form-control" type="text" name="city" placeholder="Area location...">
                    </div>
                    <div class="form-group">
                        <label for="district">District:</label>
                        <input class="form-control" type="text" name="district" placeholder="Present district...">
                    </div>
                    <div class="form-group">
                        <label for="mobile_no">Mobile Number:</label>
                        <input class="form-control" type="number" name="mobile_no" placeholder="Valid Mobile Number">
                    </div>
                    <input type="submit" class="btn btn-success" value="Next">
                </form>
            </div>
        </div>
    </div>
@endsection
