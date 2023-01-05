<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Bonfire a Ecommerce Category Flat Bootstarp Responsive Website Template | Contact :: w3layouts</title>
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
			<div class="contact">
			<h2 class=" contact-in">CONTACT</h2>
				
				<div class="col-md-6 contact-top">
					<h3>Info</h3>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
					</div>
					
					
					<ul class="social ">
						<li><span><i > </i>Surendranagar, Gujrat, India </span></li>
						<li><span><i class="down"> </i>+ 90 1234567899</span></li>
						<li><a href="mailto:agricenter@gmail.com"><i class="mes"> </i>agricenter@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-6 contact-top">
				<form method="post" action="">
					<h3>Want to work with me?</h3>
						<div>
							<span>Your Name </span>		
							<input type="text" value="" name="name" >						
						</div>
						<div>
							<span>Your Email </span>		
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
    font-size: 1em;" class="email" value="" name="email" >						
						</div>
						<div>
							<span>Subject</span>		
							<input type="text" value="" name="subject">	
						</div>
						<div>
							<span>Your Message</span>		
							<textarea name="message"> </textarea>	
						</div>
						<input type="submit" value="SEND" name="b1" >	
				</form>
				</div>
				
			<?php
			
				if(isset($_POST["b1"]))
				{
					include("connect.php");
					
					extract($_POST);
					
					$q=mysqli_query($con,"insert into tbl_contact values(NULL, '$name', '$email', '$subject', '$message')");
					if($q>0)
						echo "contact is susscessfully inserted";
					else
						echo "Error";
				}
			?>
			<div class="clearfix"> </div>
		</div>
	</div>
		<!---->
	<?php
		include("footer.php");
	?>
</body>
</html>