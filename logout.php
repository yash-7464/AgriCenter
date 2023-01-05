<?php
session_start();
include("connect.php");
$q=mysqli_query($con,"select * from tbl_cart");
while($res=mysqli_fetch_array($q))
{
	$q1=mysqli_query($con,"insert into tbl_history values(NULL, $res[1], $res[2], $res[3], $res[4], '$res[5]', '$res[6]')");
	
	
	$q2=mysqli_query($con,"select * from tbl_product where p_id=$res[1]");
	$res1=mysqli_fetch_array($q2);
	
	$stock=$res1[16]-$res[3];
	
	$q3=mysqli_query($con,"update tbl_product set p_stock=$stock where p_id=$res[1]");
}	
	$q4=mysqli_query($con,"delete from tbl_cart");



session_destroy();
header("location:index.php");

?>