<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Subscribe</title>
  <meta charset="utf-8">
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/stylesbs.css">

<!-- set the viewport element to give the browser instructions on how to control the page's dimensions and scaling-->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
</head>
<body>
<div class="container-fluid p-0">
<?php include("includes/nav.html");?>
<div class="container py-5">
<?php

$server = "sql302.infinityfree.com";
$dbuser = "if0_42200244";
$password = "dtjuK0356z9TdY";
$database = "if0_42200244_property";

$link = mysqli_connect($server, $dbuser, $password, $database);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        echo "<h3>Invalid email address.</h3>";
        echo "<a class='btn btn-primary mt-3' href='index.php'>Return to Home Page</a>";

    } else {

        // Check whether email already exists
        $check = mysqli_prepare(
            $link,
            "SELECT email FROM newsletter_subscribers WHERE email = ?"
        );

        mysqli_stmt_bind_param($check, "s", $email);
        mysqli_stmt_execute($check);
        mysqli_stmt_store_result($check);

        if (mysqli_stmt_num_rows($check) > 0) {

            echo "<h3>This email address is already subscribed.</h3>";
            echo "<a class='btn btn-primary mt-3' href='index.php'>Return to Home Page</a>";

        } else {

            // Insert new subscriber
            $insert = mysqli_prepare(
                $link,
                "INSERT INTO newsletter_subscribers (email) VALUES (?)"
            );

            mysqli_stmt_bind_param($insert, "s", $email);

            if (mysqli_stmt_execute($insert)) {

                echo "<h3>You are now subscribed!</h3>";
                echo "<p>Thank you for subscribing to our newsletter.</p>";

                echo "<a class='btn btn-primary mt-3' href='index.php'>
                        Return to Home Page
                      </a>";

            } else {

                echo "<h3>An error occurred while processing your subscription.</h3>";

            }

            mysqli_stmt_close($insert);
        }

        mysqli_stmt_close($check);
    }
}

mysqli_close($link);

?>
</div>
</body>
</html>