<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
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

    <section id="contact" class="py-5">
      <div class="container-lg">
                <h3 class="mb-3">Contact Us</h3>
                <p class="lead text-muted mb-4">All the information you need to reach us</p>

            
              <div class="row g-4">
                      <div class="col-md-4">
                        <h6 class="mb-3 fw-bold">Address</h6>
                        <ul class="list-unstyled">
                        <li>7 Brickfield Lane</li>
                        <li>Wicklow Town</li>
                        <li>County Wicklow</li>
                        <li>A67 FW96</li>
                        </ul>
                      </div>
                  
                      <div class="col-md-4">
                        <h6 class="mb-3 fw-bold">Email</h6>
                        <ul class="list-unstyled">
                        <li>info@abcproperties.ie</li>
                        </ul>
                        <h6 class="mt-3 mb-3 fw-bold">Phone</h6>
                        <ul class="list-unstyled">
                        <li>(040)420000</li>
                        </ul>
                      </div>
                  
                      <div class="col-md-4">
                        <h6 class="mb-3 fw-bold">Opening Hours</h6>
                        <ul class="list-unstyled">
                        <li>Mon-Thur: 9AM - 5PM</li>
                        <li>Fri: 9AM-4PM</li>
                        <li>Weekends & Public Holidays: Closed</li>
                        </ul>
                      </div>
              </div>
              <h3 class="pt-5 pb-2">Getting Here</h3>
             </div>
            
                
             <div class="container-fluid p-0 mb-5">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2619.386453299706!2d-6.051276461041625!3d52.98461790183369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sie!4v1776790494403!5m2!1sen!2sie" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                        </iframe>
                    </div>
             </div>
            
            <section class="py-5">
                <div class="container-lg">
                  <div class="text-start">
                   <h3>Get in Touch</h3>
                   <p class="lead text-muted mb-5">Any questions? Fill out the form to get in touch</p>
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
                         <option value="BUYH">Buying Holiday Homes</option>
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
       </section>
                 
  <!--Footer-->
  <?php include("includes/footer.html");?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>    

</body>
</html>