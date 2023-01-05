
<!DOCTYPE html>
<html>
<head>
<title>Bonfire a Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
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
<!--slider-script-->
		<script src="js/responsiveslides.min.js"></script>
			<script>
				$(function () {
				  $("#slider1").responsiveSlides({
					auto: true,
					speed: 500,
					namespace: "callbacks",
					pager: true,
				  });
				});
			</script>
<!--//slider-script-->
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
	
	<div class="banner-mat">
		<div class="container">
			<div class="banner">
	
				<!-- Slideshow 4 -->
			   <div class="slider">
			<ul class="rslides" id="slider1">
			  <!--<li><img src="images/banner-2.jpg" alt="">
			  </li>-->
			  <li><img src="images/banner-2.jpg" alt="">
			  </li>
			  <li><img src="images/banner-1.jpg" alt="">
			  </li>
			  <li><img src="images/banner-3.jpg" alt="">
			  </li>
			  <li><img src="images/banner-4.jpg" alt="">
			  </li>
			<ul>
		</div>

			</div>				
			<!-- //slider-->
		</div>
	</div>
		<!---->
		<div class="container">
			<div class="content">
				<div class="content-top">
					<h3 class="future">FEATURED</h3>
					<div class="content-top-in">
					
					<?php
					
					include("connect.php");
					$q=mysqli_query($con,"select * from tbl_category");
					
					while($res=mysqli_fetch_array($q))
					{
					?>
						<div class="col-md-3 md-col">
							<div class="col-md">
								<a href="single.html"><img  src="<?php echo"admin/upload/$res[2]"; ?>" alt="" height=200/></a>	
								<div class="top-content">
									<h5><a href="single.html"><?php echo $res[1]; ?></a></h5>
									<div class="white">
										<?php echo"<a href='view_sub_category.php?cat_id=$res[0]' class='hvr-shutter-in-vertical hvr-shutter-in-vertical2 '>";?>    View Sub Category</a>
										
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
				<!---->
				<div class="content-middle">
					<h3 class="future">BRANDS</h3>
					<div class="content-middle-in">
					<ul id="flexiselDemo1">	

					<?php
						include("connect.php");
						$q=mysqli_query($con,"select * from tbl_company");
						while($cres=mysqli_fetch_array($q))
						{
					?>
						<li>
						<?php echo"<a href='c_search.php?id=$cres[0]'>";
						?>
						<img src="<?php echo 'admin/upload/'.$cres[2]; ?>" height=100 width=100/>
						</a>
						</li>
					<?php
						}
					?>
					</ul>
					
            		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

					</div>
				</div>
				<!---->
				<div class="content-bottom">
					<h3 class="future">LATEST</h3>
					<div class="content-bottom-in">
					<ul id="flexiselDemo2">

				<?php
					
					include("connect.php");
					$c=0;
					$q=mysqli_query($con,"select * from tbl_product");
					while($pres=mysqli_fetch_array($q))
					{
						if($c==10)
						{
							break;
						}
				?>
					
						<li><div class="col-md men">
								<a href="single.html" class="compare-in "><img  src="<?php echo'admin/upload/'.$pres[7];?>" height=230 width=200 alt="" />
								<div class="compare in-compare">
									<span>Add to Compare</span>
									<span>Add to Whislist</span>
								</div></a>
								<div class="top-content bag">
									<h5><a href="single.html"><?php echo $pres[3]; ?></a></h5>
									<div class="white">
										<?php  echo"<a href='view_product_detail.php?p_id=$pres[0]' class='hvr-shutter-in-vertical hvr-shutter-in-vertical2'>";?>ADD TO CART</a>
										<p class="dollar"><span class="in-dollar">Rs</span><span><?php echo $pres[6]; ?></span></p>
										<div class="clearfix"></div>
									</div>
								</div>							
							</div></li>
				<?php
					$c++;
					}
				?>
						
					</ul>
					<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
					</div>
				</div>
				
			</div>
		</div>
		<!---->
		
		<?php
		include("footer.php");
		?>
</body>
</html>