<?php
require "dbcon.php";
$del="TRUNCATE TABLE cart";
mysqli_query($con,$del);
session_start();
session_destroy();
header("location:index.php");
?>