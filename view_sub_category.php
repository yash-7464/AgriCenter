<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Bonfire a Ecommerce Category Flat Bootstarp Responsive Website Template | Products :: w3layouts</title>
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
	
	<img src='images/sub_category.jpg' height=400 width=1550>
		<div class="container">
			<div class="products">
					<h2 class=" products-in">Sub Category</h2>
					
					
					
					<div class=" top-products">
					
					
					
					<?php
					
					include("connect.php");
					$id=$_GET["cat_id"];
					$q=mysqli_query($con,"select * from tbl_sub_category where cat_id=$id");
					while($res=mysqli_fetch_array($q))
					{
					
					
					?>
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="single.html" class="compare-in"><img  src="<?php echo"admin/upload/$res[3]";?>" height=200 alt="" />
								<div class="compare">
									<span>Add to Compare</span>
									<span>Add to Whislist</span>
								</div>
								</a>	
								<div class="top-content">
									<h5><a href="single.html"><?php echo $res[2]; ?></a></h5>
									<div class="white">
										<<?php echo"a href='view_product.php?sub_cat_id=$res[0]' class='hvr-shutter-in-vertical hvr-shutter-in-vertical2'>";?>view Product</a>

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
		</div>
		<!---->
		<?php
			include("footer.php");
		?>
</body>
</html>