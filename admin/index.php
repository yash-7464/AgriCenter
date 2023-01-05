
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 


<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign In</h2>
		<form action="#" method="post">
			<div class="username">
				<span class="username">Email:</span>
				<input type="text" name="email" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Remember me<br>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" name="b1" value="Sign In">
			</div>
			<?php
			
			session_start();
			if(isset($_POST["b1"]))
			{
				extract($_POST);
					include("connect.php");
			 $q="select * from tbl_admin where email='$email' and password='$password'";
				$p=mysqli_query($con,$q);
	
				$n=mysqli_num_rows($p);
						
				if($n>0)
				{
					$res=mysqli_fetch_array($p);
					echo $res[1];
					
					$_SESSION["u_name"]=$res[1];
					$_SESSION["u_image"]=$res[8];
					
					header("location:home.php");
				}
				else
				{
					echo "Invalid Email and password";
				}
			}
			?>
			<div class="clearfix"></div>
		</form>
				<div class="back">
					<a href="home.php">Back to home</a>
				</div>
				<div class="footer">
					<p>&copy; 2020 AgriCenter. Design by Yash patel & Dhruv patel</p>
				</div>
	</div>
	</div>
	</div>
</body>
</html>