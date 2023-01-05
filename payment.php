<?php
	session_start();
	include("connect.php");
	
	$id=$_SESSION['r_id'];
	$q=mysqli_query($con,"select * from tbl_registration where r_id=$id");
	$res=mysqli_fetch_array($q);

?>
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
			<h2 class="account-in">Cash on Delivery</h2>
				<form method='post' action="">
				
				
				<div> 	
					<span>Name*</span>
					<input type="text" name="name" value="<?php  echo $res[1],'.',$res[2],'.',$res[3]; ?>"> 
				</div>
		
				<div> 	
					<span>Email*</span>
					<input type="text" name="email" value="<?php echo $res[5]; ?>"> 
				</div>
			
				
				<div> 	
					<span>Contact*</span>
					<input type="text" name="contact" value="<?php echo $res[6]; ?>"> 
				</div>
				
				<div> 	
					<span>Address*</span>
					<textarea name="address" ><?php echo $res[7];?>&nbsp;&nbsp;&nbsp; City:<?php echo $res[9];?></textarea>
				</div>
				
				<div> 	
					<span>Pincode*</span>
					<input type="text" name="pincode" value="<?php echo $res[8]; ?>"> 
				</div>
				
				<div> 	
					<span>state*</span>
					<input type="text" name="state" value="<?php echo $res[10]; ?>"> 
				</div>
				
				<div align="Center">
				<div class="login_buttons">
				<div class="check_button">
					<a href="receipt.php">Payment Here 
				</div>
				</div>
				</div>
				</form>
		</div>
		
		
	</div>
		<!---->
		<?php
			include("footer.php");
		?>
</body>
</html>