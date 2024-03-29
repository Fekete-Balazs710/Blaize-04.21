	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Blaize - Contact</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 



		<!-- flaticon CSS -->
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<!-- font awesome CSS -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!-- swiper CSS -->
		<link rel="stylesheet" href="css/slick.css">


		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/style.css">
		</head>

		<?php 

		iconv_set_encoding("internal_encoding", "UTF-8");

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'phpmailer/src/Exception.php';
		require 'phpmailer/src/PHPMailer.php';
		require 'phpmailer/src/SMTP.php';

		if(isset($_POST["send"])) {

			$mail = new PHPMailer(true);

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'blaize.webshop@gmail.com';
			$mail->Password = 'arhbxzswbneciggq';
			$mail->SMTPSecure = 'ssl';
			$mail->Port = 465;


			$mail->setFrom('fekete.balazs710@gmail.com');

			$mail->addAddress($_POST["email"]);

			$mail->isHTML(true);


			$mail->Subject = utf8_decode($_POST["subject"]);
			$mail->Body = utf8_decode($_POST["message"]);

			$mail->send();

			echo "  
			<script>
			alert('Email sent successfuly.');
			</script>
			";
}

		?>

		<body>

			<!-- Start Header Area -->

			<div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 80px;">

				<header class="header_area sticky-header is-sticky">
					<div class="main_menu">
						<nav class="navbar navbar-expand-lg navbar-light main_box">
							<div class="container">
								<!-- Brand and toggle get grouped for better mobile display -->
								<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
								<ul class="nav navbar-nav menu_nav ml-auto main-font">
									<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
									<li class="nav-item">
										<a href="about.php" class="nav-link">About us</a>
										
									</li>
									
									<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									
									<li class="nav-item"><a href="favourites.php" class="cart"><span class="ti-heart"></span></a></li>
									<li class="nav-item"><a href="shopping-cart.php" class="cart"><span class="ti-shopping-cart"></span><span class="cart-number">7</span></a></li>
									
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li class="nav-item">
										<a href="login.php" class="nav-btn text-uppercase main-font">Login</a>
									</li>
								</ul>


							</div>
						</div>
					</nav>
				</div>

			</header>
		</div>

		<!-- Back to top button-->
		<a href="#" class="back-to-top nav-btn text-uppercase main-font justify-content-center"><span class="ti-arrow-up"></span></a>

		<!-- End Header Area -->


		<section class="subscribe_area" style="padding-top: 15rem; padding-bottom: 4rem">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="subscribe_area_text text-center">
							<h5>You can reach us at any time.</h5>
							<h2>Contact</h2>

						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- start features Area -->
		<section class="features-area section_gap">
			<div class="container">
				<div class="row features-inner">
					<!-- single features -->
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="single-features">
							<div class="f-icon">
								<img src="img/features/f-icon5.png" alt="">
							</div>
							<br>
							<h6>Address</h6>
							<p>Cluj-Napoca, Ion Budai Deleanu</p>
						</div>
					</div>
					<!-- single features -->
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="single-features">
							<div class="f-icon">
								<img src="img/features/f-icon6.png" alt="">
							</div>
							<br>
							<h6>Phone</h6>
							<p>+40 752 268 148</p>
						</div>
					</div>
					<!-- single features -->
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="single-features">
							<div class="f-icon">
								<img src="img/features/f-icon7.png" alt="">
							</div>
							<br>
							<h6>Email</h6>
							<p>blaize.contact@gmail.com</p>
						</div>
					</div>
					<!-- single features -->
					
				</div>
			</div>
		</section>
		<!-- end features Area -->


		<!-- Map Begin -->

		<section class="features-area">
			<div class="container">
				<div class="map main-font">
					<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1149.2084840832333!2d23.61316812990328!3d46.75910483387588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1shu!2sro!4v1679662439583!5m2!1shu!2sro"
					height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
					<div class="map-inside">
						<i class="icon_pin"></i>
						<div class="inside-widget">
							<h4>Blaize</h4>
							<ul>
								<li>Phone: +40 752 268 148</li>
								<li>Address: Cluj-Napoca, Ion Budai Deleanu</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Map End -->

		<br>
		<br>
		<section class="subscribe_area section-gap section_padding">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="subscribe_area_text text-center">
							<h5>Tracking system</h5>
							<h2>Track your order.</h2>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="ender order number"
								aria-label="Recipient's username" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<a href="#" class="input-group-text btn_2" id="basic-addon2">Verify</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="main-font">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col col-xl-10">

						<div class="row g-0">

							<div class="col-md-12 col-lg-12 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">

									<form action="contact.php" method="post">

										<div class="d-flex align-items-center mb-3 pb-1">
											<span class="h1 fw-bold mb-0">Write something nice to us!</span>
										</div>

										<h5 class="fw-normal mb-3 pb-3">Reach us at any time.</h5>
										<div class="row">
											<div class="form-outline mb-4 col-md-6 col-lg-6">
												<input type="text" id="form2Example17" class="form-control form-control-lg" name="name" required/>
												<label class="form-label" for="form2Example17">Name</label>

											</div>

											<div class="form-outline mb-4 col-md-6 col-lg-6">
												<input type="email" id="form2Example17" class="form-control form-control-lg" name="email" required/>
												<label class="form-label" for="form2Example17">Email address</label>
											</div>
										</div>

										<div class="form-outline mb-4">
											<input type="text" id="form2Example17" class="form-control form-control-lg" name="subject" required/>
											<label class="form-label" for="form2Example17">Subject</label>
										</div>

										<div class="form-outline mb-4">
											<textarea rows="4" class="form-control form-control-lg" name="message" required></textarea>
											<label class="form-label" for="form2Example17">Message</label>
										</div>
										
										

										<div class="pt-1 mb-4">
											<button class="btn nav-btn btn-lg btn-block" type="submit" name="send">Send message</button>
										</div>


									</form>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="container ">
			<div class="row">
				<div class="alert2" id="alert2">
					<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
					<strong>Good news:</strong> Your email has been sent successfully.
				</div>
			</div>
		</div>

		<!--::footer_part start::-->
		<footer class="footer_part">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-sm-6 col-lg-2">
						<div class="single_footer_part">
							<h4>Top Products</h4>
							<ul class="list-unstyled">
								<li><a href="">Managed Website</a></li>
								<li><a href="">Manage Reputation</a></li>
								<li><a href="">Power Tools</a></li>
								<li><a href="">Marketing Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="single_footer_part">
							<h4>Quick Links</h4>
							<ul class="list-unstyled">
								<li><a href="">Jobs</a></li>
								<li><a href="">Brand Assets</a></li>
								<li><a href="">Investor Relations</a></li>
								<li><a href="">Terms of Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="single_footer_part">
							<h4>Features</h4>
							<ul class="list-unstyled">
								<li><a href="">Jobs</a></li>
								<li><a href="">Brand Assets</a></li>
								<li><a href="">Investor Relations</a></li>
								<li><a href="">Terms of Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-2">
						<div class="single_footer_part">
							<h4>Resources</h4>
							<ul class="list-unstyled">
								<li><a href="">Guides</a></li>
								<li><a href="">Research</a></li>
								<li><a href="">Experts</a></li>
								<li><a href="">Agencies</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-lg-4">
						<div class="single_footer_part">
							<h4>Newsletter</h4>
							<p>Heaven fruitful doesn't over lesser in days. Appear creeping
							</p>
							<div id="mc_embed_signup">
								<form target="_blank"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="subscribe_form relative mail_part">
								<input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
								class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
								onblur="this.placeholder = ' Email Address '">
								<button type="submit" name="submit" id="newsletter-submit"
								class="email_icon newsletter-submit button-contactForm" style="padding: 10px">subscribe</button>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="copyright_part">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="copyright_text">
							<P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="footer_icon social_icon">
								<ul class="list-unstyled">
									<li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
									<li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--::footer_part end::-->

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/owl.carousel.min.js"></script>			
		<script src="js/jquery.sticky.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>

		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.slicknav.js"></script>
		<script src="js/mixitup.min.js"></script>

		<script src="js/parallax.min.js"></script>	
		<script src="js/mail-script.js"></script>	
		<script src="js/main.js"></script>	
	</body>
	</html>



