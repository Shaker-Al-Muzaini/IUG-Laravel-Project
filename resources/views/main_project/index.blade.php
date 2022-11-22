@extends('layouts.main_project')
@section('pagM')
	<div class="preloader">
		<img src="{{asset('assets_minProject/images/preloader.gif')}}" alt="Preloader Image">
	</div>

	<div class="top_to">
		<i class="fas fa-chevron-up"></i>
	</div>

	<!--================ Back to Top HTML End ======================-->

	<!--================ Header Part HTML Start ======================-->

	<header>
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-3">
						<p>Welcome to Bella</p>
					</div>
					<div class="col-lg-8 text-right col-md-8 col-sm-9">
						<p>Open Hours: 09:00 A.M to 08:00 P.M <span>Contact: <a href="tel:1-123-456-7890">+880 1234 567
									890</a></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="navigation">
			<div class="container">
				<div class="row">
					<div class="col-12 p-0">
						<nav class="navbar navbar-expand-md navbar-light p-0">
							<a class="navbar-brand" href="index.html">
								<img src="{{asset('assets_minProject/images/logo.png')}}" class="img-fluid" alt="Logo">
							</a>
							<ul class="add-to-cart small-cart">
								<li>
									<a href="cart.html"><img src="{{asset('assets_minProject/images/cart.png')}}" alt="Cart Image"></a>
								</li>
							</ul>
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="fas fa-bars"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto ml-auto">
									<li class="nav-item head-dropdown">
										<a class="nav-link active">Home <i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="index.html">Home One</a></li>
											<li><a href="index2.html">Home Two</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="about.html">About us</a>
									</li>
									<li class="nav-item head-dropdown">
										<a class="nav-link">Pages <i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="product-grid.html">Product Grid</a></li>
											<li><a href="product-gridside.html">Product Grid Sidebar</a></li>
											<li><a href="product_listview.blade.php">Product List View</a></li>
											<li><a href="product-details.blade.php">Product Details</a></li>
											<li><a href="shopping-cart.html">Shopping Cart</a></li>
											<li><a href="cart.html">Checkout</a></li>
											<li><a href="gallery.html">Gallery</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
									</li>
									<li class="nav-item">
                                        <form action="{{Route('frontend.search')}}" method="post">
                                            @csrf
                                        <div class="input-group">
                                            <div class="form-outline">
                                                <input type="search" name="q" class="form-control" />
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-search sm:flex-1"></i>
                                            </button>
                                        </div>
                                        </form>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>



	<section id="banner">
		<div class="banner-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 p-0 text-center wh-btn">
						<h1>Bella</h1>
						<h3>Spa &amp; Theraphy Center</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							<br> tempor incidt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							<br> <span>quis nostrud exercitation ullamco laboris nisi ut aliquip.</span></p>
						<a href="#" class="abs-reflect">Book Your Seat</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="bellas-service">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="content">
						<img src="{{asset('assets_minProject/images/service-icon-1.png')}}" class="img-fluid" alt="Service Icon">
						<h4>Stone Theraphy<br> 2200 Persons</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="content">
						<img src="{{asset('assets_minProject/images/service-icon-2.png')}}" class="img-fluid" alt="Service Icon">
						<h4>Beauty Tips<br>1500 Persons</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="content">
						<img src="{{asset('assets_minProject/images/service-icon-3.png')}}" class="img-fluid" alt="Service Icon">
						<h4>Hot Water Spa<br> 2700 Persons</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="content">
						<img src="{{asset('assets_minProject/images/service-icon-4.png')}}" class="img-fluid" alt="Service Icon">
						<h4>Back Message<br> 2700 Persons</h4>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Stores</h2>
				</div>
                @foreach($Stores as $Store)
				<div class="col-lg-3 col-sm-6 col-md-3 px-md-0 px-sm-0">
					<div class="gallery-items">
						<a class="venobox" data-gall="gallery01" href="">
							<img src="{{asset('/uploads/stores_image/'.$Store->stores_image)}}" class="img-fluid" alt="Gallery Image">
							<div class="gallery-overlay wh-btn">
								<span class="abs-reflect"><i class="fas fa-search"></i></span>
								<h3>{{$Store->name}}</h3>
							</div>
						</a>
					</div>
				</div>
                @endforeach
				<div class="col-lg-12 text-center ph-btn">
					<a href="#" class="abs-reflect">Browse All</a>
				</div>
			</div>
		</div>
	</section>

	<!--================ Gallery Part HTML End =============-->

	<!--================ Join Member Part HTML Start =============-->

	<section id="join-member">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-0 ph-btn text-center">
					<h4>Want to get Our Services?</h4>
					<h3>Just Become Our Member Now</h3>
					<a href="#" class="abs-reflect">Join Now</a>
				</div>
			</div>
		</div>
	</section>

	<!--================ Join Member Part HTML End =============-->

	<!--================ Product Part HTML Start =============-->

	<section id="product">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Bella’s Products</h2>
				</div>

				<div class="col-12">
                    @if(session()->has('s'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('s') }}</strong>
                        </div>
                    @endif
                    @if(session()->has('ss'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('ss') }}</strong>
                        </div>
                    @endif
					<div class="row product-slide">
                        @foreach ($products as $product)
						<div class="col-lg-3 text-center">
							<figure>
								<div class="product-item">
									<img src="{{asset('/uploads/image_product/'.$product->image_product)}}" alt="Product Image">
								</div>
								<figcaption>
									<h4 class="title">{{$product->name}}</h4>
                                    <h5 class="title">{{$product->stores?->name}}</h5>
                                    @if($product->discount_status == 0)
                                        <h4>Price: ${{$product->price}}</h4>
                                    @endif
                                    @if($product->discount_status == 1)
                                        <del style="color: red"> Price:${{$product->price}}</del>
                                        <h5 style="color: #6f42c1">PriceDiscount:<span style="color:#6f22c1">${{$product->price_discount}}</span></h5>
                                    @endif
									<ul class="cart-list icon-btn">
										<li><a class="abs-reflect" href="#"><i class="fas fa-heart"></i></a></li>
										<li><a class="abs-reflect" href="#"><i class="fas fa-cart-plus"></i></a></li>
										<li><a class="abs-reflect" href="{{Route('show',$product->id)}}"><i class="fas fa-eye"></i></a></li>
									</ul>
								</figcaption>
							</figure>
						</div>
                        @endforeach
					</div>
                    <div style="margin-left:520px" class="row">
                        <div class="d-flex justify-content-center">
                            <p> {{ $products->links('dashboard.pa') }}</p>
                        </div>
                    </div>

				</div>
				<div class="col-lg-12 text-center ph-btn">
					<a href="#" class="abs-reflect">Browse All</a>
				</div>
			</div>
		</div>
	</section>
@stop
