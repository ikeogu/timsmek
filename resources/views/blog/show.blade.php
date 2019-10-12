@extends('layouts.app')
@section('content')
<div class="container mt-5">
        <marquee behavior="" direction="left">Post article for publication  Post article for publication</marquee>
      <div class="row">
        <div class="col-md-8">
          <div class="blog-read mt-5">
            <div class="blog-title">
              <h2>{{$blog->caption}}</h2>
            </div>
            <div class="blog-body">
              <p class="blog-content mb-3">{{str_limit($blog->body, $limit = 40, $end = '..')}}</p>
              <img src="/storage/blog_post/{{$blog->id}}" alt="{{$blog->caption}}" class="img-fluid">
              <p class="blog-content mt-5">{{$blog->body}}</p>

              
            </div>
            <div class="about-author my-5 d-flex bg-light p-5">
              <div class="author-img mr-5">
                <img src="./img/person_1.jpg" alt="" class="img-fluid" width="200">
              </div>
              <div class="decs">
                <h4>{{$blog->writter}}</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum laudantium doloremque tenetur
                  blanditiis
                  minus architecto, earum dolorum recusandae sint ipsam?</p>
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="sidebar-box mt-5">
            <form action="" class="search-form">
              <div class="input-group mb-2 mr-sm-2">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="icon ion-md-search"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="sidebar-box">
            <h4 class="heading-sidebar">Categories</h4>
            <ul class="categories">
              <li>
                <a href="#">
                  Researchers
                  .....<span>(12)</span>
                </a>
              </li>
              <hr>
              <li>
                <a href="#">
                  Poem
                  ......<span>(19)</span>
                </a>
              </li>
              <hr>
              <li>
                <a href="#">
                  Agriculture
                  ......<span>(32)</span>
                </a>
              </li>
              <hr>
              <li>
                <a href="#">
                  Science
                  ......<span>(92)</span>
                </a>
              </li>
              <hr>
              <li>
                <a href="#">
                  Medical
                  ......<span>(10)</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="sidebar-box">
            <h4 class="heading-sidebar">Recent Blog</h4>
            <div class="d-flex mt-2">
              <a href="#" class="blog-img mr-4">
                <img src="./img/blogImg.jpg" alt="" class="img-fluid">
              </a>
              <div class="text">
                <h4 class="heading">
                  <a href="#">Why Lead Generation is Key for Business Growth</a>
                </h4>
                <div class="meta">
                  <div>
                    <i class="icon ion-md-calendar"></i>
                    <span>Oct, 14, 2019</span>
                  </div>
                  <div>
                    <i class="icon ion-md-person"></i>
                    <span>Admin</span>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="d-flex mt-2">
              <a href="#" class="blog-img mr-4">
                <img src="./img/blogImg.jpg" alt="" class="img-fluid">
              </a>
              <div class="text">
                <h4 class="heading">
                  <a href="#">Why Lead Generation is Key for Business Growth</a>
                </h4>
                <div class="meta">
                  <div>
                    <i class="icon ion-md-calendar"></i>
                    <span>Oct, 14, 2019</span>
                  </div>
                  <div>
                    <i class="icon ion-md-person"></i>
                    <span>Admin</span>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="d-flex mt-2">
              <a href="#" class="blog-img mr-4">
                <img src="./img/blogImg.jpg" alt="" class="img-fluid">
              </a>
              <div class="text">
                <h4 class="heading">
                  <a href="#">Why Lead Generation is Key for Business Growth</a>
                </h4>
                <div class="meta">
                  <div>
                    <i class="icon ion-md-calendar"></i>
                    <span>Oct, 14, 2019</span>
                  </div>
                  <div>
                    <i class="icon ion-md-person"></i>
                    <span>Admin</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection