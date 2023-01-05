<?php
include("connect.php");
$id=$_GET["id"];

$q="select * from tbl_faq where f_id=$id";
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
 		<h2 id="forms-example" class="">View FAQ answer</h2>
 		<form method="post" action="" enctype="multipart/form-data">
		
		<div class="form-group">
			<label for="exampleInputEmail1">User Name :- </label>
			<?php echo $res[1]; ?>
		</div>
		
		
		<div class="form-group">
			<label for="exampleInputEmail1">Email :-</label>
			<?php echo $res[2]; ?>
		</div>
  
		<div class="form-group">
			<label for="exampleInputEmail1">Contact :-</label>
			<?php echo $res[3]; ?>
		</div>

      <div class="form-group">
			<label for="exampleInputEmail1">Question :-</label>
			<?php echo $res[4]; ?>
		</div	>	
		
      <div class="form-group">
			<label for="exampleInputEmail1">Description :-</label>
			<?php echo $res[5]; ?>
		</div	>	
		
		

				<div class="form-group">
			<label for="exampleInputEmail1">Answer :-</label>
			<textarea class="form-control" id="exampleInputPassword1" name="ans" placeholder="Textarea">
			
			<?php echo $res[6]; ?>
			</textarea>
		</div>

   <div class="form-group">
			<label for="exampleInputEmail1">Date :-</label>
			<?php echo $res[7]; ?>
		</div	>	
  
  
  
  <button type="submit" class="btn btn-default" name="b1">Submit</button>
  
  <button type="reset" class="btn btn-default">Reset</button>
  
  
  <?php
	if(isset($_POST["b1"]))
	{
		extract($_POST);
		
		echo $q="update tbl_faq set answer='$ans' where f_id=$id";
		$p=mysqli_query($con,$q);
		
		header("location:view_faq.php");
		
	}
  
  ?>
</form>
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