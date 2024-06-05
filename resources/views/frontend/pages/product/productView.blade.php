@include('frontend.partial.header')

<div class="container mb-4 mt-4 ">
    <div class="row dd-flex justify-content-center ">
        <div class="col-md-8 mt-3 mb-3 ">
            <div class="card px-3 shadow">
                <div class="row mt-3 mb-3 ">
                    <div class="col-md-6">
                        <div class="d-flex flex-row align-items-center">
                            <span class="fw-bold ms-1 fs-5">Brand name:{{$singleProduct->brand->name}}</span>
                        </div>
                        <h1 class="fs-1 ms-1 mt-3">Name: {{$singleProduct->name}}</h1>
                        <div class="ms-1"> <span>Details: {{$singleProduct->description}}</span> </div>
                        <div class="ms-1"> <span>Price: {{$singleProduct->price}} BDT</span> </div>
                    </div>

                    <div class="col-md-6">
                        <div class="product-image"> <img src="{{url('/uploads/'.$singleProduct->image)}}"> </div>
                    </div>
                </div>
                <div class="ms-1 mb-3"> <a class="btn btn-warning" href="{{route('add.to.cart', $singleProduct->id)}}"> <span>Add to Cart</span> <i class="ms-2 fa fa-long-arrow-right"></i> </a> </div>

            </div>
        </div>
    </div>
</div>
@include('frontend.partial.footer')