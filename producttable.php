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
  <form action="producttable.php">
  <?php
        require "dbcon.php";
        $sel="select categorie from `categories`";
        $qry=mysqli_query($con,$sel);
        ?>
        <select name="categorie" class="form-control">
        <option disabled selected>Select One Categorie</option>
        <?php 
        while($row=mysqli_fetch_assoc($qry))
        {
            ?> 
            <option><?php echo $row['categorie'] ?></option>
            <?php 
        }
       ?>
            </select>
        <input type="submit" name="btn" class="btn btn-primary" value="Search">
  </form>
</body>
</html>
<?php
if(isset($_REQUEST['btn']))
{
$cat=$_REQUEST['categorie'];
require "dbcon.php";
$sel="SELECT * FROM `subcategories` WHERE `categorie`='$cat'";
$qry=mysqli_query($con,$sel);
$nrow=mysqli_num_rows($qry);
if($nrow>0)
{
while($row=mysqli_fetch_assoc($qry))
{
    $id=$row['id'];
    $categorie=$row['categorie'];
    ?>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Original Prize</th>
      <th scope="col">Product Discount Prize</th>
      <th scope="col">Description:</th>
      <th scope="col">Specification:</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><?php echo $id ?></td>
        <td><img src="photo/<?php echo $row['photo']?>" height="80" width="50" alt=""></td>
    <td><?php echo $row['pnm']?></td>
    <td><?php echo $row['op']?></td>
    <td><?php echo $row['dp']?></td>
    <td><?php echo $row['des']?></td>
    <td><?php echo $row['spe']?></td>
    <td><a href="update.php?id=<?php echo $id ?>&categorie=<?php echo $categorie ?>"><ion-icon name="create-outline"></ion-icon></a></td>
    <td><a href="delete.php?id=<?php echo $id ?>&categorie=<?php echo $categorie ?>"><ion-icon name="trash-outline"></ion-icon></a></td>
<?php
}}}
else
{?>
    <td>No Data Found</td>
    <?php
}
?>
</tr>
</tbody>
</table>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>