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
<div class="mobile_nav-full"></div>
<section class="main_head">
	<header class="header">
		<div class="ch_wrapper">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-3 col-8">
					<div class="logo">
						<a href="index.php"><img src="image/logo.png"></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-7 col-12">
					<div class="user_head">
						<div class="input-group">
							<div class="btn-group">
							  	<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></button>
								<div class="dropdown-menu">
								    <a class="dropdown-item" value="Rquests">Requests</a>
								    <a class="dropdown-item" value="Gigs">Gigs</a>
							  	</div>
							</div>
						  	<input type="text" name="" class="form-control" placeholder="Search for Requests">
						</div>
						<button class="btn_search" name=""  onclick="location.href='#!'">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
				<div class="col-lg-5 col-md-2 col-sm-2 col-4">
					<span class="mobile_bar" onclick="openNav()"><i class="fa fa-bars"></i></span>
					<div class="nav_menu" id="mySidenav">
						<div class="nav_close">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						</div>
						<div class="logo logo_mobile">
							<a href="index.php"><img src="image/logo.png"></a>
						</div>
						<ul>
							<li><a href="signin.php"><i class="fas fa-user-lock"></i>Sign In</a></li>
							<li><a href="register.php"><i class="far fa-user"></i>Register</a></li>
							<li><a href="post_request.php" class="btn_postreq">Post a Request</a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</header>		
</section>
