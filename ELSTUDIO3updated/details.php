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
            <a class="nav-link smooth-scroll active" href="updates.php">Updates</a>
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

  

   <!---- Header Title ---->
    <div class="container details-container">
        <div class="header-title">
          <h2 class="details-title py-5 text-center">Request Form For Credentials of Undergraduate Students, Transferees and other Clients</h2>
        </div>
    </div><!----- End ---->
    <!--- Details Content --->
    <div class="container content">
        <div class="details-content">
            <!--- Image --->
            <div class="image-content">
                <img src="assets/images/banner.jpg" alt="" class="d-block w-100" height="700">
            </div><!--- End ---->
            <!--- Text content ---->
            <div class="text-content py-5 mb-5 px-5">
                    <h5>Request Form For Credentials of Undergraduate Students, Transferees and other Clients</h5>
                    <p class="py-2 text-break">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis cum totam 
                        laborum voluptatibus dolorum ratione nam ut accusamus commodi. Dicta ratione esse 
                        doloribus nesciunt totam veritatis tempora commodi id hic.</p>

                    <a href="#">Sample Link</a>

                    <p class="py-2 text-break">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis cum totam 
                        laborum voluptatibus dolorum ratione nam ut accusamus commodi. Dicta ratione esse 
                        doloribus nesciunt totam veritatis tempora commodi id hic.</p>

                    <a href="#">Sample Link</a>
            </div><!----- End --->
                <h4><a href="updates.php"><i class="fa-solid fa-circle-left"></i> Back</a></h4>
         </div>
    </div><!--- End --->







  <?php
  require("includes/footer.php");
?>