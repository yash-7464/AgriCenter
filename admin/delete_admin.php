<?php
	
	
		include("connect.php");
		
		$id=$_GET["id"];
	
		$q="delete from tbl_admin where a_id=$id";
		$p=mysqli_query($con,$q);
		
		header("location:manage_admin.php");
	
?>