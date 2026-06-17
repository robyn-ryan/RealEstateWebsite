<?php
require 'connect.php';
$id= $_GET["id"];
$sql= "UPDATE comment SET status='planned' WHERE id=$id";
if (mysqli_query( $link, $sql))
{
   header("Location: http://abcproperties.freepage.cc/manageproperties.php");
  exit;
}
else
{
 echo ("The record could not be updated");
}
mysqli_close($link);
?>
