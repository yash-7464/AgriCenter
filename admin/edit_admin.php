 <?php
	include("connect.php");
	
	$id=$_GET["id"];

	$q="select * from tbl_admin where a_id=$id";
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
 		<h2 id="forms-example" class="">Edit Admin</h2>
 		<form method="post" action="" enctype="multipart/form-data">
		
		<div class="form-group">
			<label for="exampleInputEmail1">User Name</label>
			<input type="text" name="u_name" value="<?php echo $res[1]; ?>" class="form-control" id="exampleInputEmail1" placeholder="User Name">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="text" name="email" value="<?php echo $res[2]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Email address">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Password</label>
			<input type="password" name="password" value="<?php echo $res[3]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Password">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Confirm Password</label>
			<input type="password" name="c_password" value="<?php echo $res[3]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Confirm Passwrod">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Question1</label>
				<select name="question1" class="form-control">
				<option>--- select One ---</option>
				<?php echo "<option selected>$res[4]</option>"; ?>
				<option>Enter your nick name</option>
				<option>Enter your favorit movie</option>
				<option>Enter your favorit city</option>
				</select>
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Answer1</label>
			<input type="text" name="answer1" value="<?php echo $res[5]; ?>" class="form-control" id="exampleInputEmail1" placeholder="answer1">
		</div>
		
		
		<div class="form-group">
			<label for="exampleInputEmail1">Question2</label>
				<select name="question2" class="form-control">
				<option>--- select One ---</option>
				<?php echo "<option selected>$res[6]</option>"; ?>
				<option>Enter your school name</option>
				<option>Enter your favorit game name</option>
				<option>Enter your college name</option>
				</select>
		</div>
		
		
		<div class="form-group">
			<label for="exampleInputEmail1">Answer2</label>
			<input type="text" name="answer2"  value="<?php echo $res[7]; ?>" class="form-control" id="exampleInputEmail1" placeholder="answer2">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Select Image</label>
			<input type="file" name="a_image" class="form-control" id="exampleInputEmail1" placeholder="">
		</div>
		
		<div class="form-group">
			<img src="<?php echo 'upload/'.$res[8];?>" height=150 width=150>
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
			
			$img=$_FILES["a_image"]["name"];
			
			move_uploaded_file($_FILES["a_image"]["tmp_name"],"upload/".$img);
				
			 $q="update tbl_admin set u_name='$u_name', email='$email', password='$password', question1='$question1', answer1='$answer1', question2='$question2', answer2='$answer2', a_image='$img' where a_id=$id";
				$p=mysqli_query($con,$q);
				
				
				header("location:manage_admin.php");
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