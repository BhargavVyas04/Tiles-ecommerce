<?php
require "dbcon.php";
$pnm=$_REQUEST['pnm'];
$op=$_REQUEST['op'];
$dp=$_REQUEST['dp'];
if(isset($_REQUEST['btn']))
{
    $filename=$_FILES['photo']['name'];
    $filetemp=$_FILES['photo']['tmp_name'];
    $folder="photo/".$filename;
    $move=move_uploaded_file($filetemp,$folder);
    $insert="INSERT INTO `fupload`(`photo`, `product_name`, `product_o.price`, `product_d.prize`) VALUES ('$filename','$pnm','$op','$dp')";
    mysqli_query($con,$insert);
}
?>