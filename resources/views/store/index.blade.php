@extends('layouts.app')
@section('content')
<section id="editors" class="container mt-5">
    <div class="header text-center">
        <h2>Welcome to our store</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia cum tempore sequi, vel</p>
    </div>
    <section class="trendng">
        <div class="container">
            <div class="books-card mt-5">
                <div class="row mt-5 m-auto mb-5">
                    <div class=" col-md-3 col-lg-2">
                        <form class="form">
                            <div class="form-group mb-4 mr-sm-2">
                                <select id="inputState" class="form-style" name="cat_id">
                                    <option selected >Select categories</option>
                                    @if ($cat->count() > 0)
                                        @foreach ($cat as $item)
                                            <option> <a href ="/publish/">{{$item->name}}</a></option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </form>
                        <div class="sidebar-box">
                            <h4 class="heading-sidebar">Categories</h4>
                            @if ($cat->count() > 0)
                               
                                    @foreach ($cat  as $item)
                                        <ul class="categories">
                                            <li>
                                                
                                                    <a href ="/publish/">{{$item->name}}</a>
                                                
                                            </li>
                                            <hr>
                                            
                                            
                                        </ul>
                                        @if($item->count() > 6) 
                                           @break
                                        @endif    
                                    @endforeach
                            @endif
                        
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h4>Most Popular</h4>
                        <div class="row">

                            @if($book->count() > 0)
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
                                                            <p class="price">₦{{$item->price}}</p>
                                                            <a href="#" class="buy btn">Buy <i class="fa fa-shopping-cart"></i></a>
                                                        @else
                                                            <p class="price">Free</p>
                                                    <a href="{{route('down',[$item->id])}}" class="buy btn">Download <i class="fa fa-download"></i></a>
                                                        @endif    
                                                        <div class="footer">
                                                        <button class="btn btn-simple" onclick="rotateCard(this)">
                                                            <i class="fa fa-mail-forward"></i> view details
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div> <!-- end front panel -->
                                            
                                                <div class="back mb-5">
                                                    
                                                    <div class="user">
                                                    <img class="img-circle" src="/storage/authors/{{$item->author->photo}}" height="50" width="60">
                                                    </div>
                                                    <div class="content text-center">
                                                        <div class="main">
                                                        <h6 class="m-b-10">{{$item->author->name}} </h6>
                                                        <a href="/authors/{{$item->author->id}}">View more</a>
                                                        
                                                        <hr> 
                                                        <h6 class="m-b-10">Cat: {{$item->category->name}}</h6>
                                                        <h6 class="m-b-10">Ava: {{$item->available}}</h6>
                                                        <a href="/publish/{{$item->id}}">About book</a>
                                                        <p class="text-muted m-t-15">{{str_limit($item->description, $limit = 30, $end = '...')}}</p>
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
                </div>
            </div>
        </div>
        <hr>
        <h4 class="trendng mt-4">Trending</h4>
           
    </section>
    
           
</section>
@endsection