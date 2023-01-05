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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>				
</head>
<body>
  <!--header-->
	<?php
		include("header.php");
	?>
	
	<div class="container">
		<div class="account">
			<h2 class="account-in">Frequently Asked Question</h2>
				<form method='post' action="">
				
				<div>
					<span>User Name*</span>
					<input type="text" name="u_name">
				</div>	
				
				<div>
					<span>Email*</span>
					<input type="text" name="email">
				</div>
				
				<div>
					<span>Contact*</span>
					<input type="text" name="contact">
				</div>
				
				<div>
					<span>Question1*</span>
					<input type="text" name="q1">
				</div>	
				
				<div>
					<span>Description*</span>
					<textarea name="desc"></textarea>
				</div> 
				
			
				
				
					<input type="submit" value="FAQ" name="b1"> 
				</form>
		
		
		</div>
		<?php
		if(isset($_POST["b1"]))
		{
			include("connect.php");
				
			extract($_POST);
				$answer='';
				$date=Date("d/m/Y");
			$q="insert into tbl_faq values(NULL, '$u_name', '$email', '$contact', '$q1', '$desc', '$answer', '$date')";
			$p=mysqli_query($con,$q);
			
			if($p>0)
				echo "Faq Succesfully";
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