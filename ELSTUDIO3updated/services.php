
<?php
  require("includes/header.php");
?>

 <!---------------- START OF NAVBAR ----------------->

 <nav class="navbar navbar-expand-md menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/images/eLstudio-logo.png" class="img-fluid" height="55" width="160" alt="logo image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav"  height="55">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link smooth-scroll active" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="resources.php">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="updates.php">Updates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="partners.php">Partners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="contact.php">Contact Us</a>
          </li>
          <li>
          <button type="button" class="btn-rounded" data-bs-toggle="modal" data-bs-target="#login">Login</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!------------ END OF NAVBAR --------------->

<!------------ START OF SERVICES SECTION --------------->

<section id="services">
    <div class="container services-container" data-aos="fade-up">
      <div class="section-title text-center">
          <h1>Services</h1>
           <h5><a href="index.php">Home</a> / Services</h5>
        </div>
        <hr class="featurette-divider">
          <div class="row mb-5">
              <!-- services item -->
              <div class="col-xl-3 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <p class="text-break"><i class="fa-solid fa-circle"></i> Provision of space for conduct of asynchronus and synchronus online classes</p>
                </div>
              </div><!-- End -->

              <!-- services item -->
              <div class="col-xl-3 col-md-6 align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                  <p class="text-break"><i class="fa-solid fa-circle"></i> Assistance in the production and reproduction of different instructional materials both print and non-print (e-learning materials, AVP, etc.)</p>
                </div>
              </div><!-- End -->

              <!-- services item -->
              <div class="col-xl-3 col-md-6  align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                  <p class="text-break"><i class="fa-solid fa-circle"></i> Assistance in the copyright application of instructional materials</p>
                </div>
              </div><!-- End -->

              <!-- services item -->
              <div class="col-xl-3 col-md-6 align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                  <p class="text-break"><i class="fa-solid fa-circle"></i> Conduct of capability enhancement activities related to flexible learning</p>
                </div>
              </div><!-- End -->

              <div class="col-xl-3 col-md-6  align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                  <p class="text-break"><i class="fa-solid fa-circle"></i> Conduct of research and development activities</p>
                </div>
              </div>

              <!-- services item -->
              <div class="col-xl-3 col-md-6  align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                  <p class="text-break"><i class="fa-solid fa-circle"></i> Networking events</p>
                </div>
              </div><!-- End -->
               
          </div>
          <hr class="featurette-divider">
    </div>
  </section>
  <!------------ END OF SERVICES SECTION --------------->

  <div class="container py-5">
    <div class="row text-center">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4">Our Staff</h1>
        </div>
    </div>
</div><!-- End -->

<div class="container-fluid staff-container">
    <div class="row text-center mb-5">

      <section class="our-staff slider">
        <!-- Team item -->
         
            <div class="col-md-3 mb-5 slide" data-aos="fade-up" data-aos-delay="200">
                  <div class="py-5 px-4 staff-card"><img src="assets/images/avatar1.png" alt="" width="100" class="img-fluid mx-auto rounded-circle mb-3 img-thumbnail shadow-sm">
                      <h5 class="mb-0">Engr. Gee Jay Bartolome</h5><span class="small text-uppercase ">Project Leader</span>
                      <ul class="social mb-0 list-inline mt-3">
                          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a></li>
                      </ul>
                  </div>
              </div><!-- End -->
         

        <!-- Team item -->
        
          <div class="col-md-2 mb-5 slide align-items-center" data-aos="fade-up" data-aos-delay="300">
              <div class="py-5 px-4"><img src="assets/images/avatar1.png" alt="" width="200" class="img-fluid mx-auto rounded-circle mb-3 img-thumbnail shadow-sm">
                  <h5 class="mb-0">Dr. Jose P. Lisama</h5><span class="small text-uppercase">Project Consultants</span>
                  <ul class="social mb-0 list-inline mt-3">
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a></li>
                  </ul>
              </div>
          </div><!-- End -->
        


        <!-- Team item -->
       
          <div class="col-lg-3 mb-5 slide" data-aos="fade-up" data-aos-delay="400">
              <div class="py-5 px-4"><img src="assets/images/avatar2.png" alt="" width="200" class="img-fluid mx-auto rounded-circle mb-3 img-thumbnail shadow-sm">
                  <h5 class="mb-0">Prof. Marilou P. Luseco</h5><span class="small text-uppercase">Project Consultants</span>
                  <ul class="social mb-0 list-inline mt-3">
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a></li>
                  </ul>
              </div>
          </div><!-- End -->
      

        <!-- Team item -->
        
          <div class="col-lg-3 mb-5 slide" data-aos="fade-up" data-aos-delay="500">
              <div class="py-5 px-4"><img src="assets/images/avatar1.png" alt="" width="200" class="img-fluid mx-auto rounded-circle mb-3 img-thumbnail shadow-sm">
                  <h5 class="mb-0">Aries M. Gelera</h5><span class="small text-uppercase">Project Support Staff</span>
                  <ul class="social mb-0 list-inline mt-3">
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a></li>
                  </ul>
              </div>
          </div><!-- End -->
      

          <!-- Team item -->
          
            <div class="col-lg-3 mb-5 slide" data-aos="fade-up" data-aos-delay="600">
                <div class="py-5 px-4"><img src="assets/images/avatar1.png" alt="" width="100" class="img-fluid mx-auto rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Christopher G. Estonilo</h5><span class="small text-uppercase ">Project Support Staff</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
  
      </section>
    </div>

    <!---- split background 
    <div class="custom-shape-divider-bottom-1660653797">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
        </svg>
    </div> End -->


  </div>



  <!------------ START OF DOWNLOADABLES SECTION --------------->

   <section class="downloadables">
    <div class="container">
    <hr class="featurette-divider">
      <div class="row downloads-container" >
          <div class="mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="display-4 text-center">Downloadables</h1>
          </div>
           <!-- downloadable item -->
        <div class="col-md-4 mx-auto" data-aos="zoom-in" data-aos-delay="100">
          <div class="card">
           <i class="fa-solid fa-briefcase"></i>
            <div class="card-body">
              <h5 class="card-title">CLIENT REQUEST FORM</h5>
              <a href="assets/forms/Client Request Form.docx"  download="computer" class="btn btn-primary mt-4">Download</a>
            </div>
          </div>
        </div><!-- End -->

          <!-- downloadable item -->
        <div class="col-md-4 mx-auto" data-aos="zoom-in" data-aos-delay="200">
          <div class="card">
          <i class="fa-solid fa-copyright"></i>
            <div class="card-body">
              <h5 class="card-title">COPYRIGHT APPLICATION FORM</h5>
              <a href="assets/forms/Affidavit on Copyright Ownership (Waiver).docx" download="computer" class="btn btn-primary mt-4">Download</a>
            </div>
          </div>
        </div><!-- End -->

          <!-- downloadable item -->
        <div class="col-md-4 mx-auto" data-aos="zoom-in" data-aos-delay="300">
          <div class="card">
          <i class="fa-solid fa-comment-dots"></i>
            <div class="card-body">
              <h5 class="card-title">FEEDBACK FORM</h5>
              <a href="#" class="btn btn-primary mt-4">Download</a>
            </div>
          </div>
        </div><!-- End -->

      </div>
    </div>
   </section>

   <!------------ END OF DOWNLOADABLES SECTION --------------->


    <!------------ START OF CONTACT US SECTION --------------->

  <section class="contact-us" id="contact">
    <div class="container contact_container" >
      <hr class="featurette-divider">
      <div class="row" data-aos="fade-right" data-aos-delay="300">
        <!-- Contact information-->
        <div class="col-md-5 mr-auto contact-info" >
          <h1 class="mb-3 fw-bold">Contact Us</h1>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, animi asperiores
            blanditiis dicta expedita quisquam.</p>
          <ul class="list-unstyled pl-md-5 mb-5">
            <li class="d-flex text-black mb-2">
              <span class="mr-3">
                <i class="fa-solid fa-location-dot"></i>
              </span>
              <p class="location">34 Street Name, City Name Here, United States</p>
            </li>
            <li class="d-flex text-black mb-2">
              <span class="mr-3">
                <i class="fa-solid fa-phone"></i>
              </span>
              <p class="contact-number">+(639) 345 6789</p>
            </li>
            <li class="d-flex text-black mb-2">
              <span class="mr-3">
                <i class="fa-solid fa-envelope"></i>
              </span>
              <p class="email-address">elstudio@gmail.com</p>
            </li>
          </ul>
        </div>
        <!--End of Contact Info-->

        <!-- Contact form-->
        <div class="col-md-6 contact-form">
          <form method="post" class="mb-5" id="contactForm" name="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name" class="col-form-label">Subject</label>
                <input type="text" class="form-control" name="ename" id="name">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email" class="col-form-label">Email</label>
                <input type="text" class="form-control" name="eemail" id="email">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="number" class="col-form-label">Number</label>
                <input type="text" class="form-control" name="enumber" id="number">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message" class="col-form-label">Message</label>
                <textarea class="form-control" name="emessage" id="message" cols="30" rows="7"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="submit" name="emsub" value="Send Message" class="btn-rounded mt-2" style="width:150px;">
                <span class="submitting"></span>
              </div>
            </div>
          </form>
        </div>
        <!--End of Contact Form-->
      </div>
      <hr class="featurette-divider">
    </div>
  </section>
  <!------------ END OF CONTACT US SECTION ------------->
   
  




<?php
  require("includes/footer.php");
?>
