<?php
require "dbcon.php";
$id=$_REQUEST['id'];
$del="delete from `categories` where id='$id'";
mysqli_query($con,$del);
header("location:cattable.php");
?>