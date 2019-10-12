@extends('layouts.app')
@section('content')
<section id="contact">
    <div class="container">
      <section id="address">
        <div class="header text-center mt-5">
          <h2>Contact</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia cum tempore sequi, vel</p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="address-1">
              <i class="fa fa-street-view"></i>
              <h4>Address</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, minima?</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="address-2">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, minima?</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="address-1">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, minima?</p>
            </div>
          </div>
        </div>
      </section>
      <section id="form" class="mt-5 mx-5 text-center">
        <form action="">
          <div class="form-row">
            <div class="col-md-6">
              <input type="text" class="form-control mt-4" placeholder="Full name">
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control mt-4" placeholder="Email">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control mt-4" placeholder="Subject">
            </div>
          </div>
          <div class="form-row">
            <textarea class="form-control mt-4" placeholder="Message" rows="5"></textarea>
          </div>
          <button type="submit" class="butn-outline my-4">Submit article</button>
        </form>
      </section>
    </div>
  </section>
@endsection