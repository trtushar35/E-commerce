@include('frontend.partial.header')
<!DOCTYPE html>
<html lang="en">

<head>
    @notifyCss
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        .heading_container.heading_center {
            text-align: center;
            margin-bottom: 40px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .col-sm-6.col-md-4.col-lg-4 {
            flex: 1 1 16.666%;
            /* Each column will take up 16.666% of the row, fitting 6 columns per row */
            max-width: 16.666%;
            box-sizing: border-box;
            padding: 10px;
        }

        .box {
            position: relative;
            overflow: hidden;
            background-color: #f8f8f8;
            border: 1px solid #e7e7e7;
            padding: 20px;
            transition: transform 0.3s;
        }

        .box:hover {
            transform: scale(1.05);
        }

        .img-box img {
            width: 100%;
            height: auto;
            display: block;
        }

        .detail-box {
            text-align: center;
            margin-top: 15px;
        }

        .option_container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .box:hover .option_container {
            opacity: 1;
        }

        .options {
            text-align: center;
        }

        .option1,
        .option2 {
            display: block;
            margin: 10px 0;
            padding: 10px 20px;
            background-color: #fff;
            color: #000;
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s, color 0.3s;
        }

        .option1:hover {
            background-color: #F7444E;
            color: #fff;
        }

        .option2:hover {
            background-color: #000;
            color: #fff;
        }

        @media (max-width: 1200px) {
            .col-sm-6.col-md-4.col-lg-4 {
                flex: 1 1 20%;
                /* Adjust for 5 columns per row on smaller screens */
                max-width: 20%;
            }
        }

        @media (max-width: 992px) {
            .col-sm-6.col-md-4.col-lg-4 {
                flex: 1 1 25%;
                /* Adjust for 4 columns per row on medium screens */
                max-width: 25%;
            }
        }

        @media (max-width: 768px) {
            .col-sm-6.col-md-4.col-lg-4 {
                flex: 1 1 33.333%;
                /* Adjust for 3 columns per row on small screens */
                max-width: 33.333%;
            }
        }

        @media (max-width: 576px) {
            .col-sm-6.col-md-4.col-lg-4 {
                flex: 1 1 50%;
                /* Adjust for 2 columns per row on extra small screens */
                max-width: 50%;
            }
        }

        @media (max-width: 400px) {
            .col-sm-6.col-md-4.col-lg-4 {
                flex: 1 1 100%;
                /* Adjust for 1 column per row on very small screens */
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    @include('notify::components.notify')
    <div class="heading_container heading_center">
        <h2>
            Our <span>products</span>
        </h2>
    </div>
    <div class="row">
        @foreach ($allProduct as $data)
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
                        <img src="{{url('/uploads/', $data->image)}}" alt="Product Image">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$data->name}}
                        </h5>
                        <h6>
                            {{$data->price}} BDT
                        </h6>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    @notifyJs
</body>

</html>
@include('frontend.partial.footer')