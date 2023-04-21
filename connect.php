	<?php

	//User data

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	$regDate = date("Y-m-d H:i:s");

	//Database connection
	$conn = new mysqli('localhost', 'root', '', 'blaize');

	if($conn -> connect_error) {
		die('Connection failed: '.$conn->connect_error);
	} else {


		//Insert data into site_user table

		$sql_insert_user = "INSERT INTO site_user (`phone`, `password`, `first_name`, `last_name`, `email`, `regdate`) VALUES('$phone','".md5($password1)."','$firstname', '$lastname', '$email', '$regDate')";
        if($conn -> query($sql_insert_user) === TRUE){
            //echo "Record Inserted Successfully!"."<br>";
        }else{
            echo "Unable to Insert Data"."<br>";
        }

	}

	$conn -> close();

	//PHP registration info email

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'phpmailer/src/Exception.php';
		require 'phpmailer/src/PHPMailer.php';
		require 'phpmailer/src/SMTP.php';

		
  		$mail = new PHPMailer(true);

  		$mail->isSMTP();
  		$mail->Host = 'smtp.gmail.com';
  		$mail->SMTPAuth = true;
  		$mail->Username = 'blaize.webshop@gmail.com';
  		$mail->Password = 'arhbxzswbneciggq';
  		$mail->SMTPSecure = 'ssl';
  		$mail->Port = 465;


  		$mail->setFrom('blaize.webshop@gmail.com');

      //ide kell a kapcsolattarto szemely email cime
  		$mail->addAddress('fekete.balazs710@gmail.com');

  		$mail->isHTML(true);

      $subject =  utf8_decode("Blaize - Successful Registration");
      $body =  '<html>
<body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#3b3b3b;">
  <center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#3b3b3b;">
    <table bgcolor="#f3f2f0;" border="0" cellpadding="0" cellspacing="0" style="background-color:#f3f2f0;" width="100%">
      <tbody>
        <tr>
          <td width="100%">
            <div class="webkit" style="max-width:1000px;Margin:0 auto;">
              <table align="center" border="0" cellpadding="0" cellspacing="0" class="outer" style="border-spacing:0;Margin:0 auto;width:100%;max-width:1000px;">
                <tbody>
                  <tr>
                    <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;"><!-- ======= start header ======= -->
                      <!-- ======= end header ======= --><!-- ======= start two column ======= -->
                      <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style=" border-left:1px solid #e8e7e5; border-right:1px solid #e8e7e5" width="100%">
                        <tbody>
                          <tr>
                            <td align="center" background="img/back-login.png" bgcolor="#3b3b3b" class="two-column" height="260" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0" valign="top" width="600">
                              <div>
                                <div class="column" style="width:100%;max-width:500px;display:inline-block;vertical-align:top;">
                                  <table style="border-spacing:0" width="100%">
                                    <tbody>
                                      <tr>
                                        <td class="inner" style="padding-top:20px;padding-bottom:10px; padding-right:10px;padding-left:30px;">
                                          <table class="contents1" style="border-spacing:0; width:100%">
                                            <tbody>
                                              <tr>
                                                <td align="center" style="padding-top:20px; padding-right:30px" valign="middle">
                                                  <p style="font-size:30px; text-decoration:none; color:#ffffff; font-family: Poppins, sans-serif; text-align:left"><strong>Dear '.$firstname.',</strong></p>

                                                  <p style="font-size:14px; text-decoration:none; color:#ffffff; font-family: Poppins, sans-serif; text-align:left; line-height:18px">Thank you for being part in our journey at Blaize Webshop! Remember to use your special 25% discount code: QM78SA  
                                                  </p>
                                                  <br/><br/><br/><br/><br/>

                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin-left:0;">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                                                            <tbody>
                                                              <tr>
                                                                <td align="center" bgcolor="#ffffff" height="40" style="-moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px;" width="220"><a class="button_link" href="http://localhost/Blaize/shop.php" style="width:220; display:block; text-decoration:none; border:0; text-align:center; font-weight:bold;font-size:13px; font-family: Poppins, sans-serif; color: #DF2E38">Discover our store &raquo; </a></td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- ======= end two column ======= --><!-- ======= start footer ======= -->
                      <br>
                      <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                          <tr>
                            <td class="two-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0;">
                              <div class="column" style="width:100%;max-width:350px;display:inline-block;vertical-align:top;">
                                <table class="contents" style="border-spacing:0; width:100%">
                                  <tbody>
                                    <tr>
                                      <td align="right" style="padding-top:0;padding-bottom:0;padding-right:10px;padding-left:0;" width="39%"><a href="#" target="_blank" style="text-decoration: none;"><p style="color:#DF2E38; font-size:25px; font-weight: bold; text-align:left; font-family: Poppins; text-decoration: none;">Blaize</p></a></td>
                                      <td align="left" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" valign="middle" width="61%">
                                        <p style="color:#787777; font-size:13px; text-align:left; font-family: Poppins, sans-serif">Don&#39;t want our emails? Click here to unsubscribe.</p>

                                        <p style="color:#787777; font-size:13px; text-align:left; font-family: Poppins, sans-serif">www.blaize.com</p>

                                        <p style="color:#787777; font-size:13px; text-align:left; font-family: Poppins, sans-serif">Blaize &copy; 2023</p>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>


                            </td>
                          </tr>
                          <tr>
                            <td height="30">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- ======= end footer ======= --></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </center>
  </body>
  </html>';

  		$mail->Subject = $subject;
  		$mail->Body = $body;

  		$mail->send();

	?>

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
		<title>Blaize - Success</title>

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

			<link rel="stylesheet" href="css/slick.css">
			<link rel="stylesheet" href="css/price_rangs.css">
		</head>
		<body>


		<!-- End Header Area -->


		<section class="vh-100 main-font" style="background-image: url(img/back-login.png);  background-size: cover; background-repeat: no-repeat; background-position: center;">
			<div class="container py-5 h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col col-xl-10">
						<div class="card" style="border-radius: 1rem; border: 0px solid white !important; box-shadow: 5px 10px 18px rgba(0, 0, 0, 0.5);">
							<div class="row g-0">

								<div class="col-md-6 col-lg-7 d-flex align-items-center">
									<div class="card-body p-4 p-lg-5 text-black">

										<form action="connect.php" method="POST">

											<div class="d-flex align-items-center mb-3 pb-1">
												<span class="h1 fw-bold mb-0">Success!</span>
											</div>

											<h5 class="fw-normal mb-3 pb-3">Thank you for your registration.</h5>




											<div class="pt-1 mb-4">
												<a href="login.php"><button class="btn nav-btn btn-lg btn-block" type="button">Sign in</button></a>
											</div>

											
												<a href="#!" class="small text-muted">Terms of use.</a>
												<a href="#!" class="small text-muted">Privacy policy</a>
											</form>

										</div>
									</div>

									<div class="col-md-6 col-lg-5 d-none d-md-block" style="background-image: url(img/utopia.jpg); border-radius: 0rem 1rem 1rem 0rem; background-size: cover; background-repeat: no-repeat; background-position: center;">

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



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
			<script src="js/price_rangs.js"></script>	
		</body>
		</html>



