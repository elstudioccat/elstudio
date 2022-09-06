<?php
  if (isset($_POST["emsub"])) {
    $username = $_POST["ename"];
    $email = $_POST["eemail"];
    $phone = $_POST["enumber"];
    $message = $_POST["emessage"];

    $to = "elstudio123456@gmail.com";
    $subject = $username;

    $message = "Email: {$email}  <br>  Phone: {$phone} <br> Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: elstudio123456@gmail.com';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>




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
            <a class="nav-link smooth-scroll" href="partners.php">Partners</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link smooth-scroll active" href="contact.php">Contact Us</a>
          </li>
          <li>
          <button type="button" class="btn-rounded" data-bs-toggle="modal" data-bs-target="#login">Login</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!------------ END OF NAVBAR --------------->



  <section class="contact">
    <div class="container container-contact">
      <div class="section-title text-center mb-5" data-aos="fade-up" data-aos-duration="300">
          <h1>About Us</h1>
           <h5><a href="index.php">Home</a> / About</h5>
        </div> 
    <hr class="featurette-divider">
        <div class="row row-contact" data-aos="fade-right" data-aos-delay="300">
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
                <p class="email-address">elstudioccat@cvsu.edu.ph</p>
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
  </section>



<?php
  require("includes/footer.php");
?>