<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>All Properties</title>
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
<?php
require "connect.php"; //access the connection code
$sql="SELECT * FROM property";
$result=mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0) //check there are records in the result set
{
echo "<div class='container-lg'>";//set up the BS container
echo "<h3>All Properties</h3>";
echo "<div class='row justify-content-left my-4'>";//set up a BS row for the cards

while($row=mysqli_fetch_array($result)) //while there are records in the array
{
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
} //end while loop
echo "</div>"; //close the BS row since no more records
}
else //if there are no records in the result set
{
echo "<h3>There are no properties in the database</h3>"; //output a message
}
mysqli_close($link); //close the connection
?>


</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
