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
$vendor_email=$_GET['vendor_email'];
$sql_check= "SELECT * FROM property WHERE vendor_email='$vendor_email'";
$result_check= mysqli_query($link, $sql_check);

if(mysqli_num_rows($result_check)>0)
{
  echo "<div><h4>This vendor cannot be deleted because they have properties associated with them.</h4></div>";
  echo "<a href='managevendors.php'class='btn btn-primary mt-3 mb-3'>Return</a>";
  echo "<br><br>";
}
else
{
    $sql="SELECT * from vendor where vendor_email='$vendor_email'";
    $result=mysqli_query($link, $sql);
        echo "<h3>Confirm Delete Vendor</h3>";
        echo "<p>";
    echo "<table class='table'>";
    echo "<tr>
        <td><strong>Vendor Email</td>
        <td><strong>Vendor Name</td>
        <td><strong>Vendor Phone Number</td>
        </tr>";

    $row=mysqli_fetch_array($result);
        $vendor_email=$row["vendor_email"];
        $vendor_fname=$row["vendor_firstname"];
        $vendor_sname=$row["vendor_surname"];
        $vendor_name= $vendor_fname ." ". $vendor_sname;
        $vendor_phone=$row["vendor_phone"];
        echo "<tr>
        <td>$vendor_email</td>
        <td>$vendor_name</td>
        <td>$vendor_phone</td>
            </tr>";
    echo "</table>";
    echo "<p> Are you sure you want to delete this vendor? <p>
        <a href='deletevendor.php?vendor_email=$vendor_email' class='btn btn-primary'>Delete</a>
        <a href='managevendors.php' class='btn btn-primary'>Cancel</a>";
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