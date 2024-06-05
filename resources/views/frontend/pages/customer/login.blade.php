@include('frontend.partial.header')
<style>
  input.form-control{
    text-transform: none !important;
  }
</style>
<section class=" text-center text-lg-start">
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">

      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">
          <form action="{{route('customer.loginPost')}}" method="post">

            @csrf

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
</section>
@include('frontend.partial.footer')