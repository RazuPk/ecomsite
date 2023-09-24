<div class="modal fade" id="largeModal{{ $orders->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Delivered To.</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-8 mb-3">
                        <label for="nameLarge" class="form-label">
                            <b>{{ $user_name }},</b><br>
                            Address:
                            <b>{{ $orders->shipping_address . ', ' . $orders->city . ', ' . $orders->district }}</b>
                            <br>
                            Phone No: <b>{{ $orders->mobile_no }}</b>
                        </label>
                    </div>
                    <div class="col-4 mb-3">
                        <label for="nameLarge" class="form-label">
                            @php
                                $cdate = date('d-m-Y',strtotime($orders->created_at));
                            @endphp
                             Date: <b>{{ $cdate }},</b><br>
                            Order Id:
                            <b>{{ $orders->id }}</b>
                            <br>
                            Status: <b>{{ (($orders->status=='1') ? 'Pending':(($orders->status=='2') ? 'Cancel' : 'Approved' )) }}</b>
                        </label>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center bg-dark">
                                    <th class="text-light">#</th>
                                    <th class="text-light">Product</th>
                                    <th class="text-light">Price</th>
                                    <th class="text-light">QTY</th>
                                    <th class="text-light">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $ordersDetails = App\Models\OrderDetails::where('order_id', $orders->id)->get();
                                    $n = 1;
                                    $total = 0;
                                @endphp
                                @foreach ($ordersDetails as $item)
                                    @php
                                        $product_name = App\Models\Products::where('id', $item->product_id)->value('product_name');
                                    @endphp
                                    <tr>
                                        <td class="text-center">{{ $n++ }}</td>
                                        <td>{{ $product_name }}</td>
                                        <td class="text-center">{{ number_format($item->price, 2) }}</td>
                                        <td class="text-center">{{ $item->quantity }}</td>
                                        <td class="text-center">{{ number_format($item->price * $item->quantity, 2) }}
                                        </td>
                                    </tr>
                                    @php
                                        $total = $total + $item->price * $item->quantity;
                                    @endphp
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">Total:</td>
                                    <td class="text-center"><b>{{ number_format($total, 2) }}</b></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    Close
                </button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
