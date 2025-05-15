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
    <form method="post" action="#" enctype="multipart/form-data">
        <div class="card mt-2 p-2">
            <div class="card-header" style="background-color: blue;">
                <center><h1 style="color:white">Add New Categorie</h1></center>
            </div>
        <label for="image">Upload Categorie Image:</label>
        <input type="file" name="photo" id="image"><hr>
        <label for="productnm">Categorie Name:</label>
        <input type="text" name="cnm" id="productnm" class="form-control" placeholder="Enter your Categorie Name Here"> <hr>
        <label for="oprice">Discount (in %percentage):</label>
        <input type="number" name="dis" id="oprice" class="form-control" placeholder="Enter your Discount In Percentage %"> <hr>
        <label for="oprice">Trending Label:</label>
        <input type="text" name="tre" id="oprice" class="form-control" placeholder="Trending Label"> <hr>
    <input type="submit" value="Add" name="btn" class="btn btn-primary btn-lg btn-block">
    </div>
    </form>
<?php
require "dbcon.php";
if(isset($_REQUEST['btn']))
{
$cat=$_REQUEST['cnm'];
$dis=$_REQUEST['dis'];
$trending=$_REQUEST['tre'];
$filename=$_FILES['photo']['name'];
$insert="INSERT INTO `categories`(`photo`,`categorie`, `discount`, `trending`) VALUES ('$filename','$cat','$dis','$trending')";
$qry=mysqli_query($con,$insert);
$filetemp=$_FILES['photo']['tmp_name'];
$folder="categorieimg/".$filename;
$move=move_uploaded_file($filetemp,$folder);
}
?>
</body>
</html>