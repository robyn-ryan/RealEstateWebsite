<?php
$server="sql302.infinityfree.com";
$dbuser="if0_42200244";
$password="dtjuK0356z9TdY";
$link=mysqli_connect($server,$dbuser,$password, "if0_42200244_property");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
