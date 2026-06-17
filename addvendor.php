<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Add Vendor</title>
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
<h3>Add a Vendor</h3>
<form method="post" action="processaddvendor.php">
<label for="fname">First Name:</label>
<div><input type="text" name="vendor_firstname" id="vendor_firstname" class="form-control mt-2 mb-2" placeholder="Enter first name" required/></div>
<label for="sname">Surname:</label>
<div><input class="mt-2 mb-2 form-control" type="text" name="vendor_surname" id="vendor_surname" placeholder="Enter surname" required></div>
<label for="vendor_email">Vendor Email:</label>
<div><input class="mt-2 mb-2 form-control" type="email" name="vendor_email" id="vendor_email" placeholder="name@email.com" required></div>
<label for="vendor_phone">Vendor Phone Number:</label>
<div><input class="mt-2 mb-2 form-control" type="text" name="vendor_phone" id="vendor_phone" placeholder="Enter phone number" required></div>
<div><input type="submit" class="btn btn-primary mt-3 mb-3" name="submit" value="Add Vendor"/>
<a href="managevendors.php" class="btn btn-primary mt-3 mb-3">Cancel</a></div>

</form>
</div> <!--close the container-lg div -->

</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
