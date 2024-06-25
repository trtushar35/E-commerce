@extends('admin.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Payment Type</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $orderDetails as $data)
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->quantity}}</td>
                        <td>{{$data->subtotal}}</td>
                        <td>{{$data->payment_type}}</td>
                        <td>{{$data->payment_status}}</td>
                        <td>
                            @if ($data->payment_status == 'pending')
                            @if($data -> payment_type == 'cod' )
                            <a class="btn btn-danger flex-content-between" href="{{route('make.payment', $data->id)}}"> Cancel Order</a>
                            @elseif ($data->payment_type == 'ssl')
                            <a class="btn btn-danger flex-content-between" href="{{route('make.payment', $data->id)}}"> Cancel Order</a>
                            @else
                            <span>N/A</span>
                            @endif
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection