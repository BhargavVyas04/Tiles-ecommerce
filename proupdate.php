<?php 
require "dbcon.php";
$id=$_REQUEST['id'];
$sel="select * from `signup` where id='$id'";
$qry=mysqli_query($con,$sel);
$numr=mysqli_num_rows($qry);
if($numr>0)
{
$row=mysqli_fetch_assoc($qry)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <title>XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@300&display=swap" rel="stylesheet">
<style>
   *
   {
    margin:0px;
    padding:0px;
   }
   body
   {
    display: grid;
    place-items: center;
    height:100vh;
    background-color: purple;
   }
</style>
</head>
<body>
    <div class="card">
            <div class="card-header bg-primary">
<center><h2>Update Form</h2></center>
</div>
<input type="hidden" name="" value="<?php echo $row['id'] ?>">
    <form method="post" action="#" enctype="multipart/form-data">
            <label for="ppho">Profile Photo:</label>
            <input type="file" name="photo" value="<?php echo $row['profile_photo']?>" id="ppho" class="form-control" required placeholder="Upload |Profile Photo">
    
            <label for="fnm">First Name:</label>
            <input type="text" name="fnm" value="<?php echo $row['fnm']?>" id="fnm" class="form-control" required placeholder="Enter First Name">
            
            
                    <label for="lnm">Last Name:</label>
                    <input type="text" value="<?php echo $row['lnm']?>" name="lnm" id="lnm" class="form-control" required placeholder="Enter Last Name">
                    
                    
                            <label for="dob">Date Of Birth:</label>
                            <input type="date" value="<?php echo $row['dob']?>" name="dob" id="dob" class="form-control" required placeholder="Enter Date Of Birth">
                            
    
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo $row['email']?>" class="form-control" required placeholder="Enter Email"><br>

                    
                            <center><button type="submit" name="btn" class="btn btn-primary btn-lg btn-block">update</button></center>


    <?php
}
?>
</form>
    <?php
$con=mysqli_connect("localhost","root","","ecommerce");
if(isset($_REQUEST['btn']))
{ 
    $fnm=$_POST['fnm'];
    $lnm=$_POST['lnm'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $filename=$_FILES['photo']['name'];
    $filetemp=$_FILES['photo']['tmp_name'];
    $folder="profile/".$filename;
    $move=move_uploaded_file($filetemp,$folder);
    $update="UPDATE `signup` SET `profile_photo`='$filename',`fnm`='$fnm',`lnm`='$lnm',`dob`='$dob',`email`='$email' WHERE id='$id'";
    mysqli_query($con,$update);
header("location:homepage2.php?id=$id");
}
?>
</div>
</body>
</html>