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


<section class="updates-content">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="300">
          <h1>News Updates</h1>
           <h5><a href="index.php">Home</a> / Updates</h5>
        </div> 
        <div class="content-container" data-aos="fade-up" data-aos-duration="500">
            <div class="row">
                <div class="col-md-6 left-content">
                    <div class="h-100 p-3">
                        <img src="assets/images/banner.jpg" class="img-fluid" alt="">
                        <div class="content-text mt-3">
                            <h4>News</h4>
                            <p class="text-break">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid quia corporis sunt rerum earum quos, 
                                commodi vel pariatur fuga reiciendis amet alias soluta laudantium tempore deserunt quidem rem ex sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right-content">
                    <div class="h-100">
                       <div class="content-item mt-3">
                         <div class="row">
                            <h4 class="py-3 mx-auto news-header">More News</h4>
                         </div>
                         
                         <div class="item">
                            <div class="row mt-2 mx-auto">
                                <div class="col-md-6 py-3">
                                    <img src="assets/images/banner.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6 py-3">
                                    <h5>News</h5>
                                    <h6>08/26/2022</h6>
                                    <p class="text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi rerum voluptates nulla quia voluptatum 
                                        reprehenderit beatae provident iure fugiat adipisci.</p>
                                        <a href="details.php">Read More</a>
                                </div>
                            </div>
                         </div>
                      
   
                         <div class="item">
                            <div class="row mt-2 mx-auto">
                                <div class="col-md-6 py-3">
                                    <img src="assets/images/banner.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6 py-3">
                                    <h5>News</h5>
                                    <h6>08/26/2022</h6>
                                    <p class="text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi rerum voluptates nulla quia voluptatum 
                                        reprehenderit beatae provident iure fugiat adipisci.</p>
                                        <a href="details.php">Read More</a>
                                </div>
                            </div>
                         </div>

                         <div class="item">
                            <div class="row mt-2 mx-auto">
                                <div class="col-md-6 py-3">
                                    <img src="assets/images/banner.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6 py-3">
                                    <h5>News</h5>
                                    <h6>08/26/2022</h6>
                                    <p class="text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi rerum voluptates nulla quia voluptatum 
                                        reprehenderit beatae provident iure fugiat adipisci.</p>
                                        <a href="details.php">Read More</a>
                                </div>
                            </div>
                         </div>
                          

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<?php
  require("includes/footer.php");
?>