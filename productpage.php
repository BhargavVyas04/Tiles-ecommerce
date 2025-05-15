<?php
require "dbcon.php";
require "navbar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
<style>
    *
{
    margin:0;
    padding:0;
    display:border-box
}
body
{
 
}
.box
{
  border:5px solid black;
  border-radius:8px;
  height:87vh;
}
img
{
  border:2px solid black;
  margin-left:10px;
  position:absolute;
}
.cont 
{
margin-left:45%;
}
@media (max-width:515px) {
  .shopnow
  {
    margin-top: 20px;
  }
}
</style>
</head>
  <body>
    <?php
    $id=$_REQUEST['id'];
    $sel="select * from `subcategories` where `id`=$id";
    $qry=mysqli_query($con,$sel);
    while($row=mysqli_fetch_assoc($qry))
    {
    ?>
    <form action="catinsert.php">
    <input type="hidden" name="id" value="<?php echo $id ?>">
<input type="hidden" name="photo" value="<?php echo $row['photo'] ?>">
<input type="hidden" name="pnm" value="<?php echo $row['pnm'] ?>">
<input type="hidden" name="op" value="<?php echo $row['op'] ?>">
<input type="hidden" name="dp" value="<?php echo $row['dp']?>">
<input type="hidden" name="cat" value="<?php echo $row['categorie']?>">
<div class="box mt-2">
<img src="photo/<?php echo $row['photo']?>" class="mt-3" alt="not loaded please refrese page" height="78%" width="45%"> <br>
<center>
<h1 style="margin-left:10px;">&nbsp &nbsp &nbsp<?php echo $row['pnm'] ?></h1>
<hr width="52%" style="margin-left:47%">
<div class="cont">
<h2 style="font-weight:bold;" class="text-primary">₹<?php echo $row['dp']?></h2>
<h2>₹<strike><?php echo $row['op']?></strike></h2>
<h2 style="">Description:<?php echo $row['des']?></h2>
<h2 style="">Specification:<br><?php echo $row['spe']?></h2>
<div class="input-group mb-3 me-5" style="margin:auto; width:50%;">
  <div class="input-group-prepend">
    <span class="input-group-text bg-primary"  id="decrease"  style="cursor:pointer; color:white; font-weight:bold" onclick="decreaseValue()" >-</span>
  </div>
 <input type="text" name="qty" value="1" min="1" style="border:2px solid blue; width:40px" id="number" class="text-center" aria-label="Amount (to the nearest dollar)" disable>
  <div class="input-group-append">
    <span class="input-group-text bg-primary increbtn" id="increase" onclick="increaseValue()" style="cursor:pointer; color:white; font-weight:bold">+</span>
  </div>
</div>
<center>
  <button type="submit" class="btn btn-lg btn-primary">Add To Cart</button>
<button class="btn btn-lg btn-primary shopnow">Shop Now</button></center>
</div></div></center>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </form>
    <footer>
    <span>Product id:</span><?php echo $id; ?>

    </footer>
    <script>
     function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
    </script>
  </body>
</html>
<?php } ?>