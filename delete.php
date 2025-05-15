<?php
require "dbcon.php";
$id=$_REQUEST['id'];
$del="delete from `subcategories` where id='$id'";
mysqli_query($con,$del);
header("location:producttable.php");
?>