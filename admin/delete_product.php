<?php
		include("connect.php");
		
		$id=$_GET["id"];
		
		
		$q="delete from tbl_product where p_id=$id";
		$p=mysqli_query($con,$q);
		
		header("location:manage_product.php");
	
?>