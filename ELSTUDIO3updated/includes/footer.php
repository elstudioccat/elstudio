
<!----------------------- LOGIN MODAL ----------------------------->

<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="includes/login.inc.php" method="post">

            <div class="form-floating mb-2">
              <input type="text" name="email" class="form-control" id="floatingInput" placeholder="email/username">
              <label for="floatingInput">Email or Username</label>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>   
            
            <div class="form-floating mb-2">
              <input type="password" name="pwd" class="form-control" id="floatingInput" placeholder="password">
              <label for="floatingInput">Password</label>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>  

            <div class="form-group">
                <div class="d-grid gap-1">
                  <input type="submit" name="lsubmit"class="btn btn-primary mt-2" value="Login">
                </div>
            </div>
            <p class="mt-3">Don't have an account?<br><a target="Register" href="">Sign up now</a>.</p>
        </form>
        </div>
        <div class="modal-footer">
      
        </div>
      </div>
    </div>
  </div>
</div>
<!----------------------- END OF LOGIN MODAL ----------------------------->




<!----------------- START OF FOOTER ------------------->
  <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
  
          <!-- Grid column -->
          <div class="col-md-5 col-lg-2 col-md-3 mt-3">
            <a href=""><img src="assets/images/Footer logos/ph logo.png" class="img-fluid" alt=""></a>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-5 col-lg-3 col-md-3 mt-3">
            <h6 class="text-uppercase mb-3 font-weight-bold">
              el studio
            </h6>
            <p>
              Cavite State University-CCAT Campus, Tejeros Convention,
              Rosario, Cavite, Philippines 4106
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />
  
          <!-- Grid column -->
          <div class="col-md-5 col-lg-3 col-md-3 mt-3">
            <h6 class="text-uppercase mb-3 font-weight-bold">quick links</h6>
            <p>
              <a href="https://cvsu.edu.ph/Cavite State University" class="text-white">Cavite State University-CCAT Campus</a>
            </p>
            <p>
              <a href="https://cvsu.edu.ph" class="text-white">Cavite State University Main Campus</a>
            </p>
            <p>
              <a href="#" class="text-white">OBE framework</a>
            </p>
            <p>
              <a href="https://phlconnect.ched.gov.ph/home" class="text-white">PHL CHED Connect</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />
  
          <!-- Grid column -->
          <div class="col-md-5 col-lg-2 mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fa-solid fa-location-dot mx-auto"></i>Tejeros Convention</p>
            <p><i class="fas fa-envelope mx-auto"></i> elstudio@gmail.com</p>
            <p><i class="fas fa-phone mx-auto"></i> +(639) 234 5678</p>
          </div>
  
          <!-- Grid column -->
          <div class="col-md-5 col-lg-2 mx-auto">
            <div class="row">
              <div class="col-md-2 col-md-6 mt-3">
                <a href="#"><img src="assets/images/Footer logos/OBE-logo.png" class="img-fluid" alt=""></a>
              </div>
              <div class="col-md-2 col-md-6 mt-3">
                <a href="#"><img src="assets/images/Footer logos/Citizen-Charter.png" class="img-fluid" alt=""></a>
              </div>
              <div class="col-xs-6 col-md-6 mt-3">
                <a href="https://www.foi.gov.ph"><img src="assets/images/Footer logos/foi_logo.png" class="img-fluid" alt=""></a>
              </div>
              <div class="col-xs-6 col-md-6 mt-3">
                <a href="https://dict.gov.ph/transparency/"><img src="assets/images/Footer logos/transparency-seal.png" class="img-fluid" alt=""></a>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!--Grid row-->
  
      </section>
      <!-- Section: Links -->
  
      <hr class="my-3">
  
  
      <!-- Section: Copyright -->
      <section class="p-2 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start ">
            <!-- Copyright -->
            <div class="p-3">
              © 2020 Copyright
              <a class="text-white"></a>
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                class="fab fa-facebook-f"></i></a>
  
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                class="fab fa-twitter"></i></a>
  
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                class="fab fa-google"></i></a>
  
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                class="fab fa-instagram"></i></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
  </div>
  <!-- End of .container -->



  <!-- JQuery , Waypoints cdn , Counter-Up cdn -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
    integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
    integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <!-- Bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- AOS script Animate on Scroll-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>



      <script>

        // Counter script //
        $('.counter').counterUp({
          delay: 10,
          time: 1000

        });

        $(function(){
        $('#work').on('activate.bs.scrollspy')
        });

        // Animate on scroll script //
        AOS.init();

        // Carousel Logo script //
        $(document).ready(function(){
        $('.partners-logo').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]

          });
        });


        // Our Staff Slider //
        $(document).ready(function(){
        $('.our-staff').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            dots: false,
            pauseOnHover: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
                }
            }]

          });
        });


        // facilities image carousel //
        $(document).ready(function(){
        $('.facilities-carousel').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
                }
            }]

          });
        });


      </script>

</body>

</html>