@extends('layouts.app')
@section('content')
<section>
  <div class="container">
    <marquee behavior="" direction="right">Post article for publication Post article for publication</marquee>
    <div class="row">
      <div class="col-md-12">
        <div class="about">
          <div class="about-title">
            <h1 class="mt-5">Our History</h1>
          </div>
          <div class="row">
            <div class="col-md-4 p-3">
              <div class="about-logo">
                <img src="./img/logo.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-md-8 p-3">
              <p class="about-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi exercitationem
                officia dolorem necessitatibus iusto debitis illum possimus doloremque in consequuntur, similique
                corporis sint veniam sed doloribus dicta non accusamus ut eaque maxime tempore quidem! At modi ab
                numquam hic reiciendis facilis laudantium. Labore laudantium ea maiores cupiditate error doloremque
                totam ipsum vitae optio nulla cum sit debitis deserunt pariatur sed, animi quo libero neque. Culpa
                doloremque aliquid placeat, temporibus, aperiam quibusdam esse amet tenetur commodi blanditiis
                provident vero aspernatur tempore, maiores corporis quae. Esse eveniet quos saepe facilis recusandae
                eligendi quasi non, iste ratione nesciunt animi omnis dolorum odio amet.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="bg-color">
  <div class="container">
    <div class="row">
      <div class="col-md-6 m-auto">
        <div class="about-title text-center p-5">
          <h1>
            <i class="icon ion-md-globe"></i>
            Our Mission
            <i class="icon ion-md-globe"></i>
          </h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident delectus ipsam facere non quae sint, asperiores id perspiciatis sequi aut voluptatem, minima accusantium? Architecto consequuntur, impedit animi molestias possimus officia!</p>
        </div>
      </div>
      <div class="col-md-6 m-auto">
        <div class="about-title text-center p-5">
          <h1>
            <i class="icon ion-md-globe"></i>
            Our Vission
            <i class="icon ion-md-globe"></i>
          </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ratione quae natus aspernatur esse sit nesciunt qui est rerum sunt impedit similique, commodi ullam, iure quisquam magni, obcaecati pariatur tenetur!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="editors">
  <div class="container">
    <div class="header text-center mt-5">
      <h2>Meet Our Editors</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis mollitia cum tempore sequi, vel</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card user-card mt-5">
          <div class="card-block">
            <div class="user-image">
              <img src="img/team/Timothy-Onyebuchi-photo-266x300.jpg" class="img-radius" alt="User-Profile-Image">
            </div>
            <h6 class="f-w-600 m-t-25 m-b-10">prof Alessa Robert</h6>
            <p class="text-muted">Author | Male |</p>
            <hr>
            <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </p>
            <hr>
            <div class="row justify-content-center user-social-link">
              <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
              <div class="col-auto"><a href="#!"><i class="fa fa-linkedin text-linkedin"></i></a></div>
              <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card user-card mt-5">
          <div class="card-block">
            <div class="user-image">
              <img src="img/team/IMG-20181129-WA0012.jpg" class="img-radius" alt="User-Profile-Image">
            </div>
            <h6 class="f-w-600 m-t-25 m-b-10">prof Alessa Robert</h6>
            <p class="text-muted">Author | Male |</p>
            <hr>
            <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </p>
            <hr>
            <div class="row justify-content-center user-social-link">
              <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
              <div class="col-auto"><a href="#!"><i class="fa fa-linkedin text-linkedin"></i></a></div>
              <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card user-card mt-5">
          <div class="card-block">
            <div class="user-image">
              <img src="img/team/IMG-20181129-WA0003.jpg" class="img-radius" alt="User-Profile-Image">
            </div>
            <h6 class="f-w-600 m-t-25 m-b-10">prof Alessa Robert</h6>
            <p class="text-muted">Authors | Male |</p>
            <hr>
            <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </p>
            <hr>
            <div class="row justify-content-center user-social-link">
              <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
              <div class="col-auto"><a href="#!"><i class="fa fa-linkedin text-linkedin"></i></a></div>
              <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection