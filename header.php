<?php
$page = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Home Play</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">

	<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Livvic:wght@400;500;600;700;900&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/10d7817d70.js" crossorigin="anonymous"></script>

</head>
<body style="visibility: hidden;">

	<!--Loader-->
	<div id="loader">
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	</div>
	<!--Loader-->

	<!--Web_Header-->
    <div class="sticky-top">
		<div class="top_bar">
			<div class="container">
				<div class="top_bar_right">
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#mp_event_checkout">Create an Artist Account</a></li>
						<li><a href="#" data-toggle="modal" data-target="#mp_viewer_account">Create an Viewer Account</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">

				<div class="form-inline-mobile d-lg-none d-md-block d-sm-block">
					<div class="head_button">
						<ul>
							<li>
								<a href="javascript:void(0)" class="btn_hb_search">
									<i class="fa fa-search"></i>
									<div class="togglesearch">
										<input type="text" placeholder=""/>
										<input type="button" value="Search"/>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<a class="navbar-brand" href="index.php">
					<img src="images/logo_white.png" class="logo_white" class="img-fluid">
					<img src="images/logo_black.png" class="logo_black" class="img-fluid">
				</a>

				<div class="dropdown d-lg-none d-md-block d-sm-block btn_hb_profile_main">
					<a class="dropdown-toggle btn_hb_profile" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user_profile.png" alt=""></a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#my_artist_profile">My Artist Profile</a>
					</div>
				</div>

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar top-bar"></span>
					<span class="icon-bar middle-bar"></span>
					<span class="icon-bar bottom-bar"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php echo $page == 'index.php' ? 'active' : '' ?>"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
						<li class="nav-item <?php echo $page == 'find-events.php' ? 'active' : '' ?>"><a class="nav-link" href="find-events.php">Find Events</a></li>
						<li class="nav-item <?php echo $page == 'support.php' ? 'active' : '' ?>"><a class="nav-link" href="support.php">Support</a></li>
						<li class="nav-item on_mobile"><a class="nav_button" href="#">Are You An Artist?</a></li>
					</ul>
					<div class="form-inline-desktop d-lg-block d-md-none d-sm-none">
						<div class="head_button">
							<ul>
								<li><a href="#" class="btn_hb_text">Are You An Artist?</a></li>
								<li>
									<a href="javascript:void(0)" class="btn_hb_search">
										<i class="fa fa-search"></i>
										<div class="togglesearch">
											<input type="text" name="search" placeholder=""/>
											<input type="button" value="Search"/>
										</div>
									</a>
								</li>
								<li class="dropdown">
									<a class="btn btn-secondary dropdown-toggle btn_hb_profile" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/user_profile.png" alt=""></a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#my_artist_profile">My Artist Profile</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
    </div>
	<!--Web_Header-->
