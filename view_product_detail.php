<?php
session_start();
include("connect.php");

$id=$_GET["p_id"];
$_SESSION["product_id"]=$id;

$q=mysqli_query($con,"select * from tbl_product where p_id=$id");

$res=mysqli_fetch_array($q);


?>
<!DOCTYPE html>
<html>
<head>
<title>Bonfire a Ecommerce Category Flat Bootstarp Responsive Website Template | Single :: w3layouts</title>
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
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
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
<style>
	.myfont
	{
		font-size:medium;
	}
</style>
</head>
<body>
  <!--header-->
	<?php
		include("header.php");
	?>
	<div class="banner-mat">
		<div class="container">
			<div class="banner">
				<div class="slider">
					<ul class="rslides" id="slider1">
						<img src='images/new1.jpg' >
					<ul>
				</div>

			</div>
		</div>
	</div>
	
	<!---->
		<div class="container">
			<div class="single">
				<div class="col-md-9 top-in-single">
					<div class="col-md-5 single-top">	
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image img-responsive" src="<?php echo'admin/upload/'.$res[7]; ?>" alt="" >
									<img class="etalage_source_image img-responsive" src="<?php echo'admin/upload/'.$res[7]; ?>" alt="" >
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="<?php echo'admin/upload/'.$res[8]; ?>" alt="" >
								<img class="etalage_source_image img-responsive" src="<?php echo'admin/upload/'.$res[8]; ?>" alt="" >
							</li>
							
						</ul>

					</div>	
					<div class="col-md-7 single-top-in">
						<div class="single-para">
							<h4><?php echo $res[3]; ?></h4>
							<!-- <div class="para-grid">
							<span  class="add-to">Rs. <strike><?php echo $res[5]; ?></strike></span>
								<span  class="add-to">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo $res[6]; ?></span>
								<a href="#" class="hvr-shutter-in-vertical cart-to">Add to Cart</a>					
								<div class="clearfix"></div>
							 </div> -->
							
							<h5>Product Code:<?php echo $res[4]; ?> </h5>
							<h5 class="myfont">
							<span class="myfont">Category:
							<?php
								$q=mysqli_query($con,"select * from tbl_category where cat_id=$res[1]");
								$cres=mysqli_fetch_array($q);
								echo $cres[1];
							?>
							</span><br>
							<span class="myfont">SubCategory:
							<?php
								$q=mysqli_query($con,"select * from tbl_sub_category where sub_cat_id=$res[18]");
								$sres=mysqli_fetch_array($q);
								echo $sres[2];
							?>
							</span><br>
							<span class="myfont">Company:
							<?php
								$q=mysqli_query($con,"select * from tbl_company where c_id=$res[2]");
								$cpres=mysqli_fetch_array($q);
								echo $cpres[1];
							?>
							</span><br>
							</h5>
							<div class="available">
								<h6>Available Options :</h6>
								
								
								
						</div>
							<span class="myfont">Color :<?php echo $res[9]; ?><span><br>
							<span class="myfont">weight :<?php echo $res[10]; ?><span><br>
							<span class="myfont">Dose :<?php echo $res[11]; ?><span><br>
							

		<?php
				if($res[16]>0)
				{
		?>
<h5><?php echo $res[16]; ?> items in stock</h5>
				
				<?php
								if(isset($_SESSION["r_id"]))
								{
									?>

							<a href="quntity.php" class="hvr-shutter-in-vertical ">Add To cart</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<?php
								}
								else
								{
									?>
							
							<a href="login.php" class="hvr-shutter-in-vertical ">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="registration.php" class="hvr-shutter-in-vertical ">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<?php
								}?>

			<?php
				}	
				else
				{
						echo"<h5> Out of Stock</h5>";
				}
				?>
				
							
							
							
						</div>
					</div>
				<div class="clearfix"> </div>
				<div class="content-top-in">
				<span class="myfont">Process :<?php echo $res[12]; ?><span><br>
							<span class="myfont">Feature :<?php echo $res[13]; ?><span><br>
							<span class="myfont">Materials :<?php echo $res[14]; ?><span><br>
							<span class="myfont"><?php echo $res[15]; ?><span><br>
						
						<?php
						
							$q="select * from tbl_product where sub_cat_id=$res[18] and p_id<>$res[0]";
							$p=mysqli_query($con,$q);
							
							while($res1=mysqli_fetch_array($p))
							{
							
						?>
						
						<div class="col-md-4 top-single">
							<div class="col-md">
								<img  src="<?php echo'admin/upload/'.$res1[7]; ?>" height=230 width=200 alt="" />	
								<div class="top-content">
									<h5><?php echo $res1[3]; ?></h5>
									<div class="white">
										<?php echo"<a href='view_product_detail.php?p_id=$res1[0]' class='hvr-shutter-in-vertical hvr-shutter-in-vertical2'>";?>View Detail</a>
										<p class="dollar"><span class="in-dollar">Rs</span><span><?php echo $res1[6]; ?></span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div>
						
						</div>
						
						<?php
						}
						?>
						
						
						
						
					<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-3">
				<div class="single-bottom">
						<h4>Product Category</h4>
						
						<?php
							include("connect.php");
							$q2=mysqli_query($con,"select * from tbl_category");
							while($cres=mysqli_fetch_array($q2))
							{
								
						
						?>
							<div class="product">
							<img height=100 width=100 src="<?php echo'admin/upload/'.$cres[2];?>">
							<div class="grid-product">
								<?php echo"<a href='view_sub_category.php?cat_id=$cres[0]' class='elit'>";?><?php echo $cres[1]; ?></a>
							
							</div>
							<div class="clearfix"> </div>
							</div>
							<?php
							}
							?>
							
							
					</div>
					<div class="single-bottom">
						<h4>Categories</h4>
						<ul>
						<marquee direction='up' height=250>
						<?php
							$q=mysqli_query($con,"select * from tbl_sub_category");
							while($sres=mysqli_fetch_array($q))
							{
						?>
						
						<li><?php echo"<a href='view_product.php?sub_cat_id=$sres[0]'>"?><i> </i><?php echo"$sres[2]"; ?></a></li>
						
						<?php
							}
						?>
						</marquee>
						
						</ul>
					</div>
					
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<!---->
		<?php
			include("footer.php");
		?>
</body>
</html>