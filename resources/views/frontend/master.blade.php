<!DOCTYPE html>
<html>

<head>
   @notifyCss
   <!-- Basic -->
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <!-- Site Metas -->
   <meta name="keywords" content="" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <link rel="shortcut icon" href="{{'/frontend'}}/assets/images/favicon.png" type="">
   <title>eCommerce</title>
   <!-- bootstrap cdn -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!-- bootstrap core css -->
   <link rel="stylesheet" type="text/css" href="{{'/frontend'}}/assets/css/bootstrap.css" />
   <!-- font awesome style -->
   <link href="{{'/frontend'}}/assets/css/font-awesome.min.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="{{'/frontend'}}/assets/css/style.css" rel="stylesheet" />
   <!-- responsive style -->
   <link href="{{'/frontend'}}/assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
   <div class="hero_area">
      <!-- header section strats -->
      @include('frontend.partial.header')
      <!-- end header section -->
      <!-- slider section -->
      @include('frontend.partial.slider')
      <!-- end slider section -->
   </div>
   <!-- why section -->

   <!-- end why section -->

   <!-- arrival section -->

   <!-- end arrival section -->

   <!-- product section -->
   <section class="product_section layout_padding">
      <div class="container">
         @include('notify::components.notify')
         @yield('content')
      </div>
   </section>
   <!-- end product section -->

   <!-- subscribe section -->
   @include('frontend.partial.subscription')
   <!-- end subscribe section -->

   <!-- client section -->
   @include('frontend.partial.comments')
   <!-- end client section -->
   <!-- footer start -->
   @include('frontend.partial.footer')
   <!-- footer end -->

   <!-- js cdn bootstrap -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


   <!-- jQery -->
   <script src="{{'/frontend'}}/assets/js/jquery-3.4.1.min.js"></script>
   <!-- popper js -->
   <script src="{{'/frontend'}}/assets/js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="{{'/frontend'}}/assets/js/bootstrap.js"></script>
   <!-- custom js -->
   <script src="{{'/frontend'}}/assets/js/custom.js"></script>

   <script>
      (function(window, document) {
         var loader = function() {
            var script = document.createElement("script"),
               tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
         };

         window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
      })(window, document);
   </script>

   @notifyJs
</body>

</html>