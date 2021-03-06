@extends('frontend.layouts.master')

@section('content')
  <div class='container margin-top-20'>
    <h2>Contact Us</h2>
    <hr>

    <div class="row">
    	<div class="col-md-3">
    		<h3>
    			StockLotBD
    		</h3>
    		<p>
    			<address>
    				Dhaka-1200,
    				<br>
    				Bangladesh
    			</address>
    		</p>
    	</div>
    	<div class="col-md-9">
    		<head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<title>StockLotBD</title>
				<link rel="icon" href="img/favicon.png">
				<!-- Bootstrap CSS -->
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<!-- animate CSS -->
				<link rel="stylesheet" href="css/animate.css">
				<!-- owl carousel CSS -->
				<link rel="stylesheet" href="css/owl.carousel.min.css">
				<!-- font awesome CSS -->
				<link rel="stylesheet" href="css/all.css">
				<link rel="stylesheet" href="css/nice-select.css">
				<!-- flaticon CSS -->
				<link rel="stylesheet" href="css/flaticon.css">
				<link rel="stylesheet" href="css/themify-icons.css">
				<!-- font awesome CSS -->
				<link rel="stylesheet" href="css/magnific-popup.css">
				<!-- swiper CSS -->
				<link rel="stylesheet" href="css/slick.css">
				<!-- swiper CSS -->
				<link rel="stylesheet" href="css/price_rangs.css">
				<!-- style CSS -->
				<link rel="stylesheet" href="css/style.css">
			  </head>
			  
			  <body class="bg-white">
				<!--::header part start::-->
				<header class="main_menu home_menu">
					<div class="container-fluid">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-11">
								<nav class="navbar navbar-expand-lg navbar-light">
									<a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
									<button class="navbar-toggler" type="button" data-toggle="collapse"
										data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
										aria-expanded="false" aria-label="Toggle navigation">
										<span class="menu_icon"><i class="fas fa-bars"></i></span>
									</button>
			  
									
			  
											
										</ul>
									</div>
									<div class="hearer_icon d-flex">
										<div class="dropdown cart">
			  
											<!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<div class="single_product">
			  
												</div>
											</div> -->
										</div>
										<a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
									</div>
								</nav>
							</div>
						</div>
					</div>
					<div class="search_input" id="search_input_box">
						<div class="container ">
							<form class="d-flex justify-content-between search-inner">
								<input type="text" class="form-control" id="search_input" placeholder="Search Here">
								<button type="submit" class="btn"></button>
								<span class="ti-close" id="close_search" title="Close Search"></span>
							</form>
						</div>
					</div>
				</header>
				<!-- Header part end-->
			  
				<!--================Home Banner Area =================-->
				<!-- breadcrumb start-->
				<section class="breadcrumb breadcrumb_bg">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-12">
								<div class="breadcrumb_iner">
									<div class="breadcrumb_iner_item">
										<p>Home / Contact</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- breadcrumb start-->
			  
				<!-- ================ contact section start ================= -->
				<section class="contact-section padding_top">
				  <div class="container">
					<div class="d-none d-sm-block mb-5 pb-4">
					  <div id="map" style="height: 480px;"></div>
					  <script>
						function initMap() {
						  var uluru = {
							lat: -25.363,
							lng: 131.044
						  };
						  var grayStyles = [{
							  featureType: "all",
							  stylers: [{
								  saturation: -90
								},
								{
								  lightness: 50
								}
							  ]
							},
							{
							  elementType: 'labels.text.fill',
							  stylers: [{
								color: '#ccdee9'
							  }]
							}
						  ];
						  var map = new google.maps.Map(document.getElementById('map'), {
							center: {
							  lat: 23.815,
							  lng: 90.425
							},
							zoom: 9,
							styles: grayStyles,
							scrollwheel: false
						  });
						}
					  </script>
					  <script
						src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
					  </script>
			  
					</div>
			  
			  
					<div class="row">
					  <div class="col-12">
						<h2 class="contact-title">Get in Touch</h2>
					  </div>
					  <div class="col-lg-8">
						<form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
						  novalidate="novalidate">
						  <div class="row">
							<div class="col-12">
							  <div class="form-group">
			  
								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
								  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
								  placeholder='Enter Message'></textarea>
							  </div>
							</div>
							<div class="col-sm-6">
							  <div class="form-group">
								<input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
								  onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
							  </div>
							</div>
							<div class="col-sm-6">
							  <div class="form-group">
								<input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
								  onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
							  </div>
							</div>
							<div class="col-12">
							  <div class="form-group">
								<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
								  onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
							  </div>
							</div>
						  </div>
						  <div class="form-group mt-3">
							<a href="#" class="btn_3 button-contactForm">Send Message</a>
						  </div>
						</form>
					  </div>
					  <div class="col-lg-4">
						<div class="media contact-info">
						  <span class="contact-info__icon"><i class="ti-home"></i></span>
						  <div class="media-body">
							<h3>Kuril, Dhaka.</h3>
							<p>North South University, DK 1210</p>
						  </div>
						</div>
						<div class="media contact-info">
						  <span class="contact-info__icon"><i class="ti-tablet"></i></span>
						  <div class="media-body">
							<h3>880 (161) 070822709</h3>
							<p>Mon to Fri 9am to 6pm</p>
						  </div>
						</div>
						<div class="media contact-info">
						  <span class="contact-info__icon"><i class="ti-email"></i></span>
						  <div class="media-body">
							<h3>stocklotbd@gmail.com</h3>
							<p>Send us your query anytime!</p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</section>
				<!-- ================ contact section end ================= -->
			  
				 <!-- subscribe_area part start-->
				  <section class="instagram_photo">
					  <div class="container-fluid>
						  <div class="row">
							  <div class="col-lg-12">
								  <div class="instagram_photo_iner">
									  <div class="single_instgram_photo">
										  <img src="img/category/category_1.png" alt="">
										  <a href="#"><i class="ti-instagram"></i></a>
									  </div>
									  <div class="single_instgram_photo">
										  <img src="img/category/category_4.png" alt="">
										  <a href="#"><i class="ti-instagram"></i></a>
									  </div>
									  <div class="single_instgram_photo">
										  <img src="img/category/category_7.png" alt="">
										  <a href="#"><i class="ti-instagram"></i></a>
									  </div>
									  <div class="single_instgram_photo">
										  <img src="img/category/category_12.png" alt="">
										  <a href="#"><i class="ti-instagram"></i></a>
									  </div>
									  <div class="single_instgram_photo">
										  <img src="img/category/category_16.png" alt="">
										  <a href="#"><i class="ti-instagram"></i></a>
									  </div>
								  </div>
							  </div>
						  </div>
			  
				  </section>
				  <!--::subscribe_area part end::-->
			  
				<!-- jquery plugins here-->
				<!-- jquery -->
				<script src="js/jquery-1.12.1.min.js"></script>
				<!-- popper js -->
				<script src="js/popper.min.js"></script>
				<!-- bootstrap js -->
				<script src="js/bootstrap.min.js"></script>
				<!-- easing js -->
				<script src="js/jquery.magnific-popup.js"></script>
				<!-- swiper js -->
				<script src="js/swiper.min.js"></script>
				<!-- particles js -->
				<script src="js/owl.carousel.min.js"></script>
				<script src="js/jquery.nice-select.min.js"></script>
				<!-- slick js -->
				<script src="js/slick.min.js"></script>
				<script src="js/jquery.counterup.min.js"></script>
				<script src="js/waypoints.min.js"></script>
				<script src="js/contact.js"></script>
				<script src="js/jquery.ajaxchimp.min.js"></script>
				<script src="js/jquery.form.js"></script>
				<script src="js/jquery.validate.min.js"></script>
				<script src="js/mail-script.js"></script>
				<!-- custom js -->
				<script src="js/custom.js"></script>
			  </body>
			  
			  </html>
				  
    	</div>
    </div>
    
  </div>
@endsection
