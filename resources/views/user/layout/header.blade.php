<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Page title -->
	<title>Segmic</title>
	<!-- Page description -->
	<meta name="description"
		content="A professional HTML landing page for your mobile application. Developed by Vlad Sargu at VSArt.">
	<!-- Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- End of Meta -->
	<!-- Favicon -->
	<!-- <link rel="apple-touch-icon" sizes="57x57" href="assets/img/common/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/img/common/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/common/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/common/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/common/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/common/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/img/common/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/common/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/common/favicon/apple-touch-icon-180x180.png"> -->
	<link rel="icon" type="image/png" href="{{asset('frontend/img/common/favicon/favicon-32x32.png')}}" sizes="32x32">
	<!-- <link rel="icon" type="image/png" href="assets/img/common/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="assets/img/common/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="assets/img/common/favicon/favicon-16x16.png" sizes="16x16"> -->
	<!-- <link rel="manifest" href="assets/img/common/favicon/manifest.json">
	<link rel="shortcut icon" href="assets/img/common/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="assets/img/common/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="assets/img/common/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff"> -->
	<!-- End of Favicon -->
	<!-- StyleSheets -->
	<link rel="stylesheet" href="{{asset('frontend/dist/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/dist/mystyle.css')}}">
	<!-- icons -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

	<!-- End of StyleSheets -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<!-- swiperjs -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<!-- aos -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body class="js-preload-me ">
	<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
	<!-- Preloader -->
	<div class="preloader js-preloader ">
		<span class="preloader__circle preloader__circle--primary"></span>
		<span class="preloader__circle preloader__circle--secondary"></span>
		<span class="preloader__circle preloader__circle--tertiary"></span>
	</div>
	<!-- End of Preloader -->
	<!-- Page -->
	<div class="page js-page ">
		<!-- Mobile Menu -->
		<div id="sidr">
			<div class="mobile-menu__close js-mobile-menu__close"></div>
			<ul class="mobile-menu js-mobile-menu ">
				<li class="mobile-menu__item ">
					<a href="index.html" class="mobile-menu__link">Home</a>
				</li>
				<!-- <li class="mobile-menu__item ">
					<a href="#features" class="mobile-menu__link js-scroll-to">Features</a>
				</li> -->
				<li class="mobile-menu__item ">
					<a href="#" class="mobile-menu__link">Services</a>
					<ul class="mobile-menu__child">
						<li class="mobile-menu__item ">
							<a href="#video" class="mobile-menu__link js-scroll-to">Overview</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Industrial Engineering</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Machine Engineering</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Software Engineering</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Maintenance</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Training Courses</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Consultancy</a>
						</li>
					</ul>
				</li>
				<li class="mobile-menu__item ">
					<a href="#" class="mobile-menu__link">Industries & Solutions</a>
					<ul class="mobile-menu__child">
						<li class="mobile-menu__item ">
							<a href="#video" class="mobile-menu__link js-scroll-to">Overview</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Building Technologies</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Oil & Gas</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Process Industry</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Infrastructures</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Energy</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Utilites</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Road and Transportation</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Data Center and IT</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Healthcare</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Warehouse Automation</a>
						</li>
						<li class="mobile-menu__item ">
							<a href="#screenshots" class="mobile-menu__link js-scroll-to">Education</a>
						</li>
					</ul>
				</li>

				<li class="mobile-menu__item ">
					<a href="index.html" class="mobile-menu__link">Brands Expertise</a>
				</li>
				<li class="mobile-menu__item ">
					<a href="index.html" class="mobile-menu__link">Clients & Partners</a>
				</li>
				<li class="mobile-menu__item ">
					<a href="index.html" class="mobile-menu__link">Careers & Internship</a>
				</li>
				<li class="mobile-menu__item ">
					<a href="index.html" class="mobile-menu__link">Supplier Registration</a>
				</li>
				<li class="mobile-menu__item ">
					<a href="index.html" class="mobile-menu__link">About Us</a>
				</li>
			</ul>
			<div class="row  nav-top-row-mobile">
				<div class="nav-top-item">
					<i class="bi bi-envelope"></i>
					info@segmic.com
				</div>
				<span class="separater">.</span>
				<div class="nav-top-item">
					<i class="bi bi-envelope"></i>
					sales@segmic.com
				</div>
				<span class="separater">.</span>
				<div class="nav-top-item">
					<i class="bi bi-phone"></i>
					+971 4 339 0576
				</div>
				<span class="separater">.</span>

				<div class="social-container">
					<i class="bi bi-facebook"></i>
					<i class="bi bi-instagram"></i>
					<i class="bi bi-twitter"></i>
					<i class="bi bi-linkedin"></i>
				</div>
			</div>
		</div>
		<!-- End of Mobile Menu -->
		<!-- Header -->
		<header class="header js-header ">
			<div class="container">
				<div class="row nav-top-row">
					<div class="nav-top-item menu__link menu__item">
						<i class="bi bi-envelope"></i>
						info@segmic.com
					</div>
					<span class="separater menu__link menu__item">.</span>
					<div class="nav-top-item menu__link menu__item">
						<i class="bi bi-envelope"></i>
						sales@segmic.com
					</div>
					<span class="separater menu__link menu__item">.</span>
					<div class="nav-top-item menu__link menu__item">
						<i class="bi bi-phone"></i>
						+971 4 339 0576
					</div>
					<span class="separater menu__link menu__item">.</span>

					<div class="social-container">
						<i class="bi bi-facebook menu__link menu__item"></i>
						<i class="bi bi-instagram menu__link menu__item"></i>
						<i class="bi bi-twitter menu__link menu__item"></i>
						<i class="bi bi-linkedin menu__link menu__item"></i>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<!-- Logo -->
						<div class="logo ">
							<a href="index.html" class="logo__link">
								<img src="{{asset('public/frontend/img/common/logo/Segmic-logo.png')}}" alt="Logo"
									class="logo__image js-logo__image" data-switch="true"> </a>
						</div>
						<!-- End of Logo -->
					</div>
					<div class="col-md-20 col-sm-20 col-xs-12">
						<!-- Menu -->
						<nav>
							<ul class="menu menu--right js-menu sf-menu ">
								<li class="menu__item ">
									<a href="index.html" class="menu__link">Home</a>
									<!-- <ul class="menu__child">
										<li class="menu__item ">
											<a href="index-2.html" class="menu__link">Home secondary</a>
										</li>
										<li class="menu__item ">
											<a href="index-3.html" class="menu__link">Home tertiary</a>
										</li>
									</ul> -->
								</li>
								<!-- <li class="menu__item ">
									<a href="#features" class="menu__link js-scroll-to">Features</a>
								</li> -->
								<li class="menu__item ">
									<a href="#" class="menu__link">Services</a>
									<ul class="menu__child">
										<li class="menu__item ">
											<a href="#video" class="menu__link js-scroll-to">Overview</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Industrial
												Engineering</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Machine
												Engineering</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Software
												Engineering</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Maintenance</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Training Courses</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">
												Consultancy</a>
										</li>
									</ul>
								</li>
								<li class="menu__item ">
									<a href="#" class="menu__link">Industries & Solutions</a>
									<ul class="menu__child">
										<li class="menu__item ">
											<a href="#video" class="menu__link js-scroll-to">Overview</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Bulding
												Technologies</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Oil & Gas</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Process Industry</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Infrastructures</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Energy</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Utilites</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Road &
												Transportation</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Data Center & IT</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Healthcare</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Warehouse
												Automation</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Education</a>
										</li>
									</ul>
								</li>
								<li class="menu__item ">
									<a href="#team" class="menu__link js-scroll-to">Brands and Expertise</a>
								</li>
								<li class="menu__item ">
									<a href="#team" class="menu__link js-scroll-to">Contact Us</a>
								</li>
								<li class="menu__item ">
									<a href="#" class="menu__link">More</a>
									<ul class="menu__child">
										<li class="menu__item ">
											<a href="#video" class="menu__link js-scroll-to">Clients & Partners</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Careers &
												Internship</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">Supplier
												Registration</a>
										</li>
										<li class="menu__item ">
											<a href="#screenshots" class="menu__link js-scroll-to">About Us</a>
										</li>
									</ul>
								</li>
								<!-- <li class="menu__item ">
									<a href="#plans" class="menu__link js-scroll-to">Plans</a>
								</li>
								<li class="menu__item ">
									<a href="#contacts" class="menu__link js-scroll-to">Contacts</a>
								</li>
								<li class="menu__item menu__item--button">
									<a href="#download" class="menu__link js-scroll-to">Download</a>
								</li> -->
							</ul>
						</nav>
						<!-- End of Menu -->
						<!-- Menu Trigger -->
						<a class="menu-trigger js-menu-trigger " href='sidr'> </a>
						<!-- End of Menu Trigger -->
					</div>
				</div>
			</div>
		</header>
		<!-- End of Header -->