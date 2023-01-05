 <?php
	include("connect.php");
	$id=$_GET["id"];

	$q="select * from tbl_sub_category where sub_cat_id=$id";
	$p=mysqli_query($con,$q);
	$res=mysqli_fetch_array($p);
	
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
 		<h2 id="forms-example" class="">Edit Sub Category</h2>
 	<form method="post" action="" enctype="multipart/form-data">
		
		<div class="form-group">
				<label for="exampleInputEmail1">Select Sub Category</label>
				<select name="cat_id" class="form-control">
				<option>--- select One ---</option>		
				<?php
					include("connect.php");
					$q=mysqli_query($con,"select * from tbl_category");
					while($res=mysqli_fetch_array($q))
					{
						echo "<option value=$res[0]>$res[1]</option>";
					}
				?>
				</select>
		</div>
		
		
		<div class="form-group">
			<label for="exampleInputEmail1">Category Name:</label>
			<input type="text" name="sub_cat_name" value="<?php echo $res[2]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Category Name">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Category image:</label>
			<input type="file" name="sub_cat_image" class="form-control" id="exampleInputEmail1" placeholder="Category Image">
		</div>
		
		<div class="form-group">
			<img src="<?php echo 'upload/'.$res[3];?>" height=150 width=150>
		</div>

  
  <button type="submit" class="btn btn-default" name="b1">Submit</button>
  
  <button type="reset" class="btn btn-default">Reset</button>
  
</form>
</div>
<center>
	<?php
			if(isset($_POST["b1"]))
			{
				include("connect.php");
				extract($_POST);
				$img=$_FILES["sub_cat_image"]["name"];
				
				move_uploaded_file($_FILES['sub_cat_image']['tmp_name'],"upload/".$img);
				$q="update tbl_sub_category set cat_id=$cat_id, sub_cat_name='$sub_cat_name', sub_cat_image='$img' where sub_cat_id=$id ";
				$p=mysqli_query($con,$q);
				
				header("location:manage_sub_category.php");
			}
	?>
</center>
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
<?php
	include("footer.php");

?>
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