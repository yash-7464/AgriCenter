<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Bonfire a Ecommerce Category Flat Bootstarp Responsive Website Template | Account :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Bonfire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<script>
		$(document).ready(function(c) {
			$('.alert-close').on('click', function(c) {
				$('.message').fadeOut('slow', function(c) {
					$('.message').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function(c) {
			$('.alert-close1').on('click', function(c) {
				$('.message1').fadeOut('slow', function(c) {
					$('.message1').remove();
				});
			});
		});
	</script>

	<script language="javascript">
		function validateForm() {
			var c = document.forms["myForm"].length;
			for (i = 0; i < c - 3; i++) {
				var m = document.forms["myForm"].elements[i].placeholder;
				var x = document.forms["myForm"].elements[i].value;
				if (x == "") {
					alert(m + " must be filled out");
					document.forms["myForm"].elements[i].focus();
					return false;
				}
			}
		}
	</script>

</head>

<body>
	<!--header-->
	<?php
	include("header.php");
	?>

	<div class="container">
		<div class="account">
			<h2 class="account-in">Registration</h2>
			<form method="post" action="" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">

				<div>
					<span>First Name*</span>
					<input type="text" name="f1" required>
				</div>

				<div>
					<span>Middle Name*</span>
					<input type="text" name="m1" required>
				</div>

				<div>
					<span>Last Name*</span>
					<input type="text" name="l1" required>
				</div>

				<div>
					<span>Gender*</span>
					<input type="radio" name="radio" value="male" required>Male
					<input type="radio" name="radio" value="female" required>Female
				</div>

				<div>
					<span>Email*</span>
					<input type="email" style="
    padding: 0.7em;
    width: 60%;
    background: none;
    border: 1px solid #D1D1D1;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -o-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    outline: none;
    color: #464646;
    font-size: 1em;" class="email" name="email" required>
				</div>

				<div>
					<span>Contact*</span>
					<input type="text" name="contact" minlength="10" maxlength="11" required>
				</div>

				<div>
					<span>Address*</span>
					<textarea name="address" required> </textarea>
				</div>

				<div>
					<span>Pincode*</span>
					<input type="text" name="pincode" minlength="6" required>
				</div>

				<div>
					<span>City*</span>
					<input type="text" name="city" required>
				</div>

				<div>
					<span>State*</span>
					<input type="text" name="state" required>
				</div>

				<div>
					<span>Country*</span>
					<input type="text" name="country" required>
				</div>

				<div>
					<span>User Name*</span>
					<input type="text" name="uname" required>
				</div>

				<div>
					<span class="word">Password*</span>
					<input type="password" name="password" minlength="6" required>
				</div>

				<input type="submit" value="Login" name="b1" required>
			</form>

		</div>
		<?php
		if (isset($_POST["b1"])) {
			include("connect.php");

			extract($_POST);

			$q = mysqli_query($con, "insert into tbl_registration value(NULL, '$f1', '$m1', '$l1', '$radio', '$email', $contact, '$address', $pincode, '$city', '$state', '$country', '$uname', $password)");

			if ($q > 0)
				echo "<script> window.location.href='login.php'; </script>";
			else
				echo "Error";
		}
		?>

	</div>
	<!---->
	<?php
	include("footer.php");
	?>
</body>

</html>