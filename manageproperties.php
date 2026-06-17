<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Properties</title>
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
<h3>Manage Properties</h3>
<a href="addproperty.php" class="btn btn-primary mt-3 mb-3">Add a new property</a>
<a href="admin.php" class="btn btn-primary mt-3 mb-3">Back to Admin Home</a>
<br>
<br>
<?php
require 'connect.php';

$sql="SELECT * from property";
$result=mysqli_query($link, $sql);
if (mysqli_num_rows($result)>0)
{
    echo "<div class='table-responsive'>"; /*needed to wrap table in a responsive table class in BS*/
    echo "<table class='table'>"; /*need to add the table class to use BS table styles */
    echo "<tr>
        <td><strong>Image</td>
        <td><strong>Property</td>
        <td><strong>Price</td>
        <td><strong>Description</td>
        <td><strong>Update</td>
        <td><strong>Delete</td>
        </tr>";
    while($row=mysqli_fetch_array($result)) {
        $propertyid=$row["propertyid"];
        $image=$row["image"];
        $address=$row["address1"];
        $shortdescription=$row["shortdescription"];
        $price=$row["price"];
        echo "<tr>
            <td><img src='$image' width=100 height=100> </td>
            <td>$address</td>
            <td>&euro; $price</td>
            <td>$shortdescription</td>
            <td><a href='editproperty.php?propertyid=$propertyid' class='btn btn-primary'>Update</a></td>
            <td><a href='confirmdeleteproperty.php?propertyid=$propertyid' class='btn btn-primary'>Delete</a></td>
            </tr>";
    }
    echo "</table>";
    echo "</div>";
    }
    else
    {
    echo ("There are no records in the database");
    }
    mysqli_close($link);
    ?>
    
</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
