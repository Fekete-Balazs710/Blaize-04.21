<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "blaize";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
	die('Could not Connect MySql Server:' .mysql_error());
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function send_password_reset($get_name, $get_email,$token)
{


	$mail = new PHPMailer(true);

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'blaize.webshop@gmail.com';
	$mail->Password = 'arhbxzswbneciggq';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;


	$mail->setFrom('blaize.webshop@gmail.com');

    //$mail->addAddress($_POST["email"]);
	$mail->addAddress('fekete.balazs710@gmail.com');

	$mail->isHTML(true);


	$mail->Subject = utf8_decode('Blaize - Recover password');

	$email_template = '<html>
<body style="Margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#3b3b3b;">
  <center class="wrapper" style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#3b3b3b;">
    <table bgcolor="#f3f2f0;" border="0" cellpadding="0" cellspacing="0" style="background-color:#f3f2f0;" width="100%">
      <tbody>
        <tr>
          <td width="100%">
            <div class="webkit" style="max-width:1000px;Margin:0 auto;">
              <table align="center" border="0" cellpadding="0" cellspacing="0" class="outer" style="border-spacing:0;Margin:0 auto;width:100%;max-width:2000px;">
                <tbody>
                  <tr>
                    <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;"><!-- ======= start header ======= -->
                      <!-- ======= end header ======= --><!-- ======= start two column ======= -->
                      <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style=" border-left:1px solid #e8e7e5; border-right:1px solid #e8e7e5" width="100%">
                        <tbody>
                          <tr>
                            <td align="center" background="img/back-login.png" bgcolor="#3b3b3b" class="two-column" height="260" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;text-align:center;font-size:0" valign="top" width="2000">
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
                                                  <p style="font-size:30px; text-decoration:none; color:#ffffff; font-family: Poppins, sans-serif; text-align:left"><strong>Dear '.$get_name.',</strong></p>

                                                  <p style="font-size:14px; text-decoration:none; color:#ffffff; font-family: Poppins, sans-serif; text-align:left; line-height:18px">We are working hard to reset your password. Please click on the link to set a new password.  
                                                  </p>
                                                  <br/><br/><br/><br/><br/>

                                                  <table align="center" border="0" cellpadding="0" cellspacing="0" style="margin-left:0;">
                                                    <tbody>
                                                      <tr>
                                                        <td align="center">
                                                          <table border="0" cellpadding="0" cellspacing="0" style="Margin:0 auto;">
                                                            <tbody>
                                                              <tr>
                                                                <td align="center" bgcolor="#ffffff" height="40" style="-moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px;" width="220"><a class="button_link" href="http://localhost/Blaize/password-change.php?token='.$token.'&email='.$get_email.'" style="width:250; display:block; text-decoration:none; border:0; text-align:center; font-weight:bold;font-size:13px; font-family: Poppins, sans-serif; color: #DF2E38">Recover password &raquo; </a></td>
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

	$mail->Body = $email_template;

	$mail->send();

	header("Location: /Blaize/forgotpassword-success.php");                    

}

if(isset($_POST['password-reset-link'])) {

	$email = mysqli_escape_string($conn, $_POST['email']);
	$token = md5(rand());

	$check_email = "SELECT email, first_name FROM site_user WHERE email='$email' LIMIT 1";
	$check_email_run = mysqli_query($conn, $check_email);

	if(mysqli_num_rows($check_email_run) > 0)
	{
		$row = mysqli_fetch_array($check_email_run);
		$get_name = $row['first_name'];
		$get_email = $row['email'];

		$update_token = "UPDATE site_user SET token='$token' WHERE email='$get_email' LIMIT 1";
		$update_token_run = mysqli_query($conn, $update_token);

		if($update_token_run)
		{

			send_password_reset($get_name, $get_email, $token);

			$_SESSION['status'] = "We emailed you a password reset link";
			//header("Location: forgotpassword.php");

			echo "We have not found the given email address.";

			exit(0);

			echo $email;

		} else {
			$_SESSION['status'] = "Error: Token is not updated.";
		//header("Location: forgotpassword.php");

			echo "We have not found the given email address.";

			exit(0);
		}





	} else {
		$_SESSION['status'] = "No Email found.";
		//header("Location: forgotpassword.php");
		
		echo "We have not found the given email address.";
		
		exit(0);
	}

}

if(isset($_POST['password_update'])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
	$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

	$token = mysqli_real_escape_string($conn, $_POST['password_token']);

	if(!empty($token))
	{

		if(!empty($email) && !empty($new_password) && !empty($confirm_password))
		{

			//Token is valid or not
			$check_token = "SELECT token FROM site_user WHERE token='$token' LIMIT 1";
			$check_token_run = mysqli_query($conn, $check_token);

			$new_password_md = md5($new_password);

			if(mysqli_num_rows($check_token_run) > 0)
			{

				if($new_password == $confirm_password)
				{

					$update_password = "UPDATE site_user SET password='$new_password_md' WHERE token='$token' LIMIT 1";
					$update_password_run = mysqli_query($conn, $update_password);

					if($update_password_run)
					{

						$_SESSION['status'] = "Password updated.";
						header("Location: password-change-success.php");


						exit(0);

					}
					else 
					{
						$_SESSION['status'] = "Error: password not modified.";
						header("Location: password-change.php?token=$token&email=$email");

						exit(0);
					}

				}
				else 
				{
					$_SESSION['status'] = "The given passwords do not match.";
					header("Location: password-change.php?token=$token&email=$email");

					exit(0);
				}

			}
			else 
			{
				$_SESSION['status'] = "Error: Wrong token.";
				header("Location: password-change.php?token=$token&email=$email");

				exit(0);
			}

		}
		else
		{
			$_SESSION['status'] = "Error: All fields are necessary.";
			header("Location: password-change.php?token=$token&email=$email");


			exit(0);
		}

	} 
	else 
	{
		$_SESSION['status'] = "Error: No available token.";
		header("Location: password-change.php");
		
		
		exit(0);
	}
}

?>
