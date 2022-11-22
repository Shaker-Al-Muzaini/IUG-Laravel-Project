@extends('layouts.main_project')
@section('pagM')


	<div class="top_to">
		<i class="fas fa-chevron-up"></i>
	</div>
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
							<a class="navbar-brand" href="index.blade.php">
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
										<a class="nav-link">Home <i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="index.blade.php">Home One</a></li>
											<li><a href="index2.html">Home Two</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="about.html">About us</a>
									</li>
									<li class="nav-item head-dropdown">
										<a class="nav-link active">Pages <i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="product-grid.html">Product Grid</a></li>
											<li><a href="product-gridside.html">Product Grid Sidebar</a></li>
											<li><a href="product_listview.blade.php">Product List View</a></li>
											<li><a href="product-details.html">Product Details</a></li>
											<li><a href="shopping-cart.html">Shopping Cart</a></li>
											<li><a href="cart.html">Checkout</a></li>
											<li><a href="gallery.html">Gallery</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.html">Contact</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="login.html">Login/Register</a>
									</li>
								</ul>
								<ul class="add-to-cart">
									<li>
										<a href="cart.html"><img src="{{asset('assets_minProject/images/cart.png')}}" alt="Cart Image"></a>
									</li>
									<li><span class="cart_list">02 Item</span><span class="price">Total $368</span></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="breadcumb" style="background:url({{asset('assets_minProject/images/grid-view/banner.jpg')}}) no-repeat center;background-size:cover;">
		<div class="bnr-overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center p-0">
						<h1>Product Details</h1>
						<ul>
							<li><a href="index.blade.php">Home</a></li>
							<li><i class="fas fa-angle-right"></i></li>
							<li><a href="product-details.html">Product Details</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="all-product" class="product-sagor">
		<div class="container list-view">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<div class="row">
								<div class="col-12 catagory">
									<h3>Stores</h3>
									<ul>
                                        @foreach($Stores as $Store)
										<li><a href="#">{{$Store->name}}</a></li>
                                            @endforeach
									</ul>

								</div>
							</div>
						</div>

						<div class="col-lg-9  col-md-9 product-details order-md-1">
							<div class="row ">
                                @if(session()->has('add'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ session()->get('add') }}</strong>
                                    </div>
                                @endif
								<div class="col-12 xoom_part">
									<div class="row">
                                        @foreach($product as $products)
										<div class="col-lg-5">
											<div class="displayed">
												<img class="xzoom img-fluid" id="xzoom-default"
													src="{{asset('/uploads/image_product/'.$products->image_product)}}" xoriginal="images/details/1.jpg"
													alt="Zoom Photo" />
											</div>
											<div class="thumnail_all">

											</div>
										</div>
										<div class="col-lg-7 product-brief">
											<h3>{{$products->name}}</h3>
                                            @if($products->discount_status == 0)
                                                <h4>Price: ${{$products->price}}</h4>
                                            @endif
                                            @if($products->discount_status == 1)
                                                <h4>Price: ${{$products->price_discount}}</h4>
                                            @endif
											<h5>Availability: <span>In Stock</span></h5>
                                            <strong>StoreName:</strong><span>{{$products->stores?->name}}</span>
                                            <br>
											<strong>Address:</strong><span>{{$products->stores?->address}}</span>

											<form method="Post" action="{{route('Home.store')}}">
                                                @csrf
												<p class="quantity">
													<span>Qty:</span><label>
                                                        <input type="number" min="1" value="1" name="product_cont">
                                                    </label>
												</p>
                                                <input type="hidden" name="products_id" value="{{$products->id}}">
                                                @if($products->discount_status == 1)
                                                <input type="hidden" name="price"  value="{{$products->price_discount}}">
                                                @endif
                                                @if($products->discount_status == 0)
                                                    <input type="hidden" name="price"  value="{{$products->price}}">
                                                @endif

											<ul class="add-to-cart icon-btn">
												<li><a class="abs-reflect" href="#"><i class="fas fa-heart"></i></a>
												</li>
												<li><button type="submit" class="abs-reflect carts">
                                                        Add  To
                                                    </button></li>
												<li><a class="abs-reflect" href="#"><i class="fas fa-eye"></i></a></li>
											</ul>
                                            </form>

											<ul class="share">
												<li>Share:</li>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
											</ul>
										</div>
                                        @endforeach

									</div>
								</div>
								<div class="col-12  tab-part">
									<div class="row">
										<div class="col-12">
											<ul class="nav nav-tabs" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active pl-0" id="home-tab" data-toggle="tab"
														href="#home" role="tab" aria-controls="home"
														aria-selected="true">Description </a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="profile-tab" data-toggle="tab"
														href="#profile" role="tab" aria-controls="profile"
														aria-selected="false">Reviews</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="contact-tab" data-toggle="tab"
														href="#contact2" role="tab" aria-controls="contact"
														aria-selected="false">Terms &amp; Condition</a>
												</li>
											</ul>
										</div>
										<div class="col-12">
											<div class="tab-content" id="myTabContent">
												<div class="tab-pane fade show active" id="home" role="tabpanel"
													aria-labelledby="home-tab">
													<p>
                                                        {{$products->note}}
                                                    </p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12  related-product">
									<div class="row">
										<div class="col-12 text-center">
											<h2>Related Products</h2>
										</div>
										<div class="col-12">
											<div class="row">
                                                @foreach($productt as $produc)
												<div class="col-lg-4 col-sm-6 text-center">
													<figure>
														<div class="product-item">
															<img src="{{asset('/uploads/image_product/'.$produc->image_product)}}" class="img-fluid"
																alt="Product Image">
														</div>
														<figcaption>
															<h4 class="title">{{$produc->name}}</h4>
                                                            <h5 class="title">{{$produc->stores?->name}}</h5>
                                                            @if($produc->discount_status == 0)
                                                                <h4>Price: ${{$produc->price}}</h4>
                                                            @endif
                                                            @if($produc->discount_status == 1)
                                                                <del style="color: red"> Price:${{$produc->price}}</del>
                                                                <h5 style="color: #6f42c1">PriceDiscount:<span style="color:#6f22c1">${{$produc->price_discount}}</span></h5>
                                                            @endif
															<ul class="cart-list icon-btn">
																<li><a class="abs-reflect" href="#"><i
																			class="fas fa-heart"></i></a></li>
																<li><a class="abs-reflect" href="#"><i
																			class="fas fa-cart-plus"></i></a></li>
																<li><a class="abs-reflect" href="#"><i
																			class="fas fa-eye"></i></a></li>
															</ul>
														</figcaption>
													</figure>
												</div>
                                                @endforeach

											</div>
										</div>
										<div class="col-lg-12 text-center ph-btn">
											<a href="#" class="abs-reflect">Browse All</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

@stop
