<?php
	include("connect.php");
	$id=$_GET["id"];
	
	$q="delete from tbl_sub_category where sub_cat_id=$id";
	$p=mysqli_query($con,$q);
	
	header("location:manage_sub_category.php");
		
?>