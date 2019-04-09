<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/component.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/typography.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/jquery.bxslider.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/widget.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/flipclock.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/shortcodes.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/colors.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet">
</head>
<?php wp_head();?>
<body>
<div class="wrapper">
	<header>
		<!-- SIGN IN OR REGISTER -->
		<div class="modal fade" id="user-login" tabindex="-1">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<div>
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#Signin" aria-controls="Signin" role="tab" data-toggle="tab">Signin</a></li>
								<li role="presentation"><a href="#Signup" aria-controls="Signup" role="tab" data-toggle="tab">Signup</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="Signin">
									<div class="hotel-login-form">
										<div class="input-container">
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
											<input type="email" placeholder="Your Email ID">
										</div>
										<div class="input-container">
											<i class="fa fa-lock" aria-hidden="true"></i>
											<input type="email" placeholder="Your Email ID">
										</div>
										<div class="input-container">
											<button>Login</button>
										</div>
										<div class="input-container login-with">
											<div class="row">
												<div class="col-lg-6">
													<a href="#" class="facebook">Login with facebook</a>
												</div>
												<div class="col-lg-6">
													<a href="#" class="gmail">Login with facebook</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="Signup">
									<div class="hotel-login-form">
										<div class="input-container">
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
											<input type="email" placeholder="Your Email ID">
										</div>
										<div class="input-container">
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
											<input type="password" placeholder="Your Password">
										</div>
										<div class="input-container">
											<i class="fa fa-lock" aria-hidden="true"></i>
											<input type="password" placeholder="Retype Password">
										</div>
										<div class="input-container">
											<button>Login</button>
										</div>
										<div class="input-container login-with">
											<div class="row">
												<div class="col-lg-6">
													<a href="#" class="facebook">Login with facebook</a>
												</div>
												<div class="col-lg-6">
													<a href="#" class="gmail">Login with facebook</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="kf_header_logos">
			<div class="container">
				<div class="kf_logo">
					<h1><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="kodeforest"></a></h1>
				</div>
				<div class="kf_navigation_menu">
					<nav class="navigation">
						<?php wp_nav_menu(array('theme-location' => 'header-menu','container' => 'ul'));?>
					</nav>
					<!--DL Menu Start-->
					<div id="kode-responsive-navigation" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li class="active"><a class="active" href="index.html">Home</a>
							<li class="menu-item kode-parent-menu"><a href="#">Blog</a>
								<ul class="dl-submenu">
									<li><a href="blog.html">Blog</a></li>
									<li><a href="blog-1.html">Blog Listing</a></li>
									<li><a href="blog-detail.html">Blog Detail</a></li>
									<li><a href="blog-detail-1.html">Blog Detail 01</a></li>
								</ul>
							</li>
							<li class="menu-item kode-parent-menu"><a href="#">Guide Index</a>
								<ul class="dl-submenu">
									<li><a href="guide-index.html">Guide Index</a></li>
									<li><a href="guide-detail.html">Guide Detail</a></li>
								</ul>
							</li>
							<li class="menu-item kode-parent-menu"><a href="#">jobs</a>
								<ul class="dl-submenu">
									<li><a href="job-listing.html">job listing</a></li>
									<li><a href="job-detail.html">job detail</a></li>
								</ul>
							</li>
							<li><a href="category.html">Category</a></li>
							<li><a href="shotcode.html">Shotcode</a></li>
							<li><a href="contact-us.html">Contact Us</a></li>
						</ul>
					</div>
					<!--DL Menu END-->
					<div class="kode_search_overlay">
						<div class="cp-search-holder">
							<button type="button" id="trigger-overlay"><i aria-hidden="true" class="fa fa-search"></i></button>
						</div>

						<div id="overlay" class="overlay overlay-contentscale">
							<button class="overlay-close" type="button">Close</button>
							<!--Search Bar Inner Start-->
							<div class="cp-search-inner">
								<form class="kode-search kode_search-form" method="get" id="searchform">
									<input type="text" name="s" id="s" autocomplete="off" data-default="" />
									<button class="submit" type="submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
							<!--Search Bar Inner End-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom_bar_header">
			<div class="container">
				<div class="breaking-news">
					<strong>Breaking News: </strong>
					<div class="breaking-news-item">
						<div><div class="news_text"><p>BlogDesk Launches Lorem Ipsum Essay Series With Author Essay Series Essay Series With Author Brian Patrick Eha...</p></div></div>
						<div><div class="news_text"><p>BlogDesk Launches Lorem Ipsum Essay Series With Author Essay Series With Author Essay Series Brian Patrick Eha...</p></div></div>
					</div>
				</div>
			</div>
		</div>
	</header>