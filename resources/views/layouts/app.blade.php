<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
        
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet"  href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <meta name="theme-color" content="#fafafa">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

<head>
  
  

<body>
  <div >
        
		<header>
			<div id="top-header">
				<div class="branding">
					<img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid" width="400">
				</div>
				<div id="info">
					<p><i class="icon ion-logo-whatsapp"></i> <i class="icon ion-md-call"></i></i> <span
							class="phone-num">0703-455-9895</span> <span class="mail"> <i
								class="icon ion-md-mail"></i>mails@timeks.com</span></p>
					<p>@guest<a href="/register">Sign Up</a> | <a href="/login">Login</a>  @else {{ Auth::user()->name }} 

						|<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
									  document.getElementById('logout-form').submit();">
						 {{ __('Logout') }}
					 	</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
						@endguest | <a href="#"><i
								class="icon ion-logo-facebook"></i></a> <a href="#"><i class="icon ion-logo-instagram"></i></a> <a
							href="#"><i class="icon ion-logo-twitter"></i></a> </p>
					<form action="{{route('search')}}" method="POST">
						@csrf
						<input type="text" name="search" placeholder="Search" required>
						<input type="submit" value="search">
					</form>
				</div>
			</div>
			<nav>
				<div id="toggler" class="small">
					<div></div>
					<div></div>
					<div></div>
				</div>
				<ul class="small-side" id="myNav">
					<li class="list"><a href="/" class="active">Home</a></li>
					<li class="list"><a href="/about">About us <i class="fa fa-chevron-down"></i></a>
					</li>
					<li class="list"><a href="{{route('authors.index')}}">Our Authors</a></li>
					
					<li class="list"><a href="{{route('publish.index')}}">Store</a></li>
					<li class="list"><a href="{{route('service.index')}}">Services</a></li>
					<li class="list"><a href="{{route('blog.index')}}">Blog</a></li>
					<li class="list"><a href="{{route('article.create')}}">Submit article</a></li>
				<li  class="list"><a href="{{route('contact.create')}}"></i> Contact us</a></li> 
				</ul>
				<ul class="small-ul">
					<li class="small"><a href="/register">Sign up</a></li>
					<li class="small"><a href="/login">Login</a></li>
				</ul>
			</nav>
		</header>
		<main class="py-4">
				@yield('content')
		</main>
		
		<footer>
			<section id="quick-links">
			  <div class="container">
					<div class="row ">
						<div class="col-md-4 m-0">
							<div class="time-logo">
								<img src="{{asset('img/logo.png')}}" alt="" class="img-fluid" width="300">
							</div>
							<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto id magnam fugit officia. Nam qui odit vero
								quia pariatur enim dolore voluptatem quibusdam ducimus dignissimos ex ea, eveniet consectetur repellendus.
							</p>
						</div>
						<div class="col-md-4 m-0">
							<div class="links ml-5">
								<h4>Useful Links</h4>
								<ul class="nav-link">
								<li><a href="/">Home</a></li>
								<li><a href="/about">About</a></li>
								<li ><a href="{{route('publish.index')}}">Store</a></li>
								<li ><a href="{{route('service.index')}}">Services</a></li>
								<li ><a href="{{route('blog.index')}}">Blog</a></li>
								<li ><a href="{{route('article.create')}}">Submit article</a></li>
								<li ><a href="{{route('contact.create')}}"></i> Contact us</a></li> 
								</ul>
							</div>
						</div>
						<div class="col-md-4 m-0">
							<div class="contact-footer pl-5">
								<h4>Contact </h4> 
								<p>Address :</p>
								<p>Email :</p>mails@timeks.com
								<p>Phone:</p> 0703-455-9895
								<p>Tel:</p>0703-455-9895
				
								<div class="row justify-content-right mt-4 user-social-link">
								<div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
								<div class="col-auto"><a href="#!"><i class="fa fa-linkedin text-linkedin"></i></a></div>
								<div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<p  class="justify-content-center">&copy; Copyright, Timsek, All Right Reservered</p>
					<p>Design by  <a href="#">Kaiyleb_dev</a> &&  <a href="https://emmanuel-chidera.netlify.com">Emmanuel</a></p> 
			  </div>
			</section>
			<section>
			 
			  
			</section>
		</footer>
		
	
	
		<script src="{{asset('js/vendor/modernizr-3.7.1.min.js')}}"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"></script>
		<script src="{{asset('js/main.js')}}"></script>
	
		<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
		<script>
			window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
			ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
		</script>
		<script src="https://www.google-analytics.com/analytics.js" async></script>
		<script>
			window.onclick = function (event) {
				if (!event.target.matches('view')) {
					var dropdowns = document.getElementsByClassName("overlay");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
						var openDropdown = dropdowns[i];
						if (openDropdown.classList.contains('show')) {
							openDropdown.classList.remove('show');
						}
					}
				}
			}

			var btnContainer = document.getElementById("myNav");

			// Get all buttons with class="btn" inside the container
			var btns = btnContainer.getElementsByClassName("list");
			
			// Loop through the buttons and add the active class to the current/clicked button
			for (var i = 0; i < btns.length; i+=1) {
				btns[i].addEventListener("click", function() {
					var current = document.getElementsByClassName("active");
					
					current[0].className = current[0].className.replace(" active", "");
					this.className += " active";
				});
			}
		</script>
		<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'a6f969f6-486d-4233-9337-660fc6f6310a', f: true }); done = true; } }; })();</script>
	
</div>
</body>
</html>
