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
		<title>Blaize - Password Change</title>

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

      


<section class="vh-100 main-font" style="background-image: url(img/back-login.png);  background-size: cover; background-repeat: no-repeat; background-position: center;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; border: 0px solid white !important; box-shadow: 5px 10px 18px rgba(0, 0, 0, 0.5);">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="background-image: url(img/password-change.png); border-radius: 1rem 0 0 1rem; background-size: cover; background-repeat: no-repeat; background-position: center;">

            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action="password-reset-code.php">

                  <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])) {
                    echo $_GET['token'];
                    } ?>"></input>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 fw-bold mb-0">Hello there!</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3">Set a new password.</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" value="<?php if(isset($_GET['email'])) {
            echo $_GET['email'];
          } ?>"/>
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="new_password"/>
                    <label class="form-label" for="form2Example27">New Password</label>
                  </div>

                   <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="confirm_password"/>
                    <label class="form-label" for="form2Example27">Re-enter new Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn nav-btn btn-lg btn-block" type="submit" name="password_update">Update</button>
                  </div>

                  
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>

                </div>
              </div>

            </div>

          </div>
          <br>
          <br>
          
        </div>
      </div>
    </div>

  </section>

  <div class="container ">
  <div class="row">
<div class="alert" id="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Error:</strong> Wrong email address or password.
          </div>
        </div>
      </div>

<?php
      $conn = new mysqli("localhost","root","","blaize");

      if ($conn -> connect_error){
        echo "Error: Could not connect".$conn -> connect_error;
        exit();
      }
      //session_start();

    // When form submitted, check and create user session.
      if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        $email = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        // Check user is exist in the database
        $query = "SELECT * FROM `site_user` WHERE email='$email'
        AND Password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
          $_SESSION['email'] = $email;
          // Redirect to user dashboard page
          echo "<script>window.location.replace('index.php');</script>";
        } else {
          // Generate JavaScript code to change opacity of div
          echo '<script>
          var div = document.getElementById("alert");
      div.style.opacity = "1";
          </script>';
        }
      }
      ?>

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



