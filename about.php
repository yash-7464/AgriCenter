<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.img{
	height:500;
	width:500;
	
}
.h2{
	font-style:bold;

}
h5{
	font-style:italic;
	color:green;
}
</style>				
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
			<h2 class="account-in">About</h2>
				<form method='post' action="">
				<table>
					<tr>
						<td align=left><img src="images/aaaa.jpg" height=300 width=300>
						<td valign="top" align="left"><div class="h2">Our Mission</div><p class="h5"><div class="h3">To design technology-driven solutions that make agricultural inputs more affordable and accessible for all.</div>
						<div class="h5">We're developing the next generation of farmers by updating the methods and processes used throughout India, resulting in a more fruitful and lucrative industry.</div></p>
					</tr>
					<tr>
						<td><div class="h2">Our Vission</div><p><div class="h3">Our vision is to achieve sustainable growth within India’s 
						agricultural industry by simplifying the everyday lives of farmers throughout the country.</div>
						We aim to improve the quality of life for farmers throughout India by providing the technological infrastructure necessary to create the smarter future of farming.</div></p>
						<td align=right><img src="images/farmkart vision.png" height=300 width=300>
					</tr>

				</table>
		</div>
		
	</div>
		<!---->
		<?php
			include("footer.php");
		?>
</body>
</html>