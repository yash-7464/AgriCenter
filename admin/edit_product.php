 <?php
	include("connect.php");
	
	$id=$_GET["id"];
	
	$q="select * from tbl_product where p_id=$id";
	$p=mysqli_query($con,$q);
	$pres=mysqli_fetch_array($p);
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>|| Admin Panel ||</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
       
<?php
include("header.php");
?>
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Forms <i class="fa fa-angle-right"></i> Input</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class="">Edit Product</h2>
 		<form method="post" action="" enctype="multipart/form-data">
		
		<div class="form-group">
			<label for="exampleInputEmail1">Select Category</label>
				<select name="cat_id" class="form-control">
				<option>--- select One ---</option>
								
				<?php
					include("connect.php");
					$q=mysqli_query($con,"select * from tbl_category");
					while($res=mysqli_fetch_array($q))
					{
						
						if($res[0]==$pres[1])
						{
						
						echo "<option value=$res[0] selected>$res[1]</option>";
						}
						else
						{
							echo "<option value=$res[0]>$res[1]</option>";
						}
						
					}
				?>

				</select>

		<div class="form-group">
			<label for="exampleInputEmail1">Select Company</label>
				<select name="c_id" class="form-control">
				<option>--- select One ---</option>
								
				<?php
					include("connect.php");
					$q=mysqli_query($con,"select * from tbl_company");
					while($res=mysqli_fetch_array($q))
					{
						if($res[0]==$pres[2])
						{
						echo "<option value=$res[0] selected>$res[1]</option>";
						}
						else
						{
							echo "<option value=$res[0]>$res[1]</option>";
					
						}
					}
				?>
				</select>

		
		<div class="form-group">
			<label for="exampleInputEmail1">Product Name</label>
			<input type="text" name="p_name" value="<?php echo $pres[3]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
		</div>
		
		
		<div class="form-group">
			<label for="exampleInputEmail1">Product Code</label>
			<input type="text" name="p_code" value="<?php echo $pres[4]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Product Code">
		</div>
		
		
		<div class="form-group">
			<label for="exampleInputEmail1">Product Old Price</label>
			<input type="text" name="p_o_price" value="<?php echo $pres[5]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Product Old Price">
		</div>
		
		
		<div class="form-group">
			<label for="exampleInputEmail1">Product New Price</label>
			<input type="text" name="p_n_price" value="<?php echo $pres[6]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Product New Price">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Product Image1</label>
			<input type="file" name="p_image1" class="form-control" id="exampleInputEmail1" placeholder="Product Image1">
		</div>
		
		<div class="form-group">
			<img src="<?php echo 'upload/'.$pres[7];?>" height=150 width=150>
		</div>

  
		<div class="form-group">
			<label for="exampleInputEmail1">Product Image2</label>
			<input type="file" name="p_image2" class="form-control" id="exampleInputEmail1" placeholder="Product Image2">
		</div>
		
		<div class="form-group">
			<img src="<?php echo 'upload/'.$pres[8];?>" height=150 width=150>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Product Color</label>
			<input type="text" name="p_color"value="<?php echo $pres[9]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Product Color">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Product Weight</label>
			<input type="text" name="p_weight" value="<?php echo $pres[10]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Product Wight">
		</div>
	
		<div class="form-group">
			<label for="exampleInputEmail1">Product Dose</label>
			<input type="text" name="p_dose" value="<?php echo $pres[11]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Product dose">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Product Process</label>
			<textarea class="form-control" id="exampleInputPassword1" name="p_process" placeholder="Product Process">
		
			<?php echo $pres[12]; ?>

		</textarea>
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Product Features</label>
			<textarea class="form-control" id="exampleInputPassword1" name="p_features" placeholder="Product Features">
			
			<?php echo $pres[13]; ?>
			</textarea>
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Product Materials</label>
			<textarea class="form-control" id="exampleInputPassword1" name="p_materials" placeholder="Product Materials">
			<?php echo $pres[14]; ?>
			
			</textarea>
		</div>
	
		<div class="form-group">
			<label for="exampleInputEmail1">Product Description</label>
			<textarea class="form-control" id="exampleInputPassword1" name="p_description" placeholder="Product Description">
			<?php echo $pres[15]; ?>
			</textarea>
		</div>

		<div class="form-group">
			<label for="exampleInputEmail1">Product Stock</label>
			<input type="text" value="<?php echo $pres[16]; ?>" name="p_stock" class="form-control" id="exampleInputEmail1" placeholder="Product Stock">
		</div>
		
		
  <button type="submit" class="btn btn-default" name="b1">Submit</button>
  
  <button type="reset" class="btn btn-default">Reset</button>
  
</form>
<center>
	<?php
		if(isset($_POST["b1"]))
		{                                                         
			include("connect.php");
				
			extract($_POST);
			
			$img1=$_FILES["p_image1"]["name"];
			$img2=$_FILES["p_image2"]["name"];
		
			move_uploaded_file($_FILES["p_image1"]["tmp_name"],"upload/".$img1);
			move_uploaded_file($_FILES["p_image2"]["tmp_name"],"upload/".$img2);
		
			$d=date("d/m/yy");
			
			 $q="update tbl_product set cat_id=$cat_id, c_id=$c_id, p_name='$p_name', p_code='$p_code', p_o_price='$p_o_price', p_n_price='$p_n_price', p_image1='$img1', p_image2='$img2', p_color='$p_color', p_weight='$p_weight', p_dose='$p_dose', p_process='$p_process', p_features='$p_features', p_materials='$p_materials', p_description='$p_description', p_stock='$p_stock', p_date='$d' where p_id=$id";
			
			$p=mysqli_query($con,$q);
			
			header("location:manage_product.php");
		}
		?>
</center>

</div>
<!----->

<!---->
 <!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->

<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				
				<?php
					include("menu.php");
				?>				
							
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>