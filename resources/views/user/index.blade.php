@extends('user.layout.template')
@section('main-content')
		<!-- Hero -->
		<!-- <div class="hero ">
			
			<div class="slider js-slider owl-carousel ">
				<div class="slider__slide">
					<h2 class="slider__title">Solutions Empowered by
						<span class='slider__highlight'>innovation</span>
					</h2>
					<div class="slider__content">
						<img src="/assets/img/hero/Rectangle 3.png" class="slider__secondary"
							alt="Slider Image 584x859">
						<img src="/assets/img/hero/Rectangle 1.png" class="slider__secondary slider__secondary--right"
							alt="Slider Image 584x859">
						<img src="/assets/img/hero/Rectangle 2.png" class="slider__image"
							alt="Slider 949x1170 Image">
					</div>
				</div>
				<div class="slider__slide">
					<h2 class="slider__title">One STOP
						<span class='slider__highlight'> SOLUTION PROVIDER</span>
					</h2>
					<div class="slider__content">
						<img src="/assets/img/hero/Rectangle 5.png" class="slider__secondary" alt="Slider Image">
						<img src="/assets/img/hero/Rectangle 6.png" class="slider__secondary slider__secondary--right"
							alt="Slider Image">
						<img src="/assets/img/hero/Rectangle 4.png" class="slider__image" alt="Slider Image">
					</div>
				</div>
				<div class="slider__slide">
					<h2 class="slider__title">sustainable
						<span class='slider__highlight'>technology solutions</span>
					</h2>
					<div class="slider__content">
						<img src="/assets/img/hero/Rectangle 8.png" class="slider__secondary" alt="Slider Image">
						<img src="/assets/img/hero/Rectangle 9.png" class="slider__secondary slider__secondary--right"
							alt="Slider Image">
						<img src="/assets/img/hero/Rectangle 7.png" class="slider__image" alt="Slider Image">
					</div>
				</div>
			</div>
		
		</div> -->
		<!-- End of Hero -->


		<!--new hero-->
		<section class="hero hero-section">
			<video autoplay muted loop id="bg-video">
				<source src="{{asset('frontend/img/hero/blue 6.mp4')}}" type="video/mp4">
			</video>
			<!-- Swiper -->
			<div class="swiper HeroSwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">Machine Engineering</div>
					<div class="swiper-slide">Industrial Engineering</div>
					<div class="swiper-slide">Software Engineering</div>
					<div class="swiper-slide">Maintenance</div>
					<div class="swiper-slide">Training Courses</div>
					<div class="swiper-slide">Consultancy</div>
					<!-- <div class="swiper-slide">Slide 7</div>
					<div class="swiper-slide">Slide 8</div>
					<div class="swiper-slide">Slide 9</div> -->
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</section>


		<!-- Section -->
		<!-- <section class="section section--grey " id='download'>
			<div class="container">
				<div class="row">
					<div class="col-md-24">
					
						<h2 class="section-title section-title--center "> Download this
							<span class='section-title__highlight'>awesome</span> app </h2>
				
						<p class="section-subtitle section-subtitle--center "> available on all modern operating systems </p>
					
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-8 col-lg-offset-2">
					
						<a class="download-button  " href="#">
							<img src="http://placehold.it/80x80" class="download-button__icon" alt="Platform Icon">
							<span class="download-button__platform">Android app on</span>
							<span class="download-button__store">Google Play</span>
						</a>
						
					</div>
					<div class="col-lg-6 col-md-8 col-lg-offset-1">
					
						<a class="download-button  " href="#">
							<img src="http://placehold.it/80x80" class="download-button__icon" alt="Platform Icon">
							<span class="download-button__platform">Desktop app on</span>
							<span class="download-button__store">Mac App Store</span>
						</a>
						
					</div>
					<div class="col-lg-6 col-md-8 col-lg-offset-1">
						
						<a class="download-button  " href="#">
							<img src="http://placehold.it/80x80" class="download-button__icon" alt="Platform Icon">
							<span class="download-button__platform">IOS app on</span>
							<span class="download-button__store">App Store</span>
						</a>
						
					</div>
				</div>
			</div>
		</section> -->
		<!-- End of Section -->

		<!-- industry gallery -->
		<section class="section section--grey " id='download'>
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<!-- Section Title -->
						<h2 class="section-title section-title--center"> Something about
							<span class='section-title__highlight'>Industries</span> and more
						</h2>
						<!-- End of Section Title -->
						<!-- Section Subtitle -->
						<p class="section-subtitle section-subtitle--center "> Lorem ipsum dolor sit amet, consectetur
							adipisicing.</p>
						<!-- End of Section Subtitle -->
					</div>
				</div>
				<div class="row swiperrow" data-aos="fade-in">
					<div class="">
						<!-- Swiper -->
						<div class="swiper mySwiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="slide-col">
										<div class="slide-row">
											<div class="slide-col">
												<a href="">
													<div class="slide-content">
														Building Technology
														<div class="underline"></div>
													</div>
													<img src="{{asset('frontend/img/industries/building-technologies.webp')}}"
														loading="lazy" alt="">
												</a>
											</div>
											<div class="slide-col">
												<a href="">
													<div class="slide-content">
														Oil & Gas
														<div class="underline"></div>
													</div>
													<img src="{{asset('frontend/img/industries/oil&gas.webp')}}" loading="lazy" alt="">
												</a>
											</div>
										</div>
										<div class="slide-row">
											<a href="">
												<div class="slide-content">
													Data Center & IT
													<div class="underline"></div>
												</div>
												<img src="{{asset('frontend/img/industries/datacenter.webp')}}" alt="" loading="lazy">
											</a>
										</div>
									</div>
									<div class="slide-col">
										<a href="">
											<div class="slide-content">
												Education
												<div class="underline"></div>
											</div>
											<img src="{{asset('frontend/img/industries/education.webp')}}" alt="" loading="lazy">
										</a>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="slide-col">
										<a href="">
											<div class="slide-content">
												Energy
												<div class="underline"></div>
											</div>
											<img src="{{asset('frontend/img/industries/energy.webp')}}" alt="" loading="lazy">
										</a>
									</div>
									<div class="slide-col">
										<div class="slide-row">
											<div class="slide-col">
												<a href="">
													<div class="slide-content">
														Healthcare
														<div class="underline"></div>
													</div>
													<img src="{{asset('frontend/img/industries/healthcare.webp')}}" alt=""
														loading="lazy">
												</a>
											</div>
											<div class="slide-col">
												<a href="">
													<div class="slide-content">
														Infrastructures
														<div class="underline"></div>
													</div>
													<img src="{{asset('frontend/img/industries/infrastructure.webp')}}" alt=""
														loading="lazy">
												</a>
											</div>
										</div>
										<div class="slide-row">
											<a href="">
												<div class="slide-content">
													Process Industry
													<div class="underline"></div>
												</div>
												<img src="{{asset('frontend/img/industries/process-indus.webp')}}" alt=""
													loading="lazy">
											</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="slide-col">
										<a href="">
											<div class="slide-content">
												Utility
												<div class="underline"></div>
											</div>
											<img src="{{asset('frontend/img/industries/utility.webp')}}" alt="" loading="lazy">
										</a>
									</div>
									<div class="slide-col">
										<div class="slide-row">
											<div class="slide-col">
												<a href="">
													<div class="slide-content">
														Warehouse Automation
														<div class="underline"></div>
													</div>
													<img src="{{asset('frontend/img/industries/healthcare.webp')}}" alt=""
														loading="lazy">
												</a>
											</div>
											<div class="slide-col">
												<a href="">
													<div class="slide-content">
														Roads & Transportation
														<div class="underline"></div>
													</div>
													<img src="{{asset('frontend/img/industries/roads.webp')}}" alt="" loading="lazy">
												</a>
											</div>
										</div>
										<div class="slide-row">
											<a href="">
												<div class="slide-content">
													view more
													<div class="underline"></div>
												</div>
												<img src="{{asset('frontend/img/industries/process-indus.webp')}}" alt="">
											</a>
										</div>
									</div>
								</div>

								<!-- <div class="swiper-slide">Slide 2</div>
								<div class="swiper-slide">Slide 3</div>
								<div class="swiper-slide">Slide 4</div>
								<div class="swiper-slide">Slide 5</div>
								<div class="swiper-slide">Slide 6</div>
								<div class="swiper-slide">Slide 7</div>
								<div class="swiper-slide">Slide 8</div>
								<div class="swiper-slide">Slide 9</div>
								<div class="swiper-slide">Slide 10</div>
								<div class="swiper-slide">Slide 11</div> -->
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
					</div>
				</div>
				<div class="row swiper-mobile">
					<a href="">
						<div class="slide-content">
							Building Technology
							<div class="underline"></div>
						</div>
						<img src="https://shorturl.at/dhnuE" alt="">
					</a>
					<a href="">
						<div class="slide-content">
							Industry
							<div class="underline"></div>
						</div>
						<img src="https://shorturl.at/jmw59" alt="">
					</a>
					<a href="">
						<div class="slide-content">
							Building Technology
							<div class="underline"></div>
						</div>
						<img src="https://shorturl.at/dhnuE" alt="">
					</a>
					<a href="">
						<div class="slide-content">
							Building Technology
							<div class="underline"></div>
						</div>
						<img src="https://shorturl.at/dhnuE" alt="">
					</a>
					<a href="">
						<div class="slide-content">
							Building Technology
							<div class="underline"></div>
						</div>
						<img src="https://shorturl.at/dhnuE" alt="">
					</a>
					<a href="">
						<div class="slide-content">
							Building Technology
							<div class="underline"></div>
						</div>
						<img src="https://shorturl.at/dhnuE" alt="">
					</a>
					<a href="">
						<div class="slide-content">
							Building Technology
							<div class="underline"></div>
						</div>
						<img src="https://shorturl.at/dhnuE" alt="">
					</a>
				</div>
			</div>
		</section>
		<!-- end indust gallery -->


		<!-- services Section -->
		<section class="section section--large services-section " id='services'>
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<!-- Section Title -->
						<h2 class="section-title section-title--center ">Services
							<span class='section-title__highlight'>Overview</span>
						</h2>
						<!-- End of Section Title -->
						<!-- Section Subtitle -->
						<p class="section-subtitle section-subtitle--center "> Lorem ipsum dolor sit amet, eos fierent
							pertinacia eu est elit tincidunt sadipscing te </p>
						<!-- End of Section Subtitle -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-8">
						<div class="member" data-aos="fade-down">
							<div class="icon-holder">
								<div class="icon-holder-inner">
									<i class="bi bi-buildings"></i>
								</div>
							</div>

							<div class="member-content">
								<h2>Industrial Engineering</h2>
								<p>Our experience gives you a way to improve processes or design things that are more
									efficient and waste less money, time, raw resources, manpower, and energy while
									following safety standards and regulations.</p>
								<a href="" class="read-more-btn">Read More <i
										class="bi bi-chevron-double-right"></i></a>
							</div>
							<!-- <div class="member__photo-wrapper">
						<img src="http://placehold.it/540x540" class="member__photo" alt="Member Photo">
						<div class="member__cover">
							<blockquote class="member__quote">Eum rerum, animi facilis perspiciatis iste
								molestiae, minima exercitationem quod amet! Natus dolor animi quasi, cupiditate
								harum.</blockquote>
						</div>
					</div>
					<h3 class="member__name">Matt Walden</h3>
					<p class="member__position">web designer</p> -->
							<!-- <ul class="member__socials">
						<li class="member__social">
							<a href="#" class="member__link">
								<i class="fontello-facebook"></i>
							</a>
						</li>
						<li class="member__social">
							<a href="#" class="member__link">
								<i class="fontello-twitter-bird"></i>
							</a>
						</li>
						<li class="member__social">
							<a href="#" class="member__link">
								<i class="fontello-linkedin"></i>
							</a>
						</li>
					</ul> -->
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-lg-8">
						<div class="member" data-aos="fade-down">
							<div class="icon-holder">
								<div class="icon-holder-inner">
									<i class="bi bi-robot"></i>
								</div>
							</div>

							<div class="member-content">
								<h2>Machine Engineering</h2>
								<p>The service that applies the application of AI that enables systems to learn and
									improve from experience without being explicitly programmed.</p>
								<a href="" class="read-more-btn">Read More <i
										class="bi bi-chevron-double-right"></i></a>
							</div>

						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-lg-8">
						<div class="member" data-aos="fade-down">
							<div class="icon-holder">
								<div class="icon-holder-inner">
									<i class="bi bi-pc-display-horizontal"></i>
								</div>
							</div>

							<div class="member-content">
								<h2>Software Engineering</h2>
								<p>One of the services of software engineering is the Internet of Things (IoT) services,
									which help aggregate data from physical objects and smartly use it for process
									automation and business intelligence.</p>
								<a href="" class="read-more-btn">Read More <i
										class="bi bi-chevron-double-right"></i></a>
							</div>

						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-lg-8">
						<div class="member " data-aos="fade-down">
							<div class="icon-holder">
								<div class="icon-holder-inner">
									<i class="bi bi-headset"></i>
								</div>
							</div>

							<div class="member-content">
								<h2>Consultancy</h2>
								<p>We can discover automation opportunities in our current workflow by leveraging a
									variety of tools, including robotic process automation, artificial intelligence
									(AI), and machine learning (ML).</p>
								<a href="" class="read-more-btn">Read More <i
										class="bi bi-chevron-double-right"></i></a>
							</div>

						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-lg-8">
						<div class="member" data-aos="fade-down">
							<div class="icon-holder">
								<div class="icon-holder-inner">
									<i class="bi bi-lightbulb"></i>
								</div>
							</div>

							<div class="member-content">
								<h2>Training</h2>
								<p>Segmic Engineering conducts various automation training programs specially tailored
									for professionals, corporate companies, and colleges.</p>
								<a href="" class="read-more-btn">Read More <i
										class="bi bi-chevron-double-right"></i></a>
							</div>

						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-lg-8">
						<div class="member" data-aos="fade-down">
							<div class="icon-holder">
								<div class="icon-holder-inner">
									<i class="bi bi-tools"></i>
								</div>
							</div>

							<div class="member-content">
								<h2>Maintenance</h2>
								<p>Providing periodic maintenance services is mandatory nowadays to avoid sudden and
									high equipment damage costs that lead to stopped process work in the repair
									framework.</p>
								<a href="" class="read-more-btn">Read More <i
										class="bi bi-chevron-double-right"></i></a>
							</div>
							<!-- <div class="member__photo-wrapper">
						<img src="http://placehold.it/540x540" class="member__photo" alt="Member Photo">
						<div class="member__cover">
							<blockquote class="member__quote">Eum rerum, animi facilis perspiciatis iste
								molestiae, minima exercitationem quod amet! Natus dolor animi quasi, cupiditate
								harum.</blockquote>
						</div>
					</div>
					<h3 class="member__name">Matt Walden</h3>
					<p class="member__position">web designer</p> -->
							<!-- <ul class="member__socials">
						<li class="member__social">
							<a href="#" class="member__link">
								<i class="fontello-facebook"></i>
							</a>
						</li>
						<li class="member__social">
							<a href="#" class="member__link">
								<i class="fontello-twitter-bird"></i>
							</a>
						</li>
						<li class="member__social">
							<a href="#" class="member__link">
								<i class="fontello-linkedin"></i>
							</a>
						</li>
					</ul> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Section -->
		<hr>
		<!-- tabs Section -->
		<section class="section section--skin-2 tabs-section " id='screenshots'>
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<!-- Section Title -->
						<h2 class="section-title section-title--center ">Related
							<span class='section-title__highlight'>Services</span>
						</h2>
						<!-- End of Section Title -->
						<!-- Section Subtitle -->
						<p class="section-subtitle section-subtitle--center "> Lorem ipsum dolor sit amet, eos fierent
							pertinacia eu est elit tincidunt sadipscing te </p>
						<!-- End of Section Subtitle -->
						<!-- Tabs -->
						<div class="tabs js-tabs ">
							<ul class="tabs__header">
								<li class="tabs__title">
									<a class="tabs__link" href="#firstTab">
										<img src="http://placehold.it/60x60" class="tabs__icon"
											alt="Tab icon">Artificial Intelligence</a>
								</li>
								<li class="tabs__title">
									<a class="tabs__link" href="#secondTab">
										<img src="http://placehold.it/60x60" class="tabs__icon" alt="Tab icon">
										Blockchain</a>
								</li>
								<li class="tabs__title">
									<a class="tabs__link" href="#thirdTab">
										<img src="http://placehold.it/60x60" class="tabs__icon" alt="Tab icon">
										Data Engineering </a>
								</li>
							</ul>
							<div id="firstTab" class="tabs__content" data-aos="fade-up">
								<div class="col-24" style="display: flex;">
									<div class="col-12 left-col">
										<h1>Empowering Innovation Through Artificial Intelligence</h1>
										<p>A branch of computer science that deals with the making of intelligent
											machines.
										</p>
										<button class="read-more-btn"> <i class="bi bi-chevron-right"></i> Read
											More</button>
									</div>
									<div class="col-12 right-col">
										<div class="img-container">
											<img src="{{asset('frontend/img/industries/ai.webp')}}" alt="" loading="lazy">

										</div>
									</div>
								</div>


							</div>
							<div id="secondTab" class="tabs__content">
								<div class="col-24" style="display: flex;">
									<div class="col-12 left-col">
										<h1>Transforming Industries with Blockchain Technology</h1>
										<p>Services includes but not limited to Blockchain development, NFT development,
											Web3 development and Metaverse gaming development.
										</p>
										<button class="read-more-btn"> <i class="bi bi-chevron-right"></i> Read
											More</button>
									</div>
									<div class="col-12 right-col">
										<div class="img-container">
											<img src="{{asset('frontend/img/industries/blockchain.webp')}}" alt="" loading="lazy">

										</div>
									</div>
								</div>
							</div>
							<div id="thirdTab" class="tabs__content">
								<div class="col-24" style="display: flex;">
									<div class="col-12 left-col">
										<h1>Optimizing Data for Better Insights</h1>
										<p>A full-service systems integrator that provides turnkey automation solutions
											to manufacturing companies.
										</p>
										<button class="read-more-btn"> <i class="bi bi-chevron-right"></i> Read
											More</button>
									</div>
									<div class="col-12 right-col">
										<div class="img-container">
											<img src="{{asset('frontend/img/industries/dataeng.webp')}}" alt="" loading="lazy">

										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Tabs -->
						<!-- Push -->
						<div class="push push--150  "> </div>
						<!-- End of Push -->
					</div>
				</div>

			</div>
		</section>
		<!-- End of Section -->


		<!-- Section brands section -->
		<section class="section section--large brands-section " id='gallery'>
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<!-- Section Title -->
						<h2 class="section-title section-title--center ">Clients and
							<span class='section-title__highlight'>Partners</span>
						</h2>
						<!-- End of Section Title -->
						<!-- Section Subtitle -->
						<p class="section-subtitle section-subtitle--center "> Lorem ipsum dolor sit amet, eos fierent
							pertinacia eu est elit tincidunt sadipscing te </p>
						<!-- End of Section Subtitle -->
					</div>
				</div>
			</div>
			<!-- Carousel -->
			<div class="carousel" data-aos="flip-up">
				<div class="carousel__outer">
					<div class="carousel__inner js-carousel owl-carousel">
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/ADNOC%20Logo.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:370,cg:true"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Edit screen</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/Etihad%20Logo.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:370,cg:true"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Tasks</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/Engie%20Logo%203.png/:/rs=w:370,cg:true,m"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Achievements</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/Cladtech%20Logo.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:370,cg:true"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Search</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/Exeed%20Logo.png/:/cr=t:0.04%25,l:0%25,w:100%25,h:99.92%25/rs=w:370,cg:true"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Card overlay</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/FAL%20tank%20Logo.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:370,cg:true"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Player</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/ST%20Logo.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:370,cg:true"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Dashboard</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/Centro%20Logo.png/:/cr=t:0%25,l:0.04%25,w:99.93%25,h:99.93%25/rs=w:370,cg:true,m"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Shop</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/UP%20Logo.png/:/rs=w:370,cg:true,m"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Camera</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/SS%20Logo.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:370,cg:true"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">Stats</h3>
						</div>
						<div class="carousel__slide">
							<img src="https://img1.wsimg.com/isteam/ip/b40a3688-6567-4bd6-9729-c20fa2911e56/eqate%20Logo.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:370,cg:true"
								class="carousel__image" alt="Carousel Slide Image">
							<h3 class="carousel__title">New article</h3>
						</div>
					</div>
				</div>
			</div>
			<!-- End of Carousel -->
		</section>
		<!-- End of Section -->
@endsection