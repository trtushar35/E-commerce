<!DOCTYPE html>
<html lang="en">

<head>

    @notifyCss
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{'/frontend'}}/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{'/frontend'}}/assets/css/font-awesome.css">

    <link rel="stylesheet" href="{{'/frontend'}}/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="{{'/frontend'}}/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="{{'/frontend'}}/assets/css/lightbox.css">
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    @include('frontend.partial.header')
    
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    @include('notify::components.notify')
    @yield('content')
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    
    <!-- ***** Subscribe Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    @include('frontend.partial.footer')

    <!-- jQuery -->
    <script src="{{'/frontend'}}/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{'/frontend'}}/assets/js/popper.js"></script>
    <script src="{{'/frontend'}}/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="{{'/frontend'}}/assets/js/owl-carousel.js"></script>
    <script src="{{'/frontend'}}/assets/js/accordions.js"></script>
    <script src="{{'/frontend'}}/assets/js/datepicker.js"></script>
    <script src="{{'/frontend'}}/assets/js/scrollreveal.min.js"></script>
    <script src="{{'/frontend'}}/assets/js/waypoints.min.js"></script>
    <script src="{{'/frontend'}}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{'/frontend'}}/assets/js/imgfix.min.js"></script>
    <script src="{{'/frontend'}}/assets/js/slick.js"></script>
    <script src="{{'/frontend'}}/assets/js/lightbox.js"></script>
    <script src="{{'/frontend'}}/assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="{{'/frontend'}}/assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

</body>

</html>