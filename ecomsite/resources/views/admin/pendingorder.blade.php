@extends('admin.layouts.template')
@section('page-title')
    Pending Orders | EcomSite
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/</span> All Pending Orders</h5>
        <div class="card">
            <h5 class="card-header">Pending Orders Information</h5>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Order Id</th>
                        <th>Customer Name</th>
                        <th>Contact Number</th>
                        <th>Items</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($orders_info as $orders)
                        @php
                            $user_id = $orders->user_id;
                            $user_name = App\Models\User::where('id', $user_id)->value('name');
                        @endphp
                        <tr>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn text-decoration-underline" data-bs-toggle="modal"
                                    data-bs-target="#largeModal{{ $orders->id }}"
                                    title="View Details">{{ $orders->id }}</button>
                                @include('admin.layouts.modalTop')

                            </td>
                            <td>{{ $user_name }}</td>
                            <td>{{ $orders->mobile_no }}</td>
                            <td>{{ $orders->item_qty }}</td>
                            <td>{{ number_format($orders->total_amt, 2) }}</td>
                            <td>{{ $orders->status == 1 ? 'Pending' : 'Approved' }}</td>
                            <td>
                                <a href="{{ route('updateorderstatus', $orders->id) }}" class="btn btn-primary">Approve</a>
                                <a href="{{ route('cancelorderstatus', $orders->id) }}" class="btn btn-warning">Cancel</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex mt-3 p-2">
                {!! $orders_info->links() !!}
            </div>
        </div>
    </div>
@endsection
