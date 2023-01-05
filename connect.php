<?php
	$con=mysqli_connect("localhost","root","")or die("could Not connect");
	$db=mysqli_select_db ($con,"agro") or die("Databse Not Found");
?>