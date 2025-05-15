<?php
require "dbcon.php";
    $photo=$_REQUEST['photo'];
    $pnm=$_REQUEST['pnm'];
    $op=$_REQUEST['op'];
    $dp=$_REQUEST['dp'];
    $qty=$_REQUEST['qty'];
    $insert="INSERT INTO `cart`(`photo`, `pnm`, `op`, `dp`, `q`) VALUES ('$photo','$pnm','$op','$dp','$qty')";
    header("location:cart.php");
    mysqli_query($con,$insert);
?>