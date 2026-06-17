<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Manage Vendors</title>
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
<h3>Manage Vendors</h3>
<a href="addvendor.php" class="btn btn-primary mt-3 mb-3">Add A New Vendor</a>
<a href="admin.php" class="btn btn-primary mt-3 mb-3">Back to Admin Home</a>
<br>
<br>
<?php
require "connect.php"; //access the connection code
$sql="SELECT * from vendor";
$result=mysqli_query($link, $sql);
if (mysqli_num_rows($result)>0)
{
echo "<div class='table-responsive'>"; /*needed to wrap table in a responsive table class in BS*/
echo "<table class='table'>"; /*need to add the table class to use BS table styles */
echo "<tr>
    <th>Vendor Email</th>
    <th>Vendor Name</th>
    <th>Vendor Phone Number</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>";
while($row=mysqli_fetch_array($result)) {
    $id=$row["id"];
    $vendor_email=$row["vendor_email"];
    $vendor_fname=$row["vendor_firstname"];
    $vendor_sname=$row["vendor_surname"];
    $vendor_name= $vendor_fname ." ". $vendor_sname;
    $vendor_phone=$row["vendor_phone"];
echo "<tr>
    <td>$vendor_email</td>
    <td>$vendor_name</td>
    <td>$vendor_phone</td>
    <td><a href='editvendor.php?vendor_email=$vendor_email' class='btn btn-primary'>Update</a></td>
            <td><a href='confirmdeletevendor.php?vendor_email=$vendor_email' class='btn btn-primary'>Delete</a></td>
      </tr>";
}
echo "</table>";
echo "</div>";
}
else
{
    echo ("There are no vendors to display");
}
mysqli_close($link);

?>


</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>