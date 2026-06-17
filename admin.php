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
<div class="container-lg">
<div class="feedback">
<?php
session_start();
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "<h3> Administrator Area</h3>";
echo "Hi " . $username . "!<p>";
echo "Choose one of the menu options to Manage Comments, Properties or Vendors.  &nbsp; &nbsp;";
echo "<a href='logout.php' class='btn btn-primary'>Logout</a>";
echo "<p><a href='managecomments.php' class='btn btn-primary'>Manage Comments</a></p>";
echo "<p><a href='manageproperties.php' class='btn btn-primary'>Manage Properties</a></p>";
echo "<p><a href='managevendors.php' class='btn btn-primary'>Manage Vendors</a></p>";
} else {
  echo "<p>You are not logged in. Please <a href='adminlogin.php'>login</a> first.</p>";
}
?>
</div>
</div>

</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
