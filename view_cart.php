
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
			<h2 class="account-in">View Cart</h2>
				<form method='post' action="">
				<table border=2 cellpadding=2 width=100%>
					<tr>				
						<th>Product*
						<th>Name*
						<th>Price*
						<th>Quntity*
						<th>Total Price*
						<th>Status*
						<th>option*
						
		<?php
		//	session_start();
			include("connect.php");
			$id1=$_SESSION["r_id"];
			$q=mysqli_query($con,"select * from tbl_cart where r_id=$id1");
			$total=0;
			while($res=mysqli_fetch_array($q))
			{
				$q1=mysqli_query($con,"select * from tbl_product where p_id=$res[1]");
				$pres=mysqli_fetch_array($q1);
				
				
				$total=$total+$res[4];
				echo "<tr>
					<td><img src='admin/upload/$pres[7]' height=150 width=150>
					<td>$pres[3]
					<td>$pres[6]
					<td>$res[3]
					<td>$res[4]
					<td>$res[5]
					<td>
						<a href='delete_cart.php?id=$res[0]'>DELETE
					</tr>";
			}
		
		?>
		</table>
		
		<div align="right">
		Total price=<?php echo $total; ?>
		</div>
		<div align="Center">
		 <div class="login_buttons">
		<div class="check_button">
		<a href="index.php">Continue Shopping</a>
		<a href="payment.php">Confirm Order</a>
		
		</div>
		</div>
		
	<h2 class="account-in"></h2>
		
		</form>
		</div>
		</div>
	</div>
		<!---->
		<?php
			include("footer.php");
		?>
</body>
</html>