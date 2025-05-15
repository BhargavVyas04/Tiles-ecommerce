<?php
require "dbcon.php";
$fnm=$_POST['fnm'];
$lnm=$_POST['lnm'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$cpass=md5($_POST['cpass']);
$conpass=md5($_POST['conpass']);
$filename=$_FILES['photo']['name'];
    $filetemp=$_FILES['photo']['tmp_name'];
    $file_extension=pathinfo($filename,PATHINFO_EXTENSION);
    $allowed_extension=array('png','jpg','jpeg');
    if(!in_array($file_extension,$allowed_extension))
    {
        echo "<script>alert('only allowed jpg and png')</script>";
    }
    else{
    $folder="profile/".$filename;
    $move=move_uploaded_file($filetemp,$folder);
$insert="INSERT INTO `signup`(`profile_photo`, `fnm`, `lnm`, `dob`, `email`, `cpass`, `conpass`) VALUES ('$filename','$fnm','$lnm','$dob','$email','$cpass','$conpass')";
$qry=mysqli_query($con,$insert);
if(isset($qry))
{
header("location:homepage3.php");
}
    }
    ?>
    