<!DOCTYPE html>
<html>
<head>
	<title>Chayyo.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="plugin/owlcarousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="plugin/owlcarousel/dist/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="plugin/font/flaticon.css">
	<link rel="stylesheet" type="text/css" href="assets/css/chayyo.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive-fix.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
</head>
<body>
<!-- <div class="mobile_nav-full"></div> -->
<section class="main_head">
	<header class="t_header">
		<div class="ch_wrapper">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-5">
					<div class="logo">
						<a href="index.php"><img src="image/logo.png"></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-5 col-12">
					<div class="user_head">
						<div class="input-group">
							<div class="btn-group">
							  	<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></button>
								<div class="dropdown-menu">
								    <a class="dropdown-item" href="#" value="Rquests">Requests</a>
								    <a class="dropdown-item" href="#" value="Gigs">Gigs</a>
							  	</div>
							</div>
						  	<input type="text" name="" class="form-control" placeholder="Search for Requests">
						</div>
						<button class="btn_search" name=""  onclick="location.href='#!'">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
				<div class="col-lg-5 col-md-4 col-7">
					<div class="user_details">
						<ul>
							<li>
								<a href="javascript:void(0)" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="far fa-bell"></i>
									<span class="noti_count">3</span>
								</a>
								<div class="dropdown-menu user_dropdown drp_noti"  aria-labelledby="dropdownMenuLink">
									<!-- <p class="text-left">There are no new notifications at the moment.</p> -->
									<ul class="noti_list">
										<li>
											<a href="proposal-status.php">
												You have received a new proposal on
                                                <span class="time">2019-09-23</span>
											</a>
										</li>
									</ul>
									<a href="notification.php">Check all Notifications</a>
								</div>
							</li>
							<li>
								<a href="javascript:void(0)" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="user_prof">
										<img src="image/client.jpg"><span>Suraj Luitel <i class="fa fa-chevron-down"></i></span>
									</div>
								</a>
								<div class="dropdown-menu user_dropdown"  aria-labelledby="dropdownMenuLink1">
									<ul>
				                        <li class="user-header">
				                            <p>Web Developer
				                                <small>chayyo1.com@gmail.com</small>
				                            </p>
				                        </li>
				                        <li>
				                        	<a href="profile.php"><i class="far fa-user"></i> My Profile</a>
				                        </li>
				                        <li>
				                        	<a href="message.php"><i class="far fa-envelope"></i> Inbox</a>
				                        </li>
				                        <li>
				                        	<a href="change-password.php"><i class="fa fa-unlock-alt"></i> Change Password</a>
				                        </li>
				                        <li>
				                        	<a href="referral.php"><i class="far fa-address-book"></i> Referral</a>
				                        </li>
				                        <li>
				                        	<a href="#"><i class="fa fa-sign-out-alt"></i> Logout</a>
				                        </li>
				                    </ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="user_menu">
		<div class="ch_wrapper">
			<a class="btn_navtog"><span>Menu</span><i class="fa fa-align-right"></i></a>
			<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
	            <li class="">
	                <a href="dashboard.php">
	                    <i class="fa fa-laptop"></i>
	                    <span>Summary</span>
	                </a>
	            </li>
	            <li class="drop_">
	                <a href="#!">
	                    <i class="fa fa-gift"></i>
	                    <span>Sell</span>
	                </a>
	                <ul class="sub-menu">
	                    <li><a href="gig.php"><span>View gigs</span></a></li>
	                    <li><a href="gigadd.php"><span>Add gig</span></a></li>
	                </ul>
	            </li>
	            <li class="drop_">
	                <a href="#!">
	                    <i class="far fa-hand-pointer"></i>
	                    <span>Buy</span>
	                </a>
	                <ul class="sub-menu">
	                    <li><a href="user-request.php"><span>View requests</span></a></li>
	                    <li><a href="user-requestadd.php"><span>Add request</span></a></li>
	                </ul>
	            </li>
	            <li class="drop_">
	                <a href="#!">
	                    <i class="far fa-file-alt"></i>
	                    <span>Manage</span>
	                </a>
	                <ul class="sub-menu">
	                    <li><a href="my-proposal.php"><span>My Proposal</span></a></li>
	                    <li><a href="my-business.php"><span>My Business</span></a></li>
	                </ul>
	            </li>
	            <li>
	                <a href="message.php">
	                    <i class="far fa-comment-dots"></i>
	                    <span>Messages</span>
	                </a>
	            </li>
	        </ul>
		</div>	
	</div>
</section>
