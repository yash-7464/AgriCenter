<?php
include("connect.php");
$id=$_GET["id"];

$q=mysqli_query($con,"delete from tbl_cart where cart_id=$id");
header("location:view_cart.php");

?>