@extends('frontend.master')
@section('content')

<div class="heading_container heading_center">
    <h2>
        Our <span>products</span>
    </h2>
</div>
<form class="form-inline d-flex justify-content-center" action="{{ route('search.product') }}" method="GET">
    <input class="form-control mr-sm-2" type="search" placeholder="Search by product name" name="search" style="width: 350px; height: 45px; font-size: 16px;">
    <button class="btn my-2 my-sm-0 nav_search-btn" type="submit" style="height: 45px;">
        <i class="fa fa-search" aria-hidden="true"></i>
    </button>
</form>


<div class="container">
    <div class="row">
        @foreach ($products as $data)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box" style="border: 1px solid #ddd; padding: 10px; text-align: center; position: relative; overflow: hidden; height: 100%;">
                <a href="{{route('single.product.view', $data->id)}}">
                    <div class="option_container" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: none; align-items: center; justify-content: center; background: rgba(0, 0, 0, 0.5);">
                        <div class="options">
                            <a href="{{route('add.to.cart', $data->id)}}" class="option1" style="display: block; background-color: #F7444E; color: white; padding: 10px 20px; margin: 5px; border-radius: 50px; text-decoration: none;">
                                Add to cart
                            </a>
                            <a href="{{route('single.product.view', $data->id)}}" class="option2" style="display: block; background-color: #333; color: white; padding: 10px 20px; margin: 5px; border-radius: 50px; text-decoration: none;">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="img-box" style="width: 100%; height: 150px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                        <img src="{{url('/uploads/', $data->image)}}" alt="Product Image" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                    </div>
                    <div style="margin-top: 10px;">
                        <div>
                            <strong>Name: {{$data->name}}</strong>
                        </div>
                        <div>
                            <strong>Price: {{$data->price}}.bdt</strong>
                        </div>
                    </div>

                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="btn-box">
    <a href="{{route('all.product')}}">
        View All products
    </a>
</div>
<script>

</script>

<script>
    // Ensure options are displayed on hover
    document.querySelectorAll('.box').forEach(box => {
        box.addEventListener('mouseover', function() {
            this.querySelector('.option_container').style.display = 'flex';
        });
        box.addEventListener('mouseout', function() {
            this.querySelector('.option_container').style.display = 'none';
        });
    });

    //search
    document.getElementById("searchBtn").addEventListener("click", function() {
        var searchInput = document.getElementById("searchInput");
        if (searchInput.style.display === "none") {
            searchInput.style.display = "block";
        } else {
            searchInput.style.display = "none";
        }
    });
</script>

@endsection