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

<!-- Bootstrap and FontAwesome Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid p-0">

<?php include("includes/nav.html");?>

<section class="py-5">
    <div class="container-lg">

        <button class="btn btn-primary" onclick="goBack()">Go Back</button>
        <script>
        function goBack() {
        window.history.back();
        }
        </script>


<?php
require "connect.php"; //access the connection code

$propertyid= $_GET["propertyid"];
$sql= "SELECT * FROM property WHERE propertyid='$propertyid'";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);

    $town=$row["town"];
    $property=$row["address1"];
    $county=$row["county"];
    $address= $property .", ". $town .", ". $county;
    $price=$row["price"];
    $bathrooms=$row["bathrooms"];
    $size=$row["size"];
    $bedrooms=$row["bedrooms"];
    $description=$row["shortdescription"];
    $longdescription=$row["longdescription"];
    $image=$row["image"];
    mysqli_close($link);
?>
<!--PROPERTY DETAILS-->
   <div class="row mt-4">
        <div class="col-lg-8">
            <h3 class="mt-4">
                <?php echo $address; ?>
            </h3>

            <h4 class="price">
                €<?php echo number_format($price); ?>
            </h4>
        </div>
    </div>

    <div class="row g-4 align-items-stretch">

    <!-- LEFT COLUMN -->
    <div class="col-lg-8 d-flex">

        <img src="<?php echo $image; ?>" 
             class="img-fluid w-100 property-main-image"
             alt="<?php echo htmlspecialchars($property); ?>">

    </div>

    <!-- RIGHT COLUMN -->
    <div class="col-lg-4">

        <div class="card property-card shadow-sm h-100">

            <div class="card-body">

                <h3 class="mb-3">Property Details</h3>

                <?php if ($bedrooms > 0) { ?>
                <p>
                    <i class="fa-solid fa-bed"></i>
                    <strong>Bedrooms:</strong>
                    <?php echo $bedrooms; ?>
                </p> 
                <?php } ?>
                <?php if($bathrooms > 0) { ?>
                <p>
                    <i class="fa-solid fa-bath"></i>
                    <strong>Bathrooms:</strong>
                    <?php echo $bathrooms; ?>
                </p>
                <?php } ?>

                <p>
                    <i class="fa-solid fa-cube"></i>
                    <strong>Size:</strong>
                    <?php echo $size; ?>
                    m<sup>2</sup>
                </p>

                <hr>

                <p>
                    <?php echo $description; ?>
                </p>

            </div>

        </div>

    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h3>Property Description</h3>
            <p>
                <?php echo $longdescription; ?>
            </p>
        </div>
    </div>
</div>
</section>
<?php include("includes/footer.html");?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>