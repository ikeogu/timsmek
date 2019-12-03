@extends('layouts.app')
@section('content')
<div class="container">
    <section id="section-a" class="mt-5">
      <h2 class="cart-header">Cart({{$totalQty}} items)</h2>

      <div class="card mt-3 p-0">
        <div class="container">
          <div class="row">
            <div class="col-md-4 ">
              <h5 class="item-title mb-4"> Cart Items </h5>
              <div class="item-img d-flex mb-4">
                  @if(Session::has('cart'))
                    @foreach($products as  $product)
                    <img src="/storage/cover_page/{{$product['item']['cover_page']}}" alt="..." width="auto" height="150px">
                  <div class="details pl-4">
                    <h4 class="book-title">{{$product['item']['title']}}</h4>
                    <h5 class="author mb-4">{{$product['item']['author']['name']}}</h5>
                  <a href="{{route('removeItem',['id'=>$product['item']['id']])}}" class="btn btn-outline-danger">Remove</a>
                  </div>
              </div>
            </div>
            <div class="col-md-2">
              <h5 class="item-title mb-4">Quantity</h5>
            <input type="number" name="qty" class="form-control" value="{{$product['qty']}}" readonly>
            {{-- <div class="col-md-3">
              <h5 class="item-title">Unit Price</h5>
              <div class="price-container mt-5">
                <h4 class="item-prices">#25.000</h4>
              </div>
            </div> --}}
            </div>
            <div class="col-md-3">
              <h5 class="item-title">Unit Price</h5>
              <div class="price-container mt-5">
              <h4 class="item-prices text-success">{{$currency.''.number_format($product['item']['price']/100,2)}}</h4>
              </div>
              @endforeach

              <div class="total d-flex mt-5 pl-2">
                <h4 class="mr-4"><b>Total</b></h4>
              <h4 class="text-danger"><b>{{$currency.''.number_format($totalPrice,2)}}</b></h4>
              </div>
              @endif
              <p class="muted">shipping fee not included yet</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="section-b">
        <div class="checkout">
            <div class="row text-center">
              <div class="col-md-3">
              <a class="btn btn-outline-info btn-fill" href="{{route('publish.index')}}">CONTINUE SHOPPING</a>
              </div>
              <div class="col-md-3">
                  <a class="btn btn-outline-danger btn-fill" href="{{route('emptyCart')}}">EMPTY CART</a>
                </div>
              <div class="col-md-6">
              <a class="btn btn-outline-primary btn-fill" href="{{route('checkout')}}">PROCEED CHECKOUT</a>
              </div>
            </div>
          </div>
    </section>
  </div>
@endsection