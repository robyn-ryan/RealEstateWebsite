<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>About Us</title>
  <meta charset="utf-8">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

 <!-- Link to your custom css -->
 <link rel="stylesheet" href="css/stylesbs.css">

 <!-- set the viewport element to give the browser instructions on how to control the page's dimensions and scaling-->
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap Icons CDN -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

 <!-- Font Awesome Icons CDN -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

 <div class="container-fluid p-0">
 <?php include("includes/nav.html");?>
 <?php include("includes/overlay.html");?>
 

   <!-- company image & intro text -->
   <section class="py-5">
   <!--This container should have one row with two columns - one for the introductory text and one for the image - refer slide 22 and 23 -->
   <div class="container-lg">
    <div class="row justify-content-center align-items-center">
     <div class="text-left">
        <h3>About Us</h3>
     </div>
     <p class="lead text text-muted">All you need to know about ABC Properties</p>
     <div class="col-md-6">
     <p>We are a small local business established in 2022 that specialises in residential and commercial buying and selling. 
        Our team is comprised of people from the Wicklow area, and from various backgrounds in marketing, sales and finance. 
        Our experts can help guide first-time buyers choose their first home, or give advice on options for down-sizing. 
        We also have a dedicated investments advisor on hand to answer any queries you may have.</p>
     <p>Exciting things are coming as we expand our reach and knowledge base to offer a wider variety of residential, commercial
         and land properties, in addition to a selection of hand-picked holiday homes. Take a look at our services below for more
        information about our current offerings. </p>
     </div>
     <div class="col-md-6 text-center d-none d-md-block">
        <img class="img-fluid" src="images/aboutus.jpg" alt="sale">
     </div>
    </div>
   </div>
   </section>
  
              

   <!--services offered-->
   <section class="py-5"> 
    <!-- This container should outline the services that your company offers (6 services), you should use cards set out in columns, a grid or a carousel - see notes -->
   <div class="container-lg">
    <h3 class="mb-3">Our Services</h3>
    <p class="lead text-muted mb-4">See how we can help you</p>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 mb-3">

                <div class="card h-100">
                    <img src="images/sale.jpg" class="card-img-top" alt="sale">
                    <div class="card-body">
                        
                        <h5 class="card-title">Selling Your Property</h5>
                        <p class="card-text">Contact us today for an appraisal. Our valuation experts have an in-depth knowledge of the property market in your area.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary"> Book Valuation</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">

                <div class="card h-100">
                    <img src="images/newsite.jpg" class="card-img-top" alt="land">
                    <div class="card-body">
                        
                        <h5 class="card-title">Buy Land and Sites</h5>
                        <p class="card-text">Browse the current listings on offer and get in contact with us to
                            arrange a viewing or for more information.
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">View Listings</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">

                <div class="card h-100">
                    <img src="images/residentialnew.jpg" class="card-img-top" alt="res">
                    <div class="card-body">
                        
                        <h5 class="card-title">Buy Residential Property</h5>
                        <p class="card-text">Browse the current listings on offer and get in contact with us to
                            arrange a viewing or for more information.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">View Listings</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">

                <div class="card h-100">
                    <img src="images/commercial.jpg" class="card-img-top" alt="comm">
                    <div class="card-body">
                        
                        <h5 class="card-title">Buy Commerical Property</h5>
                        <p class="card-text">Browse the current listings on offer and get in contact with us to
                            arrange a viewing or for more information.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">View Listings</a></div>
                </div>
            </div>
         
            <div class="col-lg-4 col-md-6 mb-3">

                <div class="card h-100">
                    <img src="images/invest.jpg" class="card-img-top" alt="inv">
                    <div class="card-body">
                        
                        <h5 class="card-title">Investments</h5>
                        <p class="card-text">Browse the current listings on offer and get in contact with us to
                            arrange a viewing or for more information.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-primary">More Information</a></div>
                </div>
            </div>
        </div>
   </div>
   </section>

   <!-- our team -->
   <section class="py-5">
   <!-- This container will store info on your staff. The team should have at least 4 members. I used and adapted Bootstrap Brain Component - see notes -->
 <div class="container-lg">
    <h3 class="text-start m-1 pt-3 pb-3">Our Team</h3>
    <p class="lead text-muted">Meet our team of experts</p>
    <div class="row my-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <img class="card-img-top" src="images/staff1.jpg" alt="staff1">
                <div class="card-body">
                    <h5 class="card-title">Mark Brophy</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Director</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <img class="card-img-top" src="images/staff2.jpg" alt="staff2">
                 <div class="card-body">
                    <h5 class="card-title">Carol Cunningham</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Commercial & Sites Sales Advisor</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <img class="card-img-top" src="images/staff3.jpg" alt="staff3">
                <div class="card-body">
                    <h5 class="card-title">Maria O'Hara</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Residential Sales Advisor</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card">
                <img class="card-img-top" src="images/staff4.jpg" alt="staff4">
                <div class="card-body">
                    <h5 class="card-title">John Smith</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Investments Advisor</h6>
                </div>
            </div>
        </div>
    </div>
 </div>
