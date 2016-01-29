<?php

include_once($_SERVER['DOCUMENT_ROOT']."/config.php");

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Toelettatura Casalmaggiore</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body">Happy Dogs</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Home</a></li>
                        <li><a href="#service">Servizi</a></li>
                        <li><a href="#portfolio">Foto</a></li>
                        <li><a href="#testimonials">Testimonianze</a></li>
                        <li><a href="#contact">Contattami</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated fadeInDown">Happy Dogs</h2>
                                <span class="animated fadeInDown">Casalmaggiore - Sabrina Barbieri</span>
                                <a href="https://www.facebook.com/Happy-Dogs-di-sabrina-barbieri-729783137104775/" class="btn btn-blue btn-effect">Facebook</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>BLUE Onepage HTML5 Template</h2>
                                <span>Clean and Professional one page Template</span>
                                <a href="#" class="btn btn-blue btn-effect">Join US</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>BLUE Onepage HTML5 Template</h2>
                                <span>Clean and Professional one page Template</span>
                                <a href="#" class="btn btn-blue btn-effect">Join US</a>
                            </div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
			
			<!-- about section -->
			<section id="about" >
				<div class="container">
					<div class="row">
						<div id="myCarousel" class="carousel slide col-md-10 col-md-offset-1 wow animated fadeInRight" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						  <li data-target="#myCarousel" data-slide-to="1"></li>
						  <li data-target="#myCarousel" data-slide-to="2"></li>
						  <li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>
					
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<?php
							/* PHP SDK v5.0.0 */
							/* make the API call */
							$response = $fb->get("/729783137104775/posts", "466576463534668|bf7744806e9352368d3e9e965647d5ea");
							$graphObject = $response->getGraphEdge();
							/* handle the result */
							$graphJSON = $graphObject->asJson();
							$arr = json_decode($graphJSON, true);
							for($i = 0; $i < 4; $i++)
							{
								if($i == 0)
									echo "<div class='item active'>";
								else
									echo "<div class='item'>";
								echo "<div class='welcome-block'>";
								echo "<h3>News</h3>";
								echo "<div class='message-body'>";
								echo '<img src="https://graph.facebook.com/729783137104775/picture?access_token=466576463534668|bf7744806e9352368d3e9e965647d5ea&width=280&height=280" class="pull-left" alt="member">';
								echo "<p>";
								$messaggio = $arr[$i]["story"];
								if(StringContains("http", $messaggio))
								{
									$linkstring = get_string_between($messaggio, "http", " ");
									foreach($linkstring as $link)
									{
										$messaggio = str_replace("http$link", "<a href='http$link'>http$link</a>", $messaggio);
									}
								}
								echo $messaggio;
								echo "</p>";
								echo "</div>";
								echo '<a href="https://facebook.com/'.$arr[$i]["id"].'" class="btn btn-border btn-effect pull-right">Guarda su facebook</a>';
								echo "</div></div>";
								$messaggio = "";
							}
							?>
						</div>
					</div>
				</div>
			</section>
			<!-- end about section -->
			
			
			<!-- Service section -->
			<section id="service">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">Service</h2>
							<p class="wow animated bounceInRight">The Key Features of our Job</p>
						</div>
						
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-home fa-3x"></i>
								</div>
								<h3>Support</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-tasks fa-3x"></i>
								</div>
								<h3>Well Documented</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h3>Design UI/UX</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
							</div>
						</div>
					
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
							<div class="service-item">
								<div class="service-icon">
									<i class="fa fa-heart fa-3x"></i>
								</div>
								
								<h3>Web Security</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>							
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- end Service section -->
			
			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Foto</h2>
							<p>Le ultime foto riguardanti il negozio</p>
						</div>
						<ul class="project-wrapper wow animated fadeInUp">
							<?php
							$photoJSON = file_get_contents("https://graph.facebook.com/729783137104775/photos?access_token=466576463534668|bf7744806e9352368d3e9e965647d5ea&type=uploaded");
							$arrPhoto = json_decode($photoJSON, true);
							for($i = 0; $i < 6; $i++)
							{
								?>
								<li class="portfolio-item">
									<img src="<?php echo "https://graph.facebook.com/".$arrPhoto["data"][$i]["id"]."/picture?width=290&height=381"; ?>" class="img-responsive" alt="">
									<ul class="external">
										<li><a class="fancybox" title="Immagine" rel="works" href="<?php echo "https://graph.facebook.com/".$arrPhoto["data"][$i]["id"]."/picture?type=normal"; ?>"><i class="fa fa-search"></i></a></li>
										<li><a href="https://facebook.com/<?php echo $arrPhoto["data"][$i]["id"] ?>"><i class="fa fa-link"></i></a></li>
									</ul>
								</li>
								<?php
							}
							?>
						</ul>
						
					</div>
				</div>
			</section>
			<!-- end portfolio section -->
			
			<!-- Testimonial section -->
			<section id="testimonials" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Testimonianze</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<?php
								$responseTestimonianze = $fb->get("/729783137104775/tagged", "466576463534668|bf7744806e9352368d3e9e965647d5ea");
								$graphObjectTestimonianze = $responseTestimonianze->getGraphEdge();
								$graphTestimonianzeJSON = $graphObjectTestimonianze->asJson();
								
								$arrTestimonianze = json_decode($graphTestimonianzeJSON, true);
								for($i = 0; $i < 3; $i++)
								{
								?>
								<div class="testimonial-item text-center">
									<img src="https://graph.facebook.com/729783137104775/picture?access_token=466576463534668|bf7744806e9352368d3e9e965647d5ea&width=280&height=280" alt="Page Image">
									<div class="clearfix">
										<span>&nbsp;</span>
										<p><?php echo $arrTestimonianze[$i]["message"]; ?></p>
									</div>
								</div>
								<?php
								}
								?>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			
			<!-- Price section --
			<section id="price">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Price</h2>
							<p>Our price for your company</p>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp">
							<div class="price-table text-center">
								<span>Silver</span>
								<div class="value">
									<span>$</span>
									<span>24,35</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li>No Bonus Points</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
							<div class="price-table featured text-center">
								<span>Gold</span>
								<div class="value">
									<span>$</span>
									<span>50,00</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li>Free Trial</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.8s">
							<div class="price-table text-center">
								<span>Diamond</span>
								<div class="value">
									<span>$</span>
									<span>123,12</span><br>
									<span>month</span>
								</div>
								<ul>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li>All Bonus Points</li>
									<li><a href="#">sign up</a></li>
								</ul>
							</div>
						</div>
		
					</div>
				</div>
			</section>
			<!-- end Price section -->
			
			<!-- Social section -->
			<section id="social" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Seguimi</h2>
								<p>Potrai così sapere tutte le novità.</p>
							</div>
							
							<ul class="social-button">
								<li class="wow animated zoomIn"><a href="https://www.facebook.com/Happy-Dogs-di-sabrina-barbieri-729783137104775/"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
								<!--<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>		-->					
							</ul>
							
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			
			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Contattami</h2>
							<p>Lascia un messaggio</p>
						</div>
						
						
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="#" method="post">
								<div class="input-field">
									<input type="text" name="name" id="name" class="form-control" placeholder="Il tuo nome...">
								</div>
								<div class="input-field">
									<input type="email" name="email" id="email" class="form-control" placeholder="La tua email...">
								</div>
								<div class="input-field">
									<input type="text" name="subject" id="subject" class="form-control" placeholder="Oggetto...">
								</div>
								<div class="input-field">
									<textarea name="message" id="message" class="form-control" placeholder="Messaggio..."></textarea>
								</div>
						       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Invia</button>
							</form>
						</div>
						
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>Contact Us</h3>						
								<p><i class="fa fa-pencil"></i>Happy Dogs<span>Casalmaggiore 26041</span> <span>VIA AZZIO PORZIO, 118 </span><span>Cremona, Italia</span></p><br>
								<p><i class="fa fa-phone"></i>Cell: 3385822105 - Fisso: 0375705436 </p>
								<p><i class="fa fa-envelope"></i>website@yourname.com</p>
							</address>
						</div>
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
			
			<section id="google-map">
				<div id="map-canvas" class="wow animated fadeInUp"></div>
			</section>
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="https://www.facebook.com/Happy-Dogs-di-sabrina-barbieri-729783137104775/"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
							</ul>
						</div>
						
						<p>Copyright &copy; <?php echo date("Y"); ?> Design and Developed By <a href="https://github.com/gegge"><i class="fa fa-github"></i> Elle</a> </p>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
		<!-- Colorbox -->
		<link rel="stylesheet" href="js/colorbox/colorbox_css.css" />
		<script src="js/colorbox/jquery.colorbox.js"></script>
		
    </body>
</html>