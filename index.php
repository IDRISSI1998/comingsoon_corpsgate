<?php 
if(isset($_POST['submit'])){
    $to = "idrissi.ismail1998@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = "Dear Client";
    $last_name = "";
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . "";
    $message2 = "Thank you Dear client for believing in us, we will contact you shortly";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon 12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
			

	<div class="flex-w flex-str size1 overlay1">
		<div class="flex-w flex-col-sb wsize1 bg0 p-l-65 p-t-37 p-b-50 p-r-80 respon1">
			<div class="wrappic1">
				<a href="#">
					<img src="images/icons/logo.png" alt="IMG">
				</a>
			</div>		
	
			<div class="w-full flex-c-m p-t-80 p-b-90">
				<div class="wsize2">
					<h3 class="l1-txt1 p-b-34 respon3">
						Coming Soon
					</h3>

					<p class="m2-txt1 p-b-46">
						Follow us for update now!
					</p> 




					<form  class="contact100-form validate-form m-t-10 m-b-10" action="" method="post">
						<div class="wrap-input100 validate-input m-lr-auto-lg" data-validate = "Email is required: ex@abc.xyz">
							<input class="s2-txt1 placeholder0 input100 trans-04" type="text" name="email" placeholder="Email Address"><br>

							<input type="submit" name="submit" value="Submit" class="flex-c-m ab-t-r size2 hov1">
								<i class="zmdi zmdi-long-arrow-right fs-30 cl1 trans-04" value="Submit"></i>
							</input>
						</div>	
					</form>


				</div>
			</div>
			
			<div class="flex-w">
				<a href="https://www.facebook.com/Corps-G%C3%A2t%C3%A9-106918937900071" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="https://instagram.com/corpsgate?igshid=96pjpd53c7ws" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
					<i class="fa fa-instagram"></i>
				</a>

				<a href="https://wa.me/message/BL6CY64EDR4AM1" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
					<i class="fa fa-whatsapp"></i>
				</a>

				<a href="mailto:corpsgate@gmail.com" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-10">
					<i class="fa fa-envelope"></i>
				</a>
			</div>
		</div>
			

		<div class="wsize1 simpleslide100-parent respon2">
			<!--  -->
			<div class="simpleslide100">
				<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg01.jpg');"></div>
				<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg02.jpg');"></div>
				<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg03.jpg');"></div>
				<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg04.jpg');"></div>
			</div>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
