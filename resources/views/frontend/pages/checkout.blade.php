@include('frontend.partial.header')

<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('place.order')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" value="{{auth('customerGuard')->user()->name}}" type="text" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input name="address" value="{{auth('customerGuard')->user()->address}}" type="text" class="form-control" id="address" placeholder="Enter your address">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input name="phone" value="{{auth('customerGuard')->user()->phone}}" type="phone" class="form-control" id="phone" placeholder="01700000000">
                </div>
                @foreach(session()->get('vcart') as $item)
                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" value="{{$item['price']}}.Bdt" type="text" class="form-control" id="price" readonly>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input name="quantity" value="{{$item['quantity']}}" type="number" class="form-control" id="quantity" readonly>
                </div>
                <div class="form-group">
                    <label for="subtotal">Subtotal</label>
                    <input name="subtotal" value="{{request('total')}}.Bdt" type="text" class="form-control" id="subtotal" readonly>
                </div>
                @endforeach
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Payment Type</label>
                    <select name="payment_type" class="form-control" id="exampleFormControlSelect2">
                        <option value="cod">Cod</option>
                        <option value="ssl">SSL</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

@include('frontend.partial.footer')