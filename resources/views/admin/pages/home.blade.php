@extends('admin.master')

@section('content')

<div class="container col-md-12">
    <h1 class="mt-3 mb-3">Dashboard</h1>

    <div class="row">
        <div class="col-md-3 d-flex ">
            <div class="card flex-fill shadow">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h3 class="mb-2">
                                {{$users}} <i class="fa-solid fa-users" style="margin-left: 200px;"></i>
                            </h3>
                            <p class="mb-2">Total Users</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex ">
            <div class="card flex-fill shadow">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h3 class="mb-2">
                                {{$orders}} <i class="fa-solid fa-users" style="margin-left: 200px;"></i>
                            </h3>
                            <p class="mb-2">Total Orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex ">
            <div class="card flex-fill shadow">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h3 class="mb-2">
                                {{$cancelOrder}} <i class="fa-solid fa-users" style="margin-left: 200px;"></i>
                            </h3>
                            <p class="mb-2">Total Cancel Orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex ">
            <div class="card flex-fill shadow">
                <div class="card-body py-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h3 class="mb-2">
                                {{$paidOrders}} <i class="fa-solid fa-users" style="margin-left: 200px;"></i>
                            </h3>
                            <p class="mb-2">Total Paid Orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection