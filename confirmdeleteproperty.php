<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>page title</title>
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
<div class="container-lg feedback">
<?php
require 'connect.php';
$propertyid=$_GET['propertyid'];
$sql="SELECT * from property where propertyid=$propertyid";
$result=mysqli_query($link, $sql);
    echo "<h3>Confirm Delete Property</h3>";
    echo "<p>";
echo "<table class='table'>";
echo "<tr>
    <td><strong>Image</td>
    <td><strong>Property</td>
    <td><strong>Price</td>
<td><strong>Description</td>
    </tr>";

$row=mysqli_fetch_array($result);
    $image=$row["image"];
    $address=$row["address1"];
    $shortdescription=$row["shortdescription"];
    $price=$row["price"];
    echo "<tr>
<td><img src='$image' width=100 height=100> </td>
        <td>$address</td>
        <td>&euro; $price</td>
        <td>$shortdescription</td>
        </tr>";
echo "</table>";
echo "<p> Are you sure you want to delete this property? <p>
    <a href='deleteproperty.php?propertyid=$propertyid' class='btn btn-primary'>Delete</a>
    <a href='manageproperties.php' class='btn btn-primary'>Cancel</a>";

mysqli_close($link);
?>
</div>

</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
