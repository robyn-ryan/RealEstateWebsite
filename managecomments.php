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
<h3>Manage Testimonials</h3>
<a href="admin.php" class="btn btn-primary mt-3 mb-3">Back to Admin Home</a>
<br>
<br>
<?php
require "connect.php"; //access the connection code
$sql="SELECT * from comment";
$result=mysqli_query($link, $sql);
if (mysqli_num_rows($result)>0)
{
echo "<div class='table-responsive'>"; /*needed to wrap table in a responsive table class in BS*/
echo "<table class='table'>"; /*need to add the table class to use BS table styles */
echo "<tr>
    <th> Title</th>
    <th>Content</th>
    <th>Author</th>
    <th>Created</th>
    <th>Status</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>";
while($row=mysqli_fetch_array($result)) {
    $id=$row["id"];
    $title=$row["title"];
    $content=$row["content"];
    $author=$row["author_name"];
    $created = date("Y-m-d", strtotime($row["created_at"]));
    $status=$row["status"];
echo "<tr>
    <td>$title</td>
    <td>$content</td>
    <td>$author</td>
    <td>$created</td>
<td>$status</td>";
    if ($status=='planned')
    {echo "<td><a class='btn btn-outline-primary disabled' href='updatecomment.php?id=$id' onclick=\"return confirm('Are you sure you want to approve this comment?');\">      
       Approve</a></td>";} else
    {echo "<td><a class='btn btn-primary' href='updatecomment.php?id=$id' onclick=\"return confirm('Are you sure you want to approve this comment?');\">    
       Approve</a></td>";
    }
    echo "<td><a class='btn btn-primary'href='deletecomment.php?id=$id' onclick=\"return confirm('Are you sure you want to delete this comment?');\"> 
      Delete</a></td>
      </tr>";
}
echo "</table>";
echo "</div>";
}
else
{
echo ("There are no testimonials to display");
}
mysqli_close($link);

?>


</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
