<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <form method="post" action="#">
        <div class="card mt-2 p-2">
            <div class="card-header" style="background-color: blue;">
                <center><h1 style="color:white">Admin Login</h1></center>
            </div>
        <label for="productnm">Email:</label>
        <input type="email" name="email" id="productnm" class="form-control" placeholder="Enter your Email Address Here"> <hr>
        <label for="oprice">Password:</label>
        <input type="Password" name="pass" id="oprice" class="form-control" placeholder="Enter your Password Here"> <hr>
    <input type="submit" value="Add" name="btn" class="btn btn-primary btn-lg btn-block">
    </div>
    </form>
    <?php
require "dbcon.php";
if(isset($_REQUEST['btn']))
{
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $email=stripcslashes($email);
    $pass=stripcslashes($pass);
    $email=mysqli_real_escape_string($con,$email);
    $pass=mysqli_real_escape_string($con,$pass);
    $sel="select * from `adminlogin` WHERE `email`='$email' AND `pass`='$pass'";
    $qry=mysqli_query($con,$sel);
    $row=mysqli_num_rows($qry);
    $data=mysqli_fetch_assoc($qry);
    if($row>0)
    {
        session_start();
            $_SESSION['email']=$data['email'];
            header("location:admin.php");
}
else
{
    echo "<script>alert('invalid User Name Or PassWord')</script>";
}
}
?>
</body>
</html>