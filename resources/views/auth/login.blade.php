@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5">
    <div class="row">
      @include('partials/sidebar2')

      <div class="col-md-6 ">
        <div class="container p-5">
            <marquee behavior="" direction="left"><a href="#"><h4 class="article">Submit Article for publication Submit Article for publication</h4></a></marquee>
          <div class="form-card mt-5">
            <h4 class="text-center">SIGNIN</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-4 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon icon ion-md-mail"></i>
                    </div>
                  </div>
                  <input  type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  
                </div>
                <div class="input-group mb-4 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icon icon ion-md-key"></i>
                    </div>
                  </div>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
    
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
               
    
                <p>Not yet a member <a href="/register">Sign Up</a></p>
                <button type="submit" class="butn mb-2 btn-fill">Sign in</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
              </form>
          </div>
        </div>
      </div>

      @include('partials/sidebar2')
    </div>
  </div>

{{-- divide --}}
{{-- <div class="container mt-5">
    <marquee behavior="" direction="left">Post article for publication Post article for publication</marquee>
    <div class="row">
      <div class="col-md-6 m-auto">
        <div class="login-logo mt-5">
          <img src="./img/logo.png" alt="" class="img-fluid">
        </div>
        <div class="form-card mt-5">
          <h4>Login</h4>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-4 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="icon icon ion-md-mail"></i>
                </div>
              </div>
              <input  type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              
            </div>
            <div class="input-group mb-4 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="icon icon ion-md-key"></i>
                </div>
              </div>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
           

            <p>Not yet a member <a href="/register">Sign Up</a></p>
            <button type="submit" class="butn mb-2 btn-fill">Sign in</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div> --}}
@endsection
