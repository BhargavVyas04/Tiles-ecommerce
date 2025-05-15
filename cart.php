<?php
require("navbar.php");
require "dbcon.php";
$sel="select * from `cart`";
$qry=mysqli_query($con,$sel);
$nrow=mysqli_num_rows($qry);
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
<style>
*
{
    margin:0px;
    padding:0px;
    display:border-box;
}
body{

}
.box2
{
    border:4px solid black;
    border-radius:10px;
    height:39vh;
    margin:10px;
}
.img
{
 float:left;   
}
h4
{
    display:block;
    position:relative;
    left:35%;
    bottom:90%;
}
footer
{
    width:100%;
    height:auto;
    background-color: cyan;
}
.total
{
    margin-left: 15%;
    padding:8px;
}
.rm
{ margin-top:220px;
    margin-left:40%;
}
</style>
</head>
<body>
<center>
<h1>
Cart
</h1>
</center>
<?php
if($nrow>0)
{
    
while($row=mysqli_fetch_assoc($qry))
{
    $id=$row['id'];
    $pnm=$row['pnm'];
    $op=$row['op'];
    $dp=$row['dp'];
    $q=$row['q'];
    $photo=$row['photo'];
?>
<div class="box2">
<img src="<?php echo $photo ?>" height="100%" width="30%" alt="technical issue">
<button class="rm btn btn-primary" onclick="window.location.href='cartdel.php?id=<?php echo $id ?>'">Remove</button>
<h4>Product Name:<?php echo $pnm ?></h4><br>
<h4>Product Original Price:<?php echo $op ?></h4><br>
<h4>Product Discount Price:<?php echo $dp ?></h4><br>
<h4>Product Quentity:<?php echo $q ?></h4><br>
</div>
</body>
</html>
<?php
    }
}
else {
    echo "CART IS EMPTY";
}
$sel2="SELECT SUM(dp),SUM(q) from `cart`";
$qry2=mysqli_query($con,$sel2);
while($row2=mysqli_fetch_assoc($qry2))
{
?>
<footer>
<h2 class="total" >Total Price=<?php echo $row2['SUM(dp)']*$row2['SUM(q)'] ?><br>
Total items=<?php echo $row2['SUM(q)'] ?><br> <a style="color:white; background-color:blue; text-decoration:none; border-radius:8px" href="order.php">Checkout</a>
<a style="color:white; background-color:blue; text-decoration:none; border-radius:8px" href="cartdel.php">Remove All Items</a>
</footer>
<?php
}
?>