</section>

   <!-- contact form -->
   <section class="py-5">
   <!--This container should house a contact form. You can adapt sample forms from Bootsrap documentation or use the simple form provided as a starting point. You need to add Bootstrap icons to the form fields (see slide 44) and a select element dropdown (see slide 38) relating to each of your services outlined in the services section -->
    <!--form code adapted from https://mdbootstrap.com/docs/standard/forms/overview/ i moved the labels above the input boxes and added placeholder text -->
   <div class="container-lg">
     <div class="text-start">
      <h3>Get in Touch</h3>
      <p class="lead text-muted">Any questions? Fill out the form to get in touch</p>
    </div>
      
        <div class="row">
           <form style="width: 26rem;">
          <!-- Name input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label for="name" class="form-label">Name:</label>
             <div class="mb-4 input-group">
                <span class="input-group-text">
                    <i class="bi bi-person-fill"></i>
                </span>
             <input type="name"  class="form-control" id="name" placeholder="Enter your name">
             </div>
          </div>
        
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
             <label for="email" class="form-label">Email address:</label>
             <div class="mb-4 input-group">
                <span class="input-group-text">
                    <i class="bi bi-envelope-fill"></i>
                </span>
             <input type="email"  class="form-control" id="email" placeholder="name@example.com">
             </div>
          </div>
          <!-- Service Dropdown -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label for="dropdownSelect" class="form-label">What is your question about?</label>
            <div class="mb-4 input-group">
                <span class="input-group-text">
                    <i class="bi bi-chat-right-text-fill"></i>
                </span>
            
            <select class="form-select" id="dropdownSelect">
            <option value="BUYR">Buying Residential</option>
            <option value="SELL">Selling and Valuation</option>
            <option value="BUYL">Buying Sites </option>
            <option value="BUYC">Buying Commercial</option>
            <option value="INV">Investment Query</option>
            </select>
            </div>
           </div>
          <!-- Message input -->
           <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="form4Example3" rows="4" placeholder="Enter your message"></textarea>
           </div>
        
          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-4">
            <input
              class="form-check-input me-2"
              type="checkbox"
              value=""
              id="form4Example4"
              checked
            />
            <label class="form-check-label" for="form4Example4">
              Send me a copy of this message
            </label>
          </div>
        
          <!-- Submit button -->
          <div class="text-center">  
          <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4 w-100">Send</button>
        </div>
         </form>
       </div>
    </div>
   </section>
    

   <!--footer-->
   <?php include("includes/footer.html");?>

 </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<!--Nav bar source: https://getbootstrap.com/docs/5.0/components/navbar/ -->
<!--Overlay source: Blackboard bootstrap notes-->
<!--Cards and grid source:Blackboard bootstrap notes-->
<!--Footer source: https://getbootstrap.com/docs/5.1/examples/footers/ -->