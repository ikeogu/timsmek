@extends('layouts.app')
@section('content')

<div class="container-fluid mt-5">
    <div class="row">
      @include('partials/sidebar')

      <div class="col-md-6">
        <section id="landingPage">
          <div class="container">
            <marquee behavior="" direction="left">Post article for publication Post article for publication</marquee>
            <div class="banner">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/banner.webp"  alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner1.jpg"  alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner3.jpg"  alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner.jpg"  alt="Fourth slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
           {{-- For the Books to display of the homepage --}}
           <div class="row">

              @if($book->count() > 2)
                  @foreach ($book as $item)
                      <div class="col-md-3 col-lg-3">
                          <div class="card-container manual-flip">
                              <div class="card">
                                  <div class="front mb-5">
                                      <div class="product">
                                          <img class="img-circle" src="/storage/cover_page/{{$item->cover_page}}" />
                                      </div>
                                      <div class="content text-center">
                                          <h6 class="f-w-600 m-b-10">{{$item->title}}</h6>
                                          <hr>
                                          <p class="price">{{$item->year_pub}}</p>
                                          @if($item->status === 1)
                                              <p class="price">#{{$item->price ?? ''}}</p>
                                              <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                          @else
                                              <p class="price">Free</p>
                                              <a href="#" class="buy btn">Download <i class="fa fa-download"></i></a>
                                          @endif    
                                          <div class="footer">
                                          <button class="btn btn-simple" onclick="rotateCard(this)">
                                              <i class="fa fa-mail-forward"></i> view details
                                          </button>
                                          </div>
                                      </div>
                                  </div> <!-- end front panel -->
                              
                                  <div class="back mb-5">
                                      @foreach ($book->authors as $a)
                                      <div class="user">
                                          <img class="img-circle" src="/storage/authors/{{$a->photo}}" />
                                      </div>
                                      <div class="content text-center">
                                          <div class="main">
                                          <h6 class="m-b-10"> {{$a->name}}</h6>
                                          <a href="/authors/{{$a->id}}">View more</a>
                                          @endforeach
                                          <hr> 
                                          <h6 class="m-b-10">Cat: {{$a->category()->name}}</h6>
                                          <h6 class="m-b-10">Ava: {{$a->available}}</h6>
                                          <p class="text-muted m-t-15">Description</p>
                                          <p class="text-muted m-t-15">{{$item->description}}</p>
                                      </div>
                                  </div>
                                  <div class="footer">
                                      <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                      <i class="fa fa-reply"></i> Back
                                      </button>
                                  </div>
                                  </div> <!-- end back panel -->
                              </div> <!-- end card -->
                          </div> <!-- end card-container -->
                      </div>
                  @endforeach
                  {{$book->links()}}
              @else    
          
              
              <div class="col-md-3 col-lg-3">
                  <div class="card-container manual-flip">
                      <div class="card">
                          <div class="front mb-5">
                              <div class="product">
                                  <img class="img-circle" src="img/book1.jpg" />
                              </div>
                              <div class="content text-center">
                                  <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                  <hr>
                                  <p class="price">$229.99</p>
                                  <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                  <div class="footer">
                                      <button class="btn btn-simple" onclick="rotateCard(this)">
                                      <i class="fa fa-mail-forward"></i> view details
                                      </button>
                                  </div>
                              </div>
                          </div> <!-- end front panel -->
                          <div class="back mb-5">
                              <div class="user">
                                  <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                              </div>
                              <div class="content text-center">
                                  <div class="main">
                                      <h6 class="m-b-10"> prof Alessa Robert</h6>
                                      <p class="text-muted">Active | Male </p>
                                      <!-- <hr> -->
                                      <p class="text-muted m-t-15">Edu Level: PHD</p>
                                      <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                  seat Lambo"</p>
                                  </div>
                              </div>    
                          </div>
                          <div class="footer">
                              <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                  <i class="fa fa-reply"></i> Back
                              </button>
                          </div>
                      </div> <!-- end back panel -->
                  </div> <!-- end card -->
              </div> <!-- end card-container -->
          
              <div class="col-md-3 col-lg-3">
                  <div class="card-container manual-flip">
                      <div class="card">
                          <div class="front mb-5">
                              <div class="product">
                                  <img class="img-circle" src="img/book1.jpg" />
                              </div>
                              <div class="content text-center">
                                  <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                  <hr>
                                  <p class="price">$229.99</p>
                                  <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                  <div class="footer">
                                      <button class="btn btn-simple" onclick="rotateCard(this)">
                                      <i class="fa fa-mail-forward"></i> view details
                                      </button>
                                  </div>
                              </div>
                          </div> <!-- end front panel -->
                          <div class="back mb-5">
                              <div class="user">
                                  <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                              </div>
                              <div class="content text-center">
                                  <div class="main">
                                      <h6 class="m-b-10"> prof Alessa Robert</h6>
                                      <p class="text-muted">Active | Male </p>
                                      <!-- <hr> -->
                                      <p class="text-muted m-t-15">Edu Level: PHD</p>
                                      <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                      seat Lambo"</p>
                                  </div>
                              </div>
                              <div class="footer">
                                  <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                      <i class="fa fa-reply"></i> Back
                                  </button>
                              </div>
                          </div> <!-- end back panel -->
                      </div> <!-- end card -->
                  </div> <!-- end card-container -->
              </div>
              <div class="col-md-3 col-lg-3">
                  <div class="card-container manual-flip">
                      <div class="card">
                          <div class="front mb-5">
                              <div class="product">
                                  <img class="img-circle" src="img/book1.jpg" />
                              </div>
                              <div class="content text-center">
                                  <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                  <hr>
                                  <p class="price">$229.99</p>
                                  <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                  <div class="footer">
                                      <button class="btn btn-simple" onclick="rotateCard(this)">
                                      <i class="fa fa-mail-forward"></i> view details
                                      </button>
                                  </div>
                              </div>
                          </div> <!-- end front panel -->
                          <div class="back mb-5">
                              <div class="user">
                                  <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                              </div>
                              <div class="content text-center">
                                  <div class="main">
                                      <h6 class="m-b-10"> prof Alessa Robert</h6>
                                      <p class="text-muted">Active | Male </p>
                                      <!-- <hr> -->
                                      <p class="text-muted m-t-15">Edu Level: PHD</p>
                                      <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                      seat Lambo"</p>
                                  </div>
                              </div>
                              <div class="footer">
                                  <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                      <i class="fa fa-reply"></i> Back
                                  </button>
                              </div>
                          </div> <!-- end back panel -->
                      </div> <!-- end card -->
                  </div> <!-- end card-container -->
              </div>
              <div class="col-md-3 col-lg-3">
                  <div class="card-container manual-flip">
                      <div class="card">
                          <div class="front mb-5">
                              <div class="product">
                                  <img class="img-circle" src="img/book1.jpg" />
                              </div>
                              <div class="content text-center">
                                  <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                  <hr>
                                  <p class="price">$229.99</p>
                                  <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                  <div class="footer">
                                      <button class="btn btn-simple" onclick="rotateCard(this)">
                                      <i class="fa fa-mail-forward"></i> view details
                                      </button>
                                  </div>
                              </div>
                          </div> <!-- end front panel -->
                          <div class="back mb-5">
                              <div class="user">
                                  <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                              </div>
                              <div class="content text-center">
                                  <div class="main">
                                      <h6 class="m-b-10"> prof Alessa Robert</h6>
                                      <p class="text-muted">Active | Male </p>
                                      <!-- <hr> -->
                                      <p class="text-muted m-t-15">Edu Level: PHD</p>
                                      <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                      seat Lambo"</p>
                                  </div>
                              </div>
                              <div class="footer">
                                  <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                      <i class="fa fa-reply"></i> Back
                                  </button>
                              </div>
                          </div> <!-- end back panel -->
                      </div> <!-- end card -->
                  </div> <!-- end card-container -->
              </div>
              <div class="col-md-3 col-lg-3">
                  <div class="card-container manual-flip">
                      <div class="card">
                          <div class="front mb-5">
                              <div class="product">
                              <img class="img-circle" src="img/book1.jpg" />
                              </div>
                              <div class="content text-center">
                              <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                              <hr>
                              <p class="price">$229.99</p>
                              <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                              <div class="footer">
                                  <button class="btn btn-simple" onclick="rotateCard(this)">
                                  <i class="fa fa-mail-forward"></i> view details
                                  </button>
                              </div>
                              </div>
                          </div> <!-- end front panel -->
                          <div class="back mb-5">
                              <div class="user">
                                  <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                              </div>
                              <div class="content text-center">
                                  <div class="main">
                                      <h6 class="m-b-10"> prof Alessa Robert</h6>
                                      <p class="text-muted">Active | Male </p>
                                      <!-- <hr> -->
                                      <p class="text-muted m-t-15">Edu Level: PHD</p>
                                      <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                      seat Lambo"</p>
                                  </div>
                              </div>
                              <div class="footer">
                                  <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                      <i class="fa fa-reply"></i> Back
                                  </button>
                              </div>
                          </div> <!-- end back panel -->
                      </div> <!-- end card -->
                  </div> <!-- end card-container -->
              </div>
              <div class="col-md-3 col-lg-3">
                  <div class="card-container manual-flip">
                      <div class="card">
                          <div class="front mb-5">
                              <div class="product">
                                  <img class="img-circle" src="img/book1.jpg" />
                              </div>
                              <div class="content text-center">
                                  <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                  <hr>
                                  <p class="price">$229.99</p>
                                  <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                  <div class="footer">
                                      <button class="btn btn-simple" onclick="rotateCard(this)">
                                      <i class="fa fa-mail-forward"></i> view details
                                      </button>
                                  </div>
                              </div>
                          </div> <!-- end front panel -->
                          <div class="back mb-5">
                              <div class="user">
                                  <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                              </div>
                              <div class="content text-center">
                                  <div class="main">
                                      <h6 class="m-b-10"> prof Alessa Robert</h6>
                                      <p class="text-muted">Active | Male </p>
                                      <!-- <hr> -->
                                      <p class="text-muted m-t-15">Edu Level: PHD</p>
                                      <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                      seat Lambo"</p>
                                  </div>
                              </div>
                              <div class="footer">
                                  <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                      <i class="fa fa-reply"></i> Back
                                  </button>
                              </div>
                          </div> <!-- end back panel -->
                      </div> <!-- end card -->
                  </div> <!-- end card-container -->
              </div>
              <div class="col-md-3 col-lg-3">
              <div class="card-container manual-flip">
                  <div class="card">
                          <div class="front mb-5">
                              <div class="product">
                              <img class="img-circle" src="img/book1.jpg" />
                              </div>
                              <div class="content text-center">
                              <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                              <hr>
                              <p class="price">$229.99</p>
                              <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                              <div class="footer">
                                  <button class="btn btn-simple" onclick="rotateCard(this)">
                                  <i class="fa fa-mail-forward"></i> view details
                                  </button>
                              </div>
                              </div>
                          </div> <!-- end front panel -->
                          <div class="back mb-5">
                              <div class="user">
                                  <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                              </div>
                              <div class="content text-center">
                                  <div class="main">
                                      <h6 class="m-b-10"> prof Alessa Robert</h6>
                                      <p class="text-muted">Active | Male </p>
                                      <!-- <hr> -->
                                      <p class="text-muted m-t-15">Edu Level: PHD</p>
                                      <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                      seat Lambo"</p>
                                  </div>
                              </div>
                              <div class="footer">
                                  <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                      <i class="fa fa-reply"></i> Back
                                  </button>
                              </div>
                          </div> <!-- end back panel -->
                      </div> <!-- end card -->
                  </div> <!-- end card-container -->
              </div>
              <div class="col-md-3 col-lg-3">
                  <div class="card-container manual-flip">
                      <div class="card">
                          <div class="front mb-5">
                              <div class="product">
                                  <img class="img-circle" src="img/book1.jpg" />
                              </div>
                              <div class="content text-center">
                                  <h6 class="f-w-600 m-b-10">MySQl Database</h6>
                                  <hr>
                                  <p class="price">$229.99</p>
                                  <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                  <div class="footer">
                                      <button class="btn btn-simple" onclick="rotateCard(this)">
                                      <i class="fa fa-mail-forward"></i> view details
                                      </button>
                                  </div>
                              </div>
                          </div> <!-- end front panel -->
                          <div class="back mb-5">
                              <div class="user">
                                  <img class="img-circle" src="img/authors/rotating_card_profile2.png" />
                              </div>
                              <div class="content text-center">
                                  <div class="main">
                                      <h6 class="m-b-10"> prof Alessa Robert</h6>
                                      <p class="text-muted">Active | Male </p>
                                      <!-- <hr> -->
                                      <p class="text-muted m-t-15">Edu Level: PHD</p>
                                      <p class="text-muted m-t-15">"Lamborghini Mercy Your chick she so thirsty I'm in that two
                                      seat Lambo"</p>
                                  </div>
                              </div>
                              <div class="footer">
                                  <button class="btn price p-2 mb-2" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                      <i class="fa fa-reply"></i> Back
                                  </button>
                              </div>
                          </div> <!-- end back panel -->
                      </div> <!-- end card -->
                  </div> <!-- end card-container -->
              </div>
              @endif
          </div>

          </div>
        </section>

        <section id="recent-blog-post">
          <div class="header text-center">
            <h2>Our Blog</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia cum tempore sequi, vel</p>
          </div>
          <div class="container">
              <div class="row">
                  @if($blog->count() > 0)
                      @foreach ($blog  as $item)
                          <div class="col-md-4">
                              <a href="/blog/{{$item->id}}" class="blog-card mt-5">
                                <div class="card-img">
                                <img src="/storage/blog_post/{{$item->id}}" alt="" class="img-fluid">
                                </div>
                                <div class="blog-title">
                                  <h3 class="heading">{{$item->caption}}</h3>
                                  <date>{{$item->created_at->diffForHumans()}} {{$item->writter}}<i class="icon ion-md-chatbubbles"></i> </date>
                                  <p>{{str_limit($item->body, $limit = 20, $end = '...') }}</p>
                                </div>
                              </a>
                            </div>
                      @endforeach
                      {{$blog->links()}}
                  @else
                      <div class="col-md-8">
                      <h3>We Don't have recent Post on Our Blog.</h3>
                      </div>
                  @endif
              </div>
          </div>
        </section>
      </div>
      @include('partials/sidebar2')
    </div>
  </div>
@endsection