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
                <center><h1 style="color:white">Add New Product</h1></center>
            </div>
        <label for="image">Upload Product Image:</label>
        <input type="file" name="photo" id="image"><hr>
        <label for="productnm">Product Name:</label>
        <input type="text" name="pnm" id="productnm" class="form-control" placeholder="Enter your Product Name Here"> <hr>
        <label for="cat">Categories</label>
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
            </select><hr>
        <label for="oprice">Original Price:</label>
        <input type="number" name="op" id="oprice" class="form-control" placeholder="Enter your Products Original Price Here"> <hr>
        <label for="dprice">Discount Price:</label>
        <input type="number" name="dp" id="productnm" class="form-control" placeholder="Enter your Products Discount Price Here"> <hr>
        
        <label for="productnm">Description:</label>
        <input type="textarea" name="des" id="productnm" class="form-control" placeholder="Enter your Product Descreption Here"> <hr>
        <label for="productnm">Specification:</label>
        <input type="textarea" name="spe" id="productnm" class="form-control" placeholder="Enter your Product Specifications Here"> <hr>
    <input type="submit" value="Add" name="btn" class="btn btn-primary btn-lg btn-block">
    </div>
    </form>
    <?php
if(isset($_REQUEST['btn']))
{
$pnm=$_REQUEST['pnm'];
$cat=$_REQUEST['categorie'];
$op=$_REQUEST['op'];
$dp=$_REQUEST['dp'];
$des=$_REQUEST['des'];
$spe=$_REQUEST['spe'];
$filename=$_FILES['photo']['name'];
    $filetemp=$_FILES['photo']['tmp_name'];
    $folder="photo/".$filename;
    $move=move_uploaded_file($filetemp,$folder);
    $insert="INSERT INTO `subcategories`(`categorie`, `photo`, `pnm`, `op`, `dp`,`des`,`spe`) VALUES ('$cat','$filename','$pnm','$op','$dp','$des','$spe')";
        mysqli_query($con,$insert);
    }
?>
</body>
</html>