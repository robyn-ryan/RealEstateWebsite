<?php
require 'connect.php';
$vendor_email= $_GET["vendor_email"];
$sql_check= "SELECT * FROM property WHERE vendor_email='$vendor_email'";
$result_check= mysqli_query($link, $sql_check);

if(mysqli_num_rows($result_check)>0)
{
  echo "This vendor cannot be deleted because they have properties associated with them.";
}
else
{
  $sql= "DELETE FROM vendor WHERE vendor_email='$vendor_email'";
  if (mysqli_query( $link, $sql))
  {
  header("Location: http://localhost/property/managevendors.php");
    exit;
  }
  else
  {
    echo "Could not delete vendor";
  }
}
mysqli_close($link);
?>
