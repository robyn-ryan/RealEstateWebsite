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
<div class="feedback">
<?php
require 'connect.php';
if(isset($_POST['submit']))
{
    $fname = mysqli_real_escape_string($link, $_POST['vendor_firstname']);
    $sname = mysqli_real_escape_string($link, $_POST['vendor_surname']);
    $email = mysqli_real_escape_string($link, $_POST['vendor_email']);
    $phone = mysqli_real_escape_string($link, $_POST['vendor_phone']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        die("<h4>Invalid email format</h4>");
    }
    $check_sql = "SELECT vendor_email FROM vendor WHERE vendor_email='$email'";
    $check_result = mysqli_query($link, $check_sql);

    if (mysqli_num_rows($check_result) > 0) 
    {
        echo "<h4>Email already exists</h4>";
        echo "<a href='managevendors.php'class='btn btn-primary mt-3 mb-3'>Return</a>";
        echo "<br><br>";
    }
    $sql = "INSERT INTO vendor
    (vendor_firstname, vendor_surname, vendor_email, vendor_phone)
    VALUES
    ('$fname', '$sname', '$email', '$phone')";

    if(mysqli_query($link, $sql)) {
        echo "<h4>Vendor added successfully</h4>";
        echo "<a href='managevendors.php' class='btn btn-primary mt-3'>Back</a>";
    } else {
        echo "<h4>Error: " . mysqli_error($link) . "<h4>";
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
