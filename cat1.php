<?php
require('navbar.php');
require('dbcon.php');
$cat=$_REQUEST['cat'];
$sel="select * from `subcategories` where `categorie`='$cat'";
$qry=mysqli_query($con,$sel);
$nrow=mysqli_num_rows($qry);
if($nrow>0)
{
    while($row=mysqli_fetch_assoc($qry))
    {
        $id=$row['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <title>XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@300&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        display: border-box;
    }

    .item {
        border: 2px solid black;
        border-radius:15px;
        height:40vh;
        width:100%;
        align:center ;
        padding: 5px;
        background-color: cyan;
    }
    img{
        float: left;
        border: 3px solid black;
    }
    center 
    {
        position: relative;
        top:10%;
    }
    strike 
    {
        color:red
    }
    .orp
    {
        color: blue;
    }
    .drp
    {
        color:red;
    }
    span 
    {
        color:black;
    }
    .prnm
    {
        color: purple;
    }
    #quen
    {
        border-radius: 10px;
    }
    input[type="number"]
    {
        height:20px;
        width:80px;
        text-align: center;
    }
    .con
    {
        margin-top:15px;
    }
</style>

<body>
    <form action="productpage.php" method="get">
        <div class="con">
 <div class="item">
<img src="photo/<?php echo $row['photo']?>" alt="not loaded please refrese page" height="99%" width="30%">
<center>
<h3 class="prnm">Product Name:<span><?php echo $row['pnm'] ?></span></h3>
<h3 class="orp">Original Price:<strike>₹<?php echo $row['op'] ?></strike></h3>
<div class="ani"><h3 class="drp">Discount Price:<span><?php echo $row['dp']?></span></h3></div>
<input type="hidden" name="id" value="<?php echo $id ?>">
<input type="hidden" name="photo" value="<?php echo $row['photo'] ?>">
<input type="hidden" name="pnm" value="<?php echo $row['pnm'] ?>">
<input type="hidden" name="op" value="<?php echo $row['op'] ?>">
<input type="hidden" name="dp" value="<?php echo $row['dp']?>">
<input type="hidden" name="cat" value="<?php echo $row['categorie']?>">
<input type="submit" name="add" value="Shop Now" class="mt-2 btn btn-primary btn-lg btn-block" >
</center>
</div>
</form>
</body>
</html>
<?php
    }
}
?>