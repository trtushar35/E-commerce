<!DOCTYPE html>
<html lang="en">

<head>
   @notifyCss
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>eCommerce</title>
   <link rel="shortcut icon" href="{{'/frontend'}}/assets/images/favicon.png" type="">
   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" type="text/css" href="{{'/frontend'}}/assets/css/bootstrap.css" />
   <!-- Bootstrap CDN -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
   <!-- Bootstrap Icons -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="{{'/frontend'}}/assets/css/style.css" rel="stylesheet" />
   <!-- Responsive style -->
   <link href="{{'/frontend'}}/assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
   <header class="header_section">
      <div class="container">
         <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{route('frontend.home')}}"><img width="250" src="{{'/frontend'}}/assets/images/logo.png" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item active">
                     <a class="nav-link" href="{{route('frontend.home')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="testimonial.html">Testimonial</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="product.html">Products</a>
                  </li>

                  @guest('customerGuard')
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('customer.login')}}">Login</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('customer.registration')}}">Registration</a>
                  </li>
                  @endguest
                  @auth('customerGuard')
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Profile <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="{{route('customer.profile')}}">Profile</a></li>
                        <li><a href="{{route('order.list')}}">Order List</a></li>
                        <li><a href="{{route('customer.logout')}}">Logout</a></li>
                     </ul>
                  </li>
                  @endauth
                  <li class="nav-item">
                     <a class="nav-link" href="{{route('cart.view')}}">
                        <span class="mr-2">Cart</span><i class="bi bi-cart-fill"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </header>

   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

   <!-- Bootstrap JS and dependencies -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   <script src="{{'/frontend'}}/assets/js/jquery-3.4.1.min.js"></script>
   <!-- Popper JS -->
   <script src="{{'/frontend'}}/assets/js/popper.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="{{'/frontend'}}/assets/js/bootstrap.js"></script>
   <!-- Custom JS -->
   <script src="{{'/frontend'}}/assets/js/custom.js"></script>
   @notifyJs
</body>

</html>