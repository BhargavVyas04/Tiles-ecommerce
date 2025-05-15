<?php
require "dbcon.php";
$email=$_POST['email'];
$pass=md5($_POST['pass']);
$pass2=($_POST['pass']);
$email=stripcslashes($email);
$pass=stripcslashes($pass);
$email=mysqli_real_escape_string($con,$email);
$pass=mysqli_real_escape_string($con,$pass);
$sel="select * from `signup` WHERE `email`='$email' AND `cpass`='$pass'";
$qry=mysqli_query($con,$sel);
$row=mysqli_num_rows($qry);
$data=mysqli_fetch_assoc($qry);
$id=$data['id'];
if($row>0)
{
    session_start();
		$_SESSION['id']=$data['id'];
		$_SESSION['email']=$data['email'];
    if(isset($_REQUEST['rm']))
    {
      setcookie('emailcookie',$email,time() + (10 * 365 * 24 * 60 * 60));
      setcookie('passcookie',$pass2,time() + (10 * 365 * 24 * 60 * 60));
      header("location:homepage2.php?id=$id");
    }
    else
    {
    header("location:homepage2.php?id=$id");
    }
}
else
{
    echo "<script>alert('invalid User Name Or PassWord')</script>";
}
?>