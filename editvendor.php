<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Edit Vendor</title>
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
$vendor_email=$_GET["vendor_email"];         //retrieve the productid passed in the url
$sql="SELECT * FROM vendor WHERE vendor_email='$vendor_email'";
$result=mysqli_query($link, $sql);      //run the query
$row=mysqli_fetch_array($result);     //store the recordset in $row
//retrieve the database fields from the recordset and assign to variables for output
$vendor_email=htmlspecialchars($row["vendor_email"]);
$vendor_phone=$row["vendor_phone"];
$vendor_firstname=htmlspecialchars($row["vendor_firstname"]);
$vendor_surname=htmlspecialchars($row["vendor_surname"]);
?>
 <!--show image of product and then write out the existing fields into the form fields-->
 <form method="post" action="processedit.php">
<input type="hidden" name="original_vendor_email" value="<?php echo $vendor_email; ?>">

<label for="fname">First Name:</label>
<div><input type="text" name="vendor_firstname" id="vendor_firstname" class="form-control mt-2 mb-2" value="<?php echo $vendor_firstname; ?>" required/></div>
<label for="sname">Surname:</label>
<div><input class="mt-2 mb-2 form-control" type="text" name="vendor_surname" id="vendor_surname" value="<?php echo $vendor_surname; ?>" required></div>
<label for="vendor_phone">Vendor Phone Number:</label>
<div><input class="mt-2 mb-2 form-control" type="text" name="vendor_phone" id="vendor_phone" value="<?php echo $vendor_phone; ?>" required></div>
<div><input type="submit" class="btn btn-primary mt-3 mb-3" name="submit" value="Edit Vendor"/>
<a href="managevendors.php" class="btn btn-primary mt-3 mb-3">Cancel</a></div>

</form>
</div>

</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>