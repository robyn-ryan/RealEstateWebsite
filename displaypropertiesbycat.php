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

<section class="p-3 mt-3">
<div class="container-lg">
<?php
require 'connect.php';
$categoryid= $_GET["categoryid"];
$sql="SELECT * from property, category WHERE property.categoryid=$categoryid AND category.categoryid=$categoryid";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_array($result);
echo "<h3>" . $row["categoryname"] . "</h3>"; //output category name at the top of the page
echo "<div class='row justify-content-left my-5'>";//set up a BS row for the cards
do 
{ //use do while to ensure the first row is processed
$propertyid=$row["propertyid"];
$image=$row["image"];
$address=$row["address1"];
$propertydesc=$row["shortdescription"];
$price=$row["price"];
echo "<div class='col-lg-3 col-md-4 mb-3 d-flex'>";
echo "<div class='card w-100 h-100 d-flex flex-column'>";
echo "<img src='$image' class='card-img-top' style='height:220px; object-fit:cover;' alt='property'>";
echo "<div class='card-body d-flex flex-column'>";
echo "<hr>";
echo "<p class='card-title fw-bold'>$address</p>";
echo "<p>&euro; " . number_format($price) . "</p>";
echo "<p class='card-text flex-grow-1'>$propertydesc</p>";
echo "<div class='card-footer text-center bg-white border-0 mt-auto'>";
echo "<a class='btn btn-primary' href='moredetails.php?propertyid=$propertyid'>Details</a>";
echo "</div>";
echo "</div>"; // card-body
echo "</div>"; // card
echo "</div>"; // column
} while ($row=mysqli_fetch_array($result)); //while there are records...fetch next row
echo "</div>"; //close the BS row since no more records
}
else //if there are no records in the result set
{
echo "<div class='feedback'>";
echo "<h5>There are no properties in this category</h5>"; //output a message
echo "</div>";
}
mysqli_close($link); //close the connection
?>
</div><!--close the BS container-->



</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
