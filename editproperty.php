<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Edit Property</title>
  <meta charset="utf-8">
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/stylesbs.css">

<!-- set the viewport element to give the browser instructions on how to control the page's dimensions and scaling-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid p-0">
<?php include("includes/nav.html");?>

<section class="py-5">
<div class="container-lg">
<?php
require 'connect.php';
$propertyid=$_GET["propertyid"];         //retrieve the productid passed in the url
$sql="SELECT * FROM property, category WHERE propertyid=$propertyid AND category.categoryid=property.categoryid";
$result=mysqli_query($link, $sql);      //run the query
$row=mysqli_fetch_array($result);     //store the recordset in $row
//retrieve the database fields from the recordset and assign to variables for output
$propertyid=$row["propertyid"];
$address=htmlspecialchars($row["address1"]);
$town=htmlspecialchars($row["town"]);
$county=htmlspecialchars($row["county"]);
$bedrooms=htmlspecialchars($row["bedrooms"]);
$bathrooms=htmlspecialchars($row["bathrooms"]);
$price=htmlspecialchars($row["price"]);
$size=htmlspecialchars($row["size"]);
$shortdescription=htmlspecialchars($row["shortdescription"]);
$longdescription=htmlspecialchars($row["longdescription"]);
$vendor_email=htmlspecialchars($row["vendor_email"]);
$categoryid=$row["categoryid"];
$categoryname=htmlspecialchars($row["categoryname"]);
$image=htmlspecialchars($row["image"]);
?>
 <!--show image of product and then write out the existing fields into the form fields-->
 <?php echo "<img src='$image' width=100 height=100>" ?>
 <form method="post" action="processedit.php">
 <input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>"/> <!--productid is not displayed but needed to update the correct record in the processedit page-->
<label for="address">Address:</label>
<div><input type="text" name="address" id="address" class="form-control mt-2 mb-2" value="<?php echo $address; ?>" required/></div>
<label for="town">Town:</label>
<div><input class="mt-2 mb-2 form-control" type="text" name="town" id="town" value="<?php echo $town; ?>" required></div>
<label for="county">County:</label>
<div><input class="mt-2 mb-2 form-control" type="text" name="county" id="county" value="<?php echo $county; ?>" required></div>
<label for="bedrooms">Bedrooms:</label>
<div><input class="mt-2 mb-2 form-control" type="number" name="bedrooms" id="bedrooms" value="<?php echo $bedrooms; ?>" required></div>
<label for="bathrooms">Bathrooms:</label>
<div><input class="mt-2 mb-2 form-control" type="number" name="bathrooms" id="bathrooms" value="<?php echo $bathrooms; ?>" required></div>
<label for="price">Price:</label>
<div><input type="number" name="price" id="price" min="0" class="form-control mt-2 mb-2" value= "<?php echo $price; ?>" required /></div>
<label for="size">Size:</label>
<div><input type="number" name="size" id="size" min="0" class="form-control mt-2 mb-2" value= "<?php echo $size; ?>" required /></div>
<label for="description">Description:</label>
<div><textarea name="shortdescription"  id="shortdescription" class="form-control mt-2 mb-2" rows="8" cols="35" required><?php echo $shortdescription; ?> </textarea></div>
<label for="longdescription">Long Description:</label>
<div><textarea name="longdescription" id="longdescription" class="form-control mt-2 mb-2" rows="8" cols="35" required><?php echo $longdescription; ?></textarea></div>
<label for="vendoremail">Vendor Email:</label>
<!--create a select box with dropdown email options taken from the database as this is more user friendly-->
<div><select name="vendor_email" class="mt-2 mb-2" id="vendor_email" required>
<?php
echo "<option value = '$vendor_email'>$vendor_email</option>";      
$sql="SELECT vendor_email FROM vendor";  //choose all the  possible options from the database table
 $result=mysqli_query($link,$sql);  //run the query
   if (mysqli_num_rows($result) >0)   //if records exist, output them as dropdown options
   {
 while ($row=mysqli_fetch_array($result)){
              $vendor_email=$row['vendor_email'];
        echo "<option value='$vendor_email'>$vendor_email</option>";  //set the value of the option selected and show the user the possible email addresses
  }
    }
    ?>
</select>
</div>
<label for="categoryid">Category ID: </label>
<!--create a select box with dropdown category options taken from the database as this is more user friendly-->
<div>
<select name="category" class="mt-2 mb-2" id="categoryid" required>
<?php
  echo "<option value = '$categoryid'>$categoryname</option>";     
  $sql="SELECT * FROM category";       //choose all the  possible options from the database table
  $result=mysqli_query($link, $sql);    // run the query
  if (mysqli_num_rows($result) >0)    //if records exist, output them as dropdown options
  {
   while ($row=mysqli_fetch_array($result)){
     $categoryname=$row['categoryname'];
   $categoryid=$row['categoryid'];
     echo "<option value='$categoryid'>$categoryname</option>";  //set the value of the option selected to the categoryid but show the user the category name
    }
  }
mysqli_close($link);
?>
</select>
</div>
<label for="image">Image Path: </label>
<div><input type="text" id="image" name="image" class="form-control mt-2 mb-2" value="<?php echo $image; ?>" required /></div>

<div><input type="submit" class="btn btn-primary mt-3 mb-3" name="submit" value="Edit Property"/>
<a href="manageproperties.php" class="btn btn-primary mt-3 mb-3">Cancel</a></div>

</form>
</div>

</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
