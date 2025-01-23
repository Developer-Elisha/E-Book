@extends('user_nav')

@section('user_navbar')

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section><br><br><br><br><br>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<div class="container">
	<style>
    /* Custom CSS for active tab */
    .nav-pills .nav-link.active {
      background-color: #37B05D;
    }
  </style>
        <ul role="tablist" class="nav nav-pills rounded nav-fill mb-3" style="background-color: #0A5C46">
            <li class="nav-item"> <a data-toggle="pill" href="#pills-profile" class="nav-link active" style="color: #333333;"> <i class="fa fa-tags mr-2"></i>Login</a> </li>
            <li class="nav-item"> <a data-toggle="pill" href="#pills-home" class="nav-link" style="color: #333333;"> <i class="fa fa-credit-card mr-2"></i>Register</a> </li>
        </ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<div class="pt-3 pb-0 px-3">
<div class="info" id="info">
<h6 class="font-weight-normal"><section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="" style="height: 539px;"> 
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Registration Form</h3>
						<form class="row login_form" action="/reg-user" method="post" enctype="multipart/form-data">
							@csrf
						<div class="col-md-12 form-group img-center">
                               <label for="image-upload" class="upload-btn" id="upload-btn">
                                 <span class="plus-sign">+</span>
                                 <img src="" id="preview-img" alt="Uploaded Image">
                                 <input type="file" class="form-control" id="image-upload" name="Profile_Pic" accept="image/*" placeholder="image" onchange="previewImage()" required>
                               </label>
                             </div>			
						
						<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
							</div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required>
							</div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="Password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>
							</div>

							 <div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Registration</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
</div>
<div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="bus-details pt-3 pb-0 px-3">
<div class="review" id="review">
<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						@if(session()->has('success'))
						<div class="alert alert-success">
							<p>{{session()->get('success')}}</p>
						</div>
						@endif
						<h3>Log in to enter</h3>
						<form class="row login_form" action="/login-user" method="post" enctype="multipart/form-data">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
</div>
</div>
</div>
	<!--================End Login Box Area =================-->

	

	@endsection