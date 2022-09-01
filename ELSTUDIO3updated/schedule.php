<?php
  require("includes/header.php");
?>
  
     
        
        <div class="container-fluid schedule-container">
            <div class="row">
                <!-- sidebar -->
                <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="height: auto; background-color: rgba(0, 0, 0, .1);">
                    <div class="d-flex flex-column position-sticky pt-4" style="height:90vh; margin: 10vh 0 0 0;">

                        <div class="outer mx-auto d-block"> <!-- profilepic  section-->
                            <img src="student.webp" class="rounded-circle mx-auto d-block" alt="" width="150" height="150"/>
                            <div class="inner position-absolute bottom-0 end-0"> <!-- upload button -->
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <input class="inputfile" type="file" name="pic" accept="image/*" title="">
                                    <label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                        </svg>
                                    </label>
                                </div> 
                            </div>
                        </div> 
                        
                        <hr>
                        <!-- categories-->
                        <ul class="nav nav-pills flex-column mb-auto" >
                            <li class="nav-item mb-1"> <!-- the profile tab -->
                                <a href="profile.php"class="nav-link d-flex justify-content-between">
                                    <div>
                                        <i class="bi bi-person-circle me-2" width="16" height="16"></i> Profile
                                    </div> 
                                    <div> <!-- the notif badge -->
                                        <span class="badge text-bg-danger">4</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- borrow tab -->
                                <a href="borrow.php" class="nav-link">
                                    <i class="bi bi-handbag-fill me-2"></i> Borrow
                                </a>
                            </li>
                            <li class="nav-item mb-1 active"> <!-- sched tab -->
                                <a class="nav-link" aria-current="page">
                                    <i class="bi bi-calendar-event-fill me-2"></i> Schedule
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- download tab -->
                                <a href="download.php" class="nav-link">
                                    <i class="bi bi-file-earmark-arrow-down-fill me-2"></i> Download
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <!-- QR Code -->
                        <div class="d-grid gap-2 mb-3">
                            <button class="qr btn border-0" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-qr-code me-2" aria-hidden="true"></i>
                                <strong>Show QR Code</strong>
                            </button>
                        </div>
                    </div>
                </nav>

                <!-- contents for schedule -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5" style="overflow-y: auto; margin-top: 2.5vh;">
                    <!-- the name and position -->
                    <div class="row mb-4 g-5 h-100">
                        
                        <!-- calendar -->
                        <div class="col-md-6 calendar">  
                            <!-- google calendar eto-->
                            <iframe class="responsive" style="height: 80vh;" src="https://calendar.google.com/calendar/embed?src=addressbook%23contacts%40group.v.calendar.google.com&ctz=UTC" style="border: 0" width="470" height="500" frameborder="0" scrolling="no"></iframe>
                            <p>
                                <span>NOTE:</span> Kindly present your QR Code and ID Number upon showing up in appointment time and date.
                            </p>
                        </div>
                      
                        <!-- booking of appointments-->
                        <div class="col-md-6 p-4 rounded shadow">
                            <div class="text-center">
                                <h7>Available Appointment on</h7>
                                <h7 id="date" style="color: #df7630"></h7>
                                <script> //the script for getting the date today
                                    var date = new Date();
                                    var monthName = date.toLocaleString("default", { month: "long" }); 
                                    var day = date.toLocaleString("default", { weekday: "long" }); 
                                    var newdate= (day + ', ' + monthName + ' ' + date.getDate() + ', ' +  date.getFullYear());
                                    document.getElementById("date").innerHTML = newdate;
                                </script>
                            </div>

                            <!--the appointment section-->
                            <div class="appoint mt-3">
                                <div class="d-flex justify-content-between border-bottom mb-3">
                                    <div>
                                        <div>8:00am - 10:00am</div>
                                        <div>1 available</div>
                                    </div>
                                    <div>
                                        <button class="btn border-0" type="button">Book an Appointment</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-bottom mb-3">
                                    <div>
                                        <div>10:00am - 12:00pm</div>
                                        <div>100 available</div>
                                    </div>
                                    <div>
                                        <button class="btn border-0" type="button">Book an Appointment</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-bottom  mb-3">
                                    <div>
                                        <div>1:00pm - 2:00pm</div>
                                        <div>7 available</div>
                                    </div>
                                    <div>
                                        <button class="btn border-0" type="button">Book an Appointment</button>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-bottom  mb-3">
                                    <div>
                                        <div>2:00pm - 4:00pm</div>
                                        <div>3 available</div>
                                    </div>
                                    <div>
                                        <button class="btn border-0" type="button">Book an Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>

        <!-- modal for QR Code-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm  modal-md-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">QR Code</h5>
                    </div>

                    <div class="modal-body" style="text-align:center;">
                        <svg class="center-block" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
                            <path d="M2 2h2v2H2V2Z"/>
                            <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/>
                            <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/>
                            <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/>
                            <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/>
                        </svg>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn border-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

           <!-- offcanvas of sidebar for mobile view-->
           <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="offcanvasRightLabel" style="width: 300px;">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#my-offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex flex-column" style="height: 90vh;">
                    <div class="outer mx-auto d-block">
                        <img src="student.webp" class="rounded-circle mx-auto d-block" alt="" width="150" height="150"/>
                        <div class="inner position-absolute bottom-0 end-0">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <input class="inputfile" type="file" name="pic" accept="image/*" title="">
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                    </svg>
                                </label>
                            </div> 
                        </div>
                    </div>
                    
                    <hr>
                    <!-- categories-->
                    <ul class="nav nav-pills flex-column mb-auto" >
                        <li class="nav-item mb-1">
                            <a href="profile.html"class="nav-link">
                                <i class="bi bi-person-circle me-2" width="16" height="16"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="borrow.html" class="nav-link">
                                <i class="bi bi-handbag-fill me-2"></i> Borrow
                            </a>
                        </li>
                        <li class="nav-item mb-1 active">
                            <a class="nav-link" aria-current="page">
                                <i class="bi bi-calendar-event-fill me-2"></i> Schedule
                            </a>
                        </li>
                        <li class="nav-item mb-1"> 
                            <a href="download.html" class="nav-link">
                                <i class="bi bi-file-earmark-arrow-down-fill me-2"></i> Download
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <!-- QR Code -->
                    <div class="d-grid gap-2 mb-3">
                        <button class="qr btn border-0" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="bi bi-qr-code me-2" aria-hidden="true"></i>
                            <strong>Show QR Code</strong>
                        </button>
                    </div>
                </div>
            </div>
        </div>

<?php
require("includes/footer.php");
      ?>