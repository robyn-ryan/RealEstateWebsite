<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Add Property</title>
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
<div class="feedback">
<?php

require 'connect.php';
if(isset($_POST['submit'])) {
$address=mysqli_real_escape_string($link,$_POST['address']);
$town=mysqli_real_escape_string($link,$_POST['town']);
$county=mysqli_real_escape_string($link,$_POST['county']);
$bedrooms=mysqli_real_escape_string($link,$_POST['bedrooms']);
$bathrooms=mysqli_real_escape_string($link,$_POST['bathrooms']);
$price=mysqli_real_escape_string($link,$_POST['price']);
$size=mysqli_real_escape_string($link,$_POST['size']);
$shortdescription=mysqli_real_escape_string($link,$_POST['shortdescription']);
$longdescription=mysqli_real_escape_string($link,$_POST['longdescription']);
$vendor_email=$_POST['vendor_email'];
$categoryid=$_POST['categoryid'];
$image=mysqli_real_escape_string($link,$_POST['image']);
$sql_insert="INSERT INTO property(address1, town, county, bedrooms, bathrooms, price, size, shortdescription, longdescription, vendor_email, categoryid, image) VALUES ('$address', '$town', '$county', '$bedrooms', '$bathrooms', '$price', '$size', '$shortdescription', '$longdescription', '$vendor_email', '$categoryid', '$image')";
if(mysqli_query($link, $sql_insert)) {
    echo "Your property has been successfully added <p>";
    echo "<a class='btn btn-primary mt-5' href='manageproperties.php'>Return to Manage Properties page</a>";
    
    }
    else {
      echo "An error occurred, try again!";
    }
    
    }
    mysqli_close($link);
    ?>
    </div>
    
</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
