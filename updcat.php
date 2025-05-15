<?php
require "dbcon.php";
$id=$_REQUEST['id'];
$cat=$_REQUEST['cnm'];
$dis=$_REQUEST['dis'];
$trending=$_REQUEST['tre'];
$filename=$_FILES['photo']['name'];
$filetemp=$_FILES['photo']['tmp_name'];
$folder="categorieimg/".$filename;
$move=move_uploaded_file($filetemp,$folder);
$update="UPDATE `categories` SET `photo`='$filename',`categorie`='$cat',`discount`='$dis',`trending`='$trending' WHERE `id`='$id'";
mysqli_query($con,$update);
header("location:cattable.php");
?>