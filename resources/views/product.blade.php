@extends('user_nav')

@section('user_navbar')

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="single-product.html">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
						@foreach($records as $r)
						<img class="img-fluid" src="{{asset('Files/'.$r->Thumbnail)}}" alt="" style="height: 500px; width: 450px;">
						</div>
						<div class="single-prd-item">
						<img class="img-fluid" src="{{asset('Files/'.$r->Thumbnail)}}" alt="" style="height: 500px; width: 450px;">
						</div>
						<div class="single-prd-item">
						<img class="img-fluid" src="{{asset('Files/'.$r->Thumbnail)}}" alt="" style="height: 500px; width: 450px;">
							
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$r->Book_Title}}</h3>
						<h2>Rs.{{$r->Price}}</h2>
						<p>{{$r->Description}}</p>

						<form action="{{URL::to('addToCart')}}" method="POST">
							@csrf
						<input type="hidden" name="bookId" id="" value="{{$r->id}}">
						<input type="hidden" name="Book_Title" id="" value="{{$r->Book_Title}}">
						<input type="hidden" name="Price" id="" value="{{$r->Price}}">
						<input type="hidden" name="Thumbnail" id="" value="{{asset('Files/'.$r->Thumbnail)}}">
						<div class="card_area d-flex align-items-center">
							<button class="primary-btn" name="Cart" type="submit" href="">Add to Cart</button>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
							@endforeach
						</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div><br><br><br><br><br>
	<!--================End Single Product Area =================-->
	

	@endsection