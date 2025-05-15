<?php
require "dbcon.php";
$id=$_REQUEST['id'];
if(isset($id))
{
$del="DELETE FROM `cart` WHERE id='$id'";
}
else{
    $del="TRUNCATE TABLE cart";
}
mysqli_query($con,$del);
header("location:cart.php");
?>