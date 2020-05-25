<?php include('header.php'); ?>

<section class="image_slider">
	<img src="image/slider.jpg">
	<div class="slider_texts">
    	<div class="text_wrap">
    		<h1>Best Products and Services</h1>
    		<p>We are a creative web design agency who makes beautiful<br> websites for thousands of people.</p>
    	</div>	
		<div class="slider_text_btn">
			<button onclick="location.href='#!'" class="btn_border">I have a requirement</button>
			<button onclick="location.href='request.php'" class="btn_fill_green">I am looking to sell</button>
		</div>
	</div>
</section>

<section class="featured_req bg_gray p-tb50">
	<div class="ch_wrapper">
		<div class="ch_title">
			<h3 class="text-center">Featured <span>Requests</span></h3>
			<p class="text-center">Find the perfect product and service you're looking for</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="req_list">
					<div class="req_img">
						<div class="req_price">
							Rs. 50000
						</div>
						<a href="#!">
							<span></span>
							<img src="image/slider_img.jpg" alt="">
						</a>
					</div>
					<div class="req_content">
						<h5>New Baneshwor, Kathmandu</h5>
						<h3><a href="#!">Looking for a Designer</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="req_list">
					<div class="req_img">
						<div class="req_price">
							Rs. 24000
						</div>
						<a href="#!">
							<span></span>
							<img src="image/img11.jpg" alt="">
						</a>
					</div>
					<div class="req_content">
						<h5>Macchhapokhari, Kathmandu</h5>
						<h3><a href="#!">Marketing Staff Needed</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="req_list">
					<div class="req_img">
						<div class="req_price">
							Rs. 230000
						</div>
						<a href="#!">
							<span></span>
							<img src="image/img12.jpg" alt="">
						</a>
					</div>
					<div class="req_content">
						<h5>Pulchowk, Lalitpur</h5>
						<h3><a href="#!">BMW Bike Urgent Sell</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="req_list">
					<div class="req_img">
						<div class="req_price">
							Rs. 15000
						</div>
						<a href="#!">
							<span></span>
							<img src="image/img13.jpg" alt="">
						</a>
					</div>
					<div class="req_content">
						<h5>Koteshwor, Kathmandu</h5>
						<h3><a href="#!">Graphic Designer with 2 years experience</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ch_works p-tb50">
	<div class="ch_wrapper">
		<div class="ch_title">
			<h3 class="text-center">How <span>It Works</span></h3>
			<p class="text-center">Find the perfect product and service you're looking for</p>
		</div>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
		    	<a class="nav-link active" id="buyer-tab" data-toggle="tab" href="#buyer" role="tab" aria-controls="buyer" aria-selected="true">For Buyers</a>
			</li>
			<li class="nav-item">
		    	<a class="nav-link" id="seller-tab" data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="false">For Sellers</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 flaticon-right-arrow">
						<div class="ch_wrk1">
							<div class="wrk1_icon">
								<i class="flaticon-shopping-cart"></i>
								<!-- <span>01</span> -->
							</div>
							<div class="wrk1_content">
								<h3>Post Request</h3>
								<p>Create an account and post your request(requirement) right away!</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 flaticon-right-arrow">
						<div class="ch_wrk1">
							<div class="wrk1_icon">
								<i class="flaticon-hand-shake"></i>
								<!-- <span>02</span> -->
							</div>
							<div class="wrk1_content">
								<h3>Select</h3>
								<p>Select proposal for yourself among all that comes in for your request.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 flaticon-right-arrow">
						<div class="ch_wrk1">
							<div class="wrk1_icon">
								<i class="flaticon-truck"></i>
								<!-- <span>03</span> -->
							</div>
							<div class="wrk1_content">
								<h3>Receive</h3>
								<p>Get you product/service delivered as per your agreement  with the vendor.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="ch_wrk1">
							<div class="wrk1_icon">
								<i class="flaticon-credit-cards-payment"></i>
								<!-- <span>04</span> -->
							</div>
							<div class="wrk1_content">
								<h3>Pay</h3>
								<p>Make your payment after you verify the delivery is as per agreement.</p>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 flaticon-right-arrow">
						<div class="ch_wrk1">
							<div class="wrk1_icon">
								<i class="flaticon-shopping-bag"></i>
								<!-- <span>01</span> -->
							</div>
							<div class="wrk1_content">
								<h3>Create Gig</h3>
								<p>Create an account and create gigs for your products/services you want to sell.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 flaticon-right-arrow">
						<div class="ch_wrk1">
							<div class="wrk1_icon">
								<i class="flaticon-hand-shake"></i>
								<!-- <span>02</span> -->
							</div>
							<div class="wrk1_content">
								<h3>Send Proposals</h3>
								<p>Browse requests and send proposals for requests that you can deliver.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 flaticon-right-arrow">
						<div class="ch_wrk1">
							<div class="wrk1_icon">
								<i class="flaticon-truck"></i>
								<!-- <span>03</span> -->
							</div>
							<div class="wrk1_content">
								<h3>Deliver</h3>
								<p>Deliver your gig. Make sure you follow the terms that you agreed with the buyer.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="ch_wrk1">
							<div class="wrk1_icon">
								<i class="flaticon-credit-cards-payment"></i>
								<!-- <span>04</span> -->
							</div>
							<div class="wrk1_content">
								<h3>Get Paid</h3>
								<p>Get paid on delivery. Remember client satisfaction is key for repeat business.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ch_testi bg_mdgray p-tb50">
	<div class="ch_wrapper">
		<div class="ch_title">
			<h3 class="text-center">Client's <span>Feedback</span></h3>
			<p class="text-center">Find how our customers are sharing their experience</p>
		</div>
		<div class="ch_testi-list owl-carousel owl-theme">
			<div class="item">
				<div class="testi_list">
					<img src="image/client.jpg" alt="">
					<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat."</p>
					<h3>- Richard Parker</h3>
					<h5>New Baneshwor, Kathmandu</h5>
				</div>	
			</div>
			<div class="item">
				<div class="testi_list">
					<img src="image/client.jpg" alt="">
					<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat."</p>
					<h3>- Richard Parker</h3>
					<h5>New Baneshwor, Kathmandu</h5>
				</div>	
			</div>
		</div>
	</div>
</section>

<section class="ch_start p-tb50">
	<div class="ch_wrapper">
		<div class="ch_title">
			<h3 class="text-center">Get Started <span>From Here</span></h3>
			<p class="text-center">No matter what your goals are, you can always get started from here</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="#!">
					<div class="start_list">
						<img src="image/img11.jpg" alt="">
						<div class="start_title">
							<h3>What is Chayyo?</h3>
							<h5>Check from our blog</h5>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="#!">
					<div class="start_list">
						<img src="image/img12.jpg" alt="">
						<div class="start_title">
							<h3>How it Works</h3>
							<h5>See how it works</h5>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="#!">
					<div class="start_list">
						<img src="image/img13.jpg" alt="">
						<div class="start_title">
							<h3>Get more Business</h3>
							<h5>Start selling</h5>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<a href="#!">
					<div class="start_list">
						<img src="image/img14.jpg" alt="">
						<div class="start_title">
							<h3>Looking to buy something?</h3>
							<h5>Post your request</h5>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<div class="site_cookies">
	<div class="row">
		<div class="col-lg-9">
			<p>This site uses cookies. By using this website, you accept the Terms Of Use and Privacy Policy. Designated trademarks and brands are the property of their respective owners.</p>
		</div>
		<div class="col-lg-3">
			<div class="cookie__clo">
				<a class="cookie_close">Got It!</a>
			</div>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>