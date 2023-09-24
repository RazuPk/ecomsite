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
                    <tr class="text-center">
                        <th>Date</th>
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
                            $cdate = date('d-m-Y', strtotime($orders->created_at));
                        @endphp
                        <tr>
                            <td>
                                {{ $cdate }}
                            </td>
                            <td>{{ $user_name }}</td>
                            <td>{{ $orders->mobile_no }}</td>
                            <td>{{ $orders->item_qty }}</td>
                            <td>{{ number_format($orders->total_amt, 2) }}</td>
                            <td>{{ $orders->status == 1 ? 'Pending' : 'Approved' }}</td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#largeModal{{ $orders->id }}"
                                    title="View Details"><i class='bx bx-show'></i></button>
                                @include('admin.layouts.modalTop')
                                <a href="{{ route('updateorderstatus', $orders->id) }}" class="btn btn-success btn-sm"title="Approved" onclick="return confirm('Are you verified this Order ?')"><i class='bx bxs-check-square'></i></a>
                                <a href="{{ route('cancelorderstatus', $orders->id) }}" class="btn btn-danger btn-sm"title="Cancel" onclick="return confirm('Are you sure to cancel this Order ?')"><i class='bx bxs-x-square'></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex mt-3 p-3">
                {!! $orders_info->links() !!}
            </div>
        </div>
    </div>
@endsection
