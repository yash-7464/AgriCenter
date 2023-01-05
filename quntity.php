<?php
session_start();
if(isset($_SESSION["product_id"]))
{
include("connect.php");

$id=$_SESSION["product_id"];
$q=mysqli_query($con,"select * from tbl_product where p_id=$id");
$res=mysqli_fetch_array($q);
}
else
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>AgriCenter</title>
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
function mytotal()
{
	
	var p=document.getElementById("p1").value;
	var q=document.getElementById("q1").value;
	var t=p*q;
	
	document.getElementById("t1").value=t;
	
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
			<h2 class="account-in">Quntity</h2>
				<form method='post' action="">
				<table border=0 cellpadding=2 width=100%>
					<tr>				
					<th>Product*
					<th>Name*
					<th>Price*
					<th>Quntity*
					<th>Total Price*
				<tr>				
					
					<td><img src="<?php echo "admin/upload/".$res[7]; ?>" height=200 width=200> 
					<td><input type="text" name="name" value="<?php echo $res[3]; ?>" id="p2" readonly >
					<td><input type="text" name="price" value="<?php echo $res[6]; ?>" id="p1" readonly >
					
					<td><input type="text" name="quntity" value=1 id="q1" onBlur="mytotal();"> 
					<td><input type="text" name="tprice" value="<?php echo $res[6]; ?>" id="t1" readonly>
				<tr>	
					
		
				<tr>
				<td><td><td>
					<td colspan=2><input type="submit" value="Add to cart" name="b1"> 
				</table>
				</form>
		</div>
		<?php
		
		
		if(isset($_POST["b1"]))
		{
			include("connect.php");
						
			extract($_POST);
		
			$p_id=$_SESSION["product_id"];
			$r_id=$_SESSION["r_id"];
			$status="pending";
			$d=Date("d/m/Y");
			$tptice=$res[6]*$quntity;
			
			$q1=mysqli_query($con,"select * from tbl_product where p_id=$p_id");
			$pres=mysqli_fetch_array($q1);
			
			if($quntity>$pres[16])
			{
				echo"<div align='center'><h3>You can not purchase More than $pres[16]</h3></div>";
			}
			else
			{
			
			
			
			$q=mysqli_query($con,"insert into tbl_cart values(NULL, $p_id, $r_id, $quntity, $tprice, '$status','$d')");
				
			//header("location:view_cart.php");

			echo "<script> window.location.href='view_cart.php'; </script>";
			}
		}
		?>
		
	</div>
		<!---->
		<?php
			include("footer.php");
		?>
</body>
</html>