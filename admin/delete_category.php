<?php
	include("connect.php");
	$id=$_GET["id"];
	
	$q="delete from tbl_category where cat_id=$id";
	$p=mysqli_query($con,$q);
	
	header("location:manage_category.php");
		
?>