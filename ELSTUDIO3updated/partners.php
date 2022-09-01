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
            <a class="nav-link smooth-scroll" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="resources.php">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="updates.php">Updates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll active" href="partners.php">Partners</a>
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


<!-- PARTNERS SECTION ---->
  <div class="container">
    <div class="partners-content">
        <div class="section-title text-center mb-5" data-aos="fade-up" data-aos-duration="300">
          <h1>Our Partners</h1>
           <h5><a href="index.php">Home</a> / Partners</h5>
        </div> 
        <!--- Partners content ----->
        <hr class="featurette-divider">
          <!--- First --->
          <div class="row featurette " data-aos="fade-left"  data-aos-duration="1000">
            <div class="col-md-7 order-md-2">
              <h2 class="featurette-heading fw-normal py-5 my-0 "> Commission on Higher Education</h2>
              <p class="lead text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, quae! Similique
                iusto ea dignissimos
                iste neque corrupti autem, perspiciatis ipsa blanditiis, nemo deleniti minus reiciendis enim inventore
                quisquam
                facilis aut adipisci alias maiores ducimus assumenda dolor? Odio voluptates et eos magnam necessitatibus,
                dolore
                nihil voluptatum, voluptatibus dignissimos eum dicta illo.</p>
            </div>
            <div class="col-md-5 py-5 order-md-1 text-center">
              <img src="assets/images/Partners Logo/CHED-Logo-New_20210406_RGB_border-1024x1024.png" alt="" class="featurette-image img-fluid mx-auto" width="250"
                height="500">
            </div>
          </div><!--- End ----->

          <hr class="featurette-divider">
          <!---- Second ---->
          <div class="row featurette " data-aos="fade-left"  data-aos-duration="1000">
            <div class="col-md-7 order-md-2 ">
              <h2 class="featurette-heading fw-normal py-5 my-0 ">University of the Philippines</h2>
              <p class="lead text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, quae! Similique
                iusto ea dignissimos
                iste neque corrupti autem, perspiciatis ipsa blanditiis, nemo deleniti minus reiciendis enim inventore
                quisquam
                facilis aut adipisci alias maiores ducimus assumenda dolor? Odio voluptates et eos magnam necessitatibus,
                dolore
                nihil voluptatum, voluptatibus dignissimos eum dicta illo.</p>
            </div>
            <div class="col-md-5 py-5 order-md-1 text-center">
              <img src="assets/images/Partners Logo/uop-removebg-preview.png" alt="" class="featurette-image img-fluid mx-auto" width="250"
                height="500">
            </div>
          </div><!---- End ----->

          <hr class="featurette-divider">

    </div>
  </div> <!--------- END ---------->


  <?php
  require("includes/footer.php");
?>
