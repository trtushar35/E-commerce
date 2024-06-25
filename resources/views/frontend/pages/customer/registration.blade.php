@include('frontend.partial.header')
<!DOCTYPE html>
<html lang="en">

<head>
  @notifyCss
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  @include('notify::components.notify')

  <section class=" text-center">
    <style>
      input.form-control {
        text-transform: none !important;
      }
    </style>
    <div class="card mb-3">
      <div class="row g-0 d-flex align-items-center">

        <div class="col-lg-8">
          <div class="card-body py-5 px-md-5">
            <form action="{{route('registration.store')}}" method="post">

              @csrf

              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Phone number</label>
                <input type="phone" class="form-control" id="exampleInputPhone1" name="phone" placeholder="Enter phone" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  @notifyJs
</body>

</html>
@include('frontend.partial.footer')