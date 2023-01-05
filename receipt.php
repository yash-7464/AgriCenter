
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

<script>
function print1()
{
	window.print();
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
			<h2 class="account-in">Receipt </h2>
				<form method='post' action="">
				<div align="left">
				Receipt Number :<?php echo rand();?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				Date:<?php echo Date("d/M/Y"); ?></div>
				<h2 class="account-in"> </h2>
				<table border=0 cellpadding=2 width=100%>
					<tr>				
						<th>Product*
						<th>Name*
						<th>Price*
						<th>Quntity*
						<th>Total Price*
						
			<?php
					//session_start();
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
							<td><img src='admin/upload/$pres[7]' height=80 width=80>
							<td>
							<td>$pres[6]
							<td>$res[3]
							<td>$res[4]
						
						
							</tr>";
					}
				
			?>
		</table>
		
		<div align="right">
		Total price=<?php echo $total; ?>
		</div>
		<?php
	
	include("connect.php");
	
	$id=$_SESSION['r_id'];
	$q=mysqli_query($con,"select * from tbl_registration where r_id=$id");
	$res=mysqli_fetch_array($q);

?>
				<form method='post' action="">
				
				
				<div> 	
					<span>Name*</span>
					 <?php  echo $res[1],'.',$res[2],'.',$res[3]; ?>
				</div>
		
				<div> 	
					<span>Email*</span>
				<?php echo $res[5]; ?>
				</div>
			
				
				<div> 	
					<span>Contact*</span>
					<?php echo $res[6]; ?>
				</div>
				
				<div> 	
					<span>Address*</span>
					<?php echo $res[7];?>&nbsp;&nbsp;&nbsp; City:<?php echo $res[9];?>
				</div>
				
				<div> 	
					<span>Pincode*</span>
					<?php echo $res[8]; ?> 
				</div>
				
				<div> 	
					<span>state*</span>
					<?php echo $res[10]; ?> 
				</div>
				</form>


		<div align="Center">
		 <div class="login_buttons">
		<div class="check_button">
		<a  href="#" onClick='print1()'>Print Out</a>
		<a href="logout.php">Log Out</a>
		
		</div>
		</div>
		
	<h2 class="account-in"></h2>
		
		</form>
		</div>
		</div>
	</div>
		
</body>
</html>