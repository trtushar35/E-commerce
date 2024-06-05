@extends('frontend.master')
@section('content')

<div class="heading_container heading_center">
    <h2>
        Our <span>products</span>
    </h2>
</div>
<div class="row">
    @foreach ($products as $data)
    <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="box">
            <a href="{{route('single.product.view', $data->id)}}">
                <div class="option_container">
                    <div class="options">
                        <a href="{{route('add.to.cart', $data->id)}}" class="option1">
                            Add to cart
                        </a>
                        <a href="{{route('single.product.view', $data->id)}}" class="option2">
                            View Details
                        </a>
                    </div>
                </div>
                <div class="img-box">
                    <img src="{{url('/uploads/', $data->image)}}" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        {{$data->name}}
                    </h5>
                    <h6>
                        {{$data->price}}.bdt
                    </h6>
                </div>
            </a>
        </div>
    </div>
    @endforeach

</div>
<div class="btn-box">
    <a href="">
        View All products
    </a>
</div>
@endsection