<?php

	// $con=mysql_connect("localhost","root","");
	// $db=mysql_select_db("agro");
	include("connect.php");
	$id=$_GET["id"];
	
	$q="delete from tbl_company where c_id=$id";
	$p=mysqli_query($con,$q);
	
	header("location:manage_company.php");
	
?>