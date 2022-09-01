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
            <a class="nav-link smooth-scroll active" href="about.php">About Us</a>
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


  <section class="about-page">
    <div class="container about-page-container">
        <div class="section-title text-center mb-5" data-aos="fade-up" data-aos-duration="300">
          <h1>About Us</h1>
           <h5><a href="index.php">Home</a> / About</h5>
        </div> 
        <div class="about-content">
            <hr class="featurette-divider">
            <div class="context text-center py-5" data-aos="fade-up" data-aos-duration="1000">
                <h2>About</h2>
                <p class="text-break py-3 ">
                Funded by the Commision on Higher Education, the CCAT ElStudio is an open resource center for research and innovation
                on flexible learning. It aims to be a prime flexible learning studio for the faculty and students in the campus and 
                University, equipped with facilities to enable transition to the new normal of teaching and learning. <br><br>
                Endorsed, approved, and established through the BOR Resolution No. __ s 2021.
                </p>
            </div>
            <div class="row py-5 mt-3">
                <div class="col-sm items text-center py-2" data-aos="fade-up" data-aos-duration="400">
                    <h2>Mision</h2>
                    <p class="text-break py-3">
                        CAVITE STATE UNIVERSITY shall provide excellent, equitable and relevant educational opportunities in the arts, sciences, 
                        and technology through quality instruction and responsive research and development activities. It shall produce professional
                        skilled and morally upright individuals for global competitiveness.
                    </p>
                </div>
                <div class="col-sm items text-center py-2" data-aos="fade-up" data-aos-duration="600">
                    <h2>Vision</h2>
                    <p class="text-break py-3">
                    The Premier University in historic Cavite recognized for excellence in the development of globally competitive and
                     morally upright individuals.
                  </p>
                </div>
                <div class="col-sm items text-center py-2" data-aos="fade-up" data-aos-duration="800">
                    <h2>Quality Policy</h2>
                    <p class="text-break py-3">
                        We Commit to the highest standards of education, value our stakeholders, Strive for continual improvement of our 
                        products and services, and Uphold the University's tenets of Truth, Excellence, and Service to produce globally 
                        competitive and morally upright individuals.
                    </p>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-sm items shadow py-5" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="mx-5">Mandates</h2>
                    <ol class="text-break mx-4">
                      <li>Establish linkages with other institutions for the development and innovation of flexible learning in CvSU</li>
                      <li>Provide support services to the faculty in developing instructional materials intended for  flexible learning</li>
                      <li>Establish an accessible and open resource facility for the faculty for sharing of creative, educational resources</li>
                      <li>Conduct capability enhancement activities on various learning management systems to help the faculty adaopt modern, flexible teaching and learning techniques</li>
                    </ol>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
  </section>




  <?php
  require("includes/footer.php");
?>