<!doctype html>
<?php

session_start();

?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- for mabangis kapag sizing ng window goods paren sya tignan-->
        <title> Profile </title>
        <!-- Bootstrap lang eto na for CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- eto bootstrap JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
         <!---------------------------------------- Datepicker for Scheduling ----------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    </head> 

    <body>
        <!-- navbar-->
        <header class="navbar navbar-expand-md sticky-top flex-md-nowrap p-0 shadow">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="logo.png" class="img-fluid" height="30" width="140" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="bi bi-person-circle" style="color: white; "></span>
              </button>
              </div>
              <button class="btn mx-3" style="background-color: #df7630; color: white;" type="button">logout</button>
        </header>
  
        
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="height: 100vh; background-color: rgba(0, 0, 0, .1);">
                    <div class="d-flex flex-column position-sticky pt-4" style="height:90vh; margin: 10vh 0 0 0;">
                        <div class="outer mx-auto d-block"> <!-- the profile pic section -->
                            <img src="student.webp" class="rounded-circle mx-auto d-block" alt="" width="150" height="150"/>
                            <div class="inner position-absolute bottom-0 end-0"> <!-- the upload button-->
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
                        <ul class="nav nav-pills flex-column mb-auto" id="sidebar-tab"  role="tablist" aria-orientation="vertical">
                            <li class="nav-item mb-1"> <!-- the profile tab-->
                                <a class="nav-link d-flex justify-content-between active" aria-current="page" id="profile-tab" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                                    <div>
                                        <i class="bi bi-person-circle me-2" width="16" height="16"></i> Profile
                                    </div> 
                                    <div> <!-- the notif badge -->
                                        <span class="badge text-bg-danger">4</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- borrow tab -->
                                <a class="nav-link"  id="borrow-tab" data-bs-toggle="pill" data-bs-target="#borrow" type="button" role="tab" aria-controls="pills-borrow" aria-selected="true">
                                    <i class="bi bi-handbag-fill me-2"></i> Borrow
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- sched tab-->
                                <a class="nav-link" id="schedule-tab" data-bs-toggle="pill" data-bs-target="#schedule" type="button" role="tab" aria-controls="pills-schedule" aria-selected="true">
                                    <i class="bi bi-calendar-event-fill me-2"></i> Schedule
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- download-->
                                <a class="nav-link" id="learning-tab" data-bs-toggle="pill" data-bs-target="#learning" type="button" role="tab" aria-controls="pills-learning" aria-selected="true">
                                    <i class="bi bi-book-fill me-2"></i> Learning Materials
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <!-- QR Code -->
                        <div class="d-grid mb-3">
                            <button class="qr btn border-0" type="button" data-bs-toggle="modal" data-bs-target="#qrmodal">
                                <i class="bi bi-qr-code me-2" aria-hidden="true"></i>
                                <strong>Show QR Code</strong>
                            </button>
                        </div>
                    </div>
                </nav>
                
                <!-- modal for QR Code-->
                <div class="modal fade" id="qrmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered">
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


                <!-- contents for profile -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5" style="overflow-y: auto; margin-top: 2.5vh;">
                    <div class="tab-content" id="sidebar-tabContent">
                        
                        <!-- Profile Tab -->
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <!-- the name and position -->
                            <div class=" pt-3 pb-2 mb-3">
                                <h1 class="h2 fw-bolder">Surname, First Name M.I.</h1>
                                <h5 class="h5">Student</h5>
                            </div>

                            <div class="row mb-2 g-5">
                                <!-- profile tabs -->
                                <div class="col-md-8"> 
                                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                        <li class="nav-item shadow-right"> <!-- profile tab button -->
                                            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">About</button>
                                        </li>
                                        <li class="nav-item"> <!-- transaction history button -->
                                            <button class="nav-link" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline-tab-pane" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="false">Transaction History</button>
                                        </li>
                                    </ul>
        
                                    <!-- the profile table contents -->
                                    <div class="shadow p-3 mb-5 rounded" style="height: 65vh; overflow-y: auto;">
                                        <div class="tab-content p-1 mb-2" id="myTabContent">
                                            <!-- about contents-->
                                            <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                                                <!--
                                                <table class="table"> the content information 
                                                    <thead>
                                                        <script> //script for edit and save
                                                            $(document).ready(function () {
                                                                $('.editbtn').click(function () {
                                                                    var currentTD = $(this).parents('tr').find('.content');
                                                                    
                                                                    if ($(this).html() == 'Edit') {
                                                                        currentTD = $(this).parents('tr').find('.content');
                                                                        $.each(currentTD, function () {
                                                                            $(this).prop('contenteditable', true)
                                                                            currentTD.css({'background-color':'#df7630','color':'white'});
                                                                        });
                                                                    } else {
                                                                        $.each(currentTD, function () {
                                                                            $(this).prop('contenteditable', false)
                                                                            currentTD.css({'background-color':'white','color':'inherit'});
                                                                        });
                                                                    }
                                                                    
                                                                    $(this).html($(this).html() == 'Edit' ? 'Save' : 'Edit')
                                                                });
                                                            });
                                                        </script>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ID Number</td>
                                                            <td class="content w-50">201810888</td>
                                                            <td>
                                                                <button class="editbtn btn btn-link" >Edit</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address</td>
                                                            <td class="content w-50">Tanza, Cavite</td>
                                                            <td>
                                                                <button class="editbtn btn btn-link" >Edit</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td class="content w-50">name.surname@cvsu.edu.ph</td>
                                                            <td>
                                                                <button class="editbtn btn btn-link" >Edit</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Course</td>
                                                            <td class="content w-50">Bachelor of Science in Computer Science</td>
                                                            <td>
                                                                <button class="editbtn btn btn-link"  >Edit</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Academic Year</td>
                                                            <td class="content w-50">2018-2022</td>
                                                            <td>
                                                                <button class="editbtn btn btn-link" >Edit</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <div class="form-floating mb-3 border-bottom">
                                                    <input type="text" readonly class="form-control-plaintext" id="idnummber" value="201810888">
                                                    <label for="idnumber">ID Number</label>
                                                </div>
                                                <div class="form-floating mb-3 border-bottom">
                                                    <input type="text" readonly class="form-control-plaintext" id="address" value="Phase 1 Section 4 Block 53 Lot 2 Belvedere Towne, Paradahan, Tanza, Cavite">
                                                    <label for="address">Address</label>
                                                    <button class="editbtn btn btn-link position-absolute top-50 end-0 translate-middle-y" >Edit</button>
                                                </div>
                                                <div class="form-floating mb-3 border-bottom">
                                                    <input type="email" readonly class="form-control-plaintext" id="email" value="name.surname@cvsu.edu.ph">
                                                    <label for="email">Email</label>
                                                    <button class="editbtn btn btn-link position-absolute top-50 end-0 translate-middle-y" >Edit</button>
                                                </div>
                                                <div class="form-floating mb-3 border-bottom">
                                                    <input type="text" readonly class="form-control-plaintext" id="course" value="Bachelor of Science in Computer Science">
                                                    <label for="course">Course</label>
                                                    <button class="editbtn btn btn-link position-absolute top-50 end-0 translate-middle-y" >Edit</button>
                                                </div>
                                                <div class="form-floating mb-3 border-bottom">
                                                    <input type="text" readonly class="form-control-plaintext" id="year" value="2018-2022">
                                                    <label for="year">Academic Year</label>
                                                    <button class="editbtn btn btn-link position-absolute top-50 end-0 translate-middle-y" >Edit</button>
                                                </div>
                                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $('.editbtn').click(function () {
                                                            var form = $(this).parent('div').find('input');
                                                        
                                                            if ($(this).html() == 'Edit') {
                                                                form.attr('readonly', false);   
                                                                form.css({'border-bottom':'2px solid #df7630'});
                                                            } else {
                                                                form.attr('readonly', true);    
                                                                form.css({'border-bottom':'none'});
                                                            }
                                                                    
                                                            $(this).html($(this).html() == 'Edit' ? 'Save' : 'Edit')
                                                        });
                                                    });
                                                </script>

                                            </div>
                                            <!-- transaction history contents -->
                                            <div class="tab-pane fade" id="timeline-tab-pane" role="tabpanel" aria-labelledby="timeline-tab" tabindex="0">
                                                <table class="table">
                                                    <thead>
                                                        <tr style="text-transform: uppercase;"> 
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Activity</th>
                                                            <th scope="col">Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">July 12, 2022</td>
                                                            <td>Download</td>
                                                            <td>filename</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">July 11, 2022</td>
                                                            <td>Appointment</td>
                                                            <td>filename</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">July 10, 2022</td>
                                                            <td>Download</td>
                                                            <td>filename</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- notification tabs -->
                                <div class="col-md-4">
                                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                        <li class="nav-item shadow-right">
                                            <button class="notifybadge nav-link active" id="notif-tab" data-bs-toggle="tab" data-bs-target="#notif-tab-pane" type="button" role="tab" aria-controls="notif-tab-pane" aria-selected="true"> Notification
                                                <span class="badge text-bg-danger ms-1">4</span> <!-- the notif badge -->
                                            </button>
                                        </li>
                                    </ul>
        
                                    <!-- notification tab -->
                                    <div class="shadow mb-5 rounded" style="height: 65vh; overflow-y: auto;">
                                        <div class="tab-content p-2 mb-2" id="myTabContent">
                                            <!-- notif contents-->
                                            <div class="tab-pane fade show active" id="notif-tab-pane" role="tabpanel" aria-labelledby="notif-tab" tabindex="0">
                                                        <script> // script for mark as read and unread 
                                                            $(document).ready(function () {
                                                                $('.read').click(function () {
                                                                    var currentRead = $(this).parents('.notify').find('p');
                                                                    var val = parseInt($('.notifybadge').find('.badge').text());
        
                                                                    if ($(this).html() == "Mark as read") {
                                                                        currentRead.css({'opacity':'0.60'});
                                                                        $('.notifybadge').find('.badge').text(val - 1);
                                                                        $('.nav-link').find('.badge').text(val - 1);
                                                                    } else {
                                                                        currentRead.css({'opacity':'1'});
                                                                        $('.notifybadge').find('.badge').text(val + 1);
                                                                        $('.nav-link').find('.badge').text(val + 1);
                                                                    }
                                                                    
                                                                    $(this).html($(this).html() == "Mark as read" ? "Mark as unread" : "Mark as read")
                                                                });
                                                            });
                                                        </script>
        
                                                        <!-- the notification mails -->
                                                        <div class="notify d-flex justify-content-between border-bottom p-2">
                                                            <p>
                                                                <span>August 16, 2022 05:56:47 AM: </span>
                                                                <span> Approved Request -</span> 
                                                                Congratulations, your borrow request is approved by the admin. Now schedule an appoinment for the duration and details for your lending process.
                                                            </p>
                                                            <button class="read position-absolute top-50 end-0 translate-middle-y" onclick="changeStyle()">Mark as read</button>
                                                        </div>
                                                        <div class="notify d-flex justify-content-between border-bottom p-2">
                                                            <p>
                                                                <span>August 15, 2022 01:21:01 PM: </span>
                                                                <span> Lending -</span> 
                                                                Hello Surname, First Name M.I., your request to borrow Build A Website Using WordPress is now on process. Please wait for the admin to aprrove the confirmation. 
                                                            </p>
                                                            <button class="read position-absolute top-50 end-0 translate-middle-y" onclick="changeStyle()">Mark as read</button>
                                                        </div>
                                                        <div class="notify d-flex justify-content-between border-bottom p-2">
                                                            <p>
                                                                <span>August 1, 2022 11:21:01 AM: </span>
                                                                <span> Welcome -</span> 
                                                                Congratulations Surname, First Name M.I., we are happy to have you in our beloved El's Studio where you can experience items with extraordinary features and provides enjoyment and knowledge.
                                                            </p>
                                                            <button class="read position-absolute top-50 end-0 translate-middle-y" onclick="changeStyle()">Mark as read</button>
                                                        </div>
                                                        <div class="notify d-flex justify-content-between border-bottom p-2">
                                                            <p>
                                                                <span>August 1, 2022 11:01:34 AM: </span>
                                                                <span> Registration Approved -</span> 
                                                                Good News Surname, First Name M.I., your registration has been approved by the admin. Thank you for waiting. 
                                                            </p>
                                                            <button class="read position-absolute top-50 end-0 translate-middle-y" onclick="changeStyle()">Mark as read</button>
                                                        </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        <!-- Borrow Tab -->
                        <div class="tab-pane fade mt-3" id="borrow" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="details">
                                <button class="btn" type="button" id="back">
                                    <i class="bi bi-arrow-left-circle-fill me-2"></i> Back
                                </button>
                                <div class="row g-5">
                                    <div class="col-md-6 p-4" style="height: 82.5vh;">
                                        <h1><strong>Spider-Man Remastered</strong></h1>
                                        <div id="borrowpics" class="carousel slide" data-bs-ride="true">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#borrowpics" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#borrowpics" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#borrowpics" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner text-center">
                                                <div class="carousel-item active">
                                                    <img src="borrow.jpg" style="width: 100%; height: 20rem;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="borrow1.jpg" style="width: 35rem; height: 20rem;">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="borrow2.jpg" style="width: 35rem; height: 20rem;">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#borrowpics" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#borrowpics" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                        <div class="mt-3">
                                            <span>DESCRIPTION:</span>
                                            <p style="text-align: justify;">Developed by Insomniac Games in collaboration with Marvel, and optimized for PC by Nixxes Software, Marvel's Spider-Man Remastered on PC introduces an experienced Peter Parker who’s fighting big crime and iconic villains in Marvel’s New York. At the same time, he’s struggling to balance his chaotic personal life and career while the fate of Marvel’s New York rests upon his shoulders.</p>
                                            <p>
                                                <span>Working Condition: </span> Good
                                            </p>
                                            <p>
                                                <span>Estimate Working Year: </span> 5 years
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 p-4 rounded shadow" style="justify-content: space-between;">
                                        <h4 class="text-center mb-3"><strong>Request A Borrow</strong></h4>
                                        <div class="p-3 border rounded mb-3">
                                            <h6><strong style="font-size: 17.5px;">Surname, First Name M.I</strong><span> - name.surname@cvsu.edu.ph - </span>201810888</h6>
                                            <p style="text-align: justify; margin-bottom: 0;"> 
                                                <button class="rounded-pill border-0 me-2" style=" color: white; background-color: #df7630; cursor: context-menu;">
                                                    <i class="bi bi-house-fill me-2"></i>Address
                                                </button>Phase 1 Section 4 Block 53 Lot 2 Belvedere Towne, Paradahan, Tanza, Cavite         
                                            </p>
                                        </div>                           
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <img class="responsive" src="borrow thumbnail.jpeg" style="width: 10rem; height: 15rem;">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-floating mb-1">
                                                    <input type="text" readonly class="form-control-plaintext" id="idnummber" value="Spider-Man Remastered" style="font-size: 17.5px; font-weight: bolder;">
                                                    <label for="floatingPlaintextInput">Item Name</label>
                                                </div>
                                                <div class="borrow-details p-3">
                                                    <p><span>Serial  Number: </span>1234567890</p>
                                                    <p><span>Working Condition: </span>Good</p>
                                                    <p><span>Estimate Working Life: </span>5 years</p>
                                                    <p><span>Total Cost: </span>P10 000</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="row g-2 align-items-center" style="font-size: 17.5px;">
                                            <div class="col-md-3">
                                                <i class="bi bi-calendar-event-fill me-2"></i><label for="datetime" class="col-form-label">Pick a Date:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" id="borrowdate" style="color: #df7630; font-weight: bold;">
                                            </div>
                                        </div>

                                        <p style="font-size: 12.5px; text-align: justify; opacity: 75%;">
                                            <span>NOTE:</span> Kindly present your QR Code and ID Number upon showing up in the appointment time and date and the duration of items are only 24hrs and the duration span of the return is only 8hrs.
                                        </p>

                                        <div class="row g-2 mb-3">
                                            <label class="col-md-3" for="borrow-request">Borrow Purpose:</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control " id="borrow-request" style="resize: none; height: 100px"></textarea>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                            <button class="btn rounded-pill border-0 me-2" type="button" style="color: white; background-color: #df7630; font-size: 17.5px;">Send Request</button>
                                        </div> 
                                    </div>
                                </div>
                              
                            </div>

                            <div class="borrow-items" style="display: flex; flex-wrap: wrap; gap: 25px;">
                                <div class="card" style="width: 20rem;">
                                    <img src="borrow.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Spider-Man Remastered</strong></h5>
                                        <p class="card-text">Developed by Insomniac Games in collaboration with Marvel, and optimized for PC by Nixxes Software, Marvel's Spider-Man Remastered on PC introduces an experienced Peter Parker who’s fighting big crime and iconic villains in Marvel’s New York. At the same time, he’s struggling to balance his chaotic personal life and career while the fate of Marvel’s New York rests upon his shoulders.</p>
                                        <button class="btn borrow-details" type="button" role="tab">Borrow</button>
                                    </div>
                                </div>
                               
                            </div>
                            <script>
                                $(document).ready(function () {
                                    $('.borrow-details').click(function () {
                                        var form = $(this).parents('div').find('.details');  
                                        var borrow = $(this).parents('div').find('.borrow-items'); 
                                        form.css({'display':'block'});
                                        borrow.css({'display':'none'});      
                                    });
                                    $('#back').click(function () {
                                        var form = $(this).parents('div').find('.details'); 
                                        var borrow = $(this).parents('div').find('.borrow-items'); 
                                        form.css({'display':'none'});  
                                        borrow.css({'display':'flex'});                   
                                    });
                                });  
                            </script>
                            <script>
                                $('#borrowdate').datetimepicker({ //code for the datepicker and its format
                                    format: "dddd, MMMM D, YYYY",
                                    minDate:new Date()
                                });
                           </script>
                        </div>

                        <!-- Schedule -->
                        <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <!-- the name and position -->
                            <div class="row mb-4 g-5 h-100">
                                
                                <!-- calendar -->
                                <div class="col-md-6 calendar">  
                                    <!-- google calendar eto-->
                                    <iframe style="height: 80vh; width: 100%;" src="https://calendar.google.com/calendar/embed?src=addressbook%23contacts%40group.v.calendar.google.com&ctz=UTC" style="border: 0" width="700" height="500" frameborder="0" scrolling="no"></iframe>
                                    <p>
                                        <span>NOTE:</span> Kindly present your QR Code and ID Number upon showing up in appointment time and date.
                                    </p>
                                </div>
                            
                                <!-- booking of appointments-->
                                <div class="col-md-6 p-4 rounded shadow">
                                    <div class="date row g-2 mb-2" style="font-size: 17.5px;">
                                        <div class="col-md-3">
                                            <i class="bi bi-calendar-event-fill me-2"></i><label for="datetime" class="col-form-label">Pick a Date:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input class="form-control-plaintext" type="text" id="datetime" onchange="date()" style="color: #df7630; font-weight: bold;">
                                        </div>
                                    </div>
                                    <script> 
                                        
                                        
                                        $('#datetime').datetimepicker({ //code for the datepicker and its format
                                            format: "dddd, MMMM D, YYYY",
                                            defaultDate: new Date(),
                                            minDate:new Date(),
                                           
                                        });

                                        $("#datetime").on("dp.change", function (e) {
                                            var date = $('#datetime').val()
	                                        document.getElementById('date').innerHTML = date;
                                        });

                                        //the script for getting the date today
                                        // var date = new Date();
                                        // var monthName = date.toLocaleString("default", { month: "long" }); 
                                        // var day = date.toLocaleString("default", { weekday: "long" }); 
                                        // var newdate= (day + ', ' + monthName + ' ' + date.getDate() + ', ' +  date.getFullYear());
                                        // document.getElementById("date").value = newdate;
                                    </script>
                            
                                    <div class="mb-3">
                                        <select class="option form-select fw-bold" aria-label="Default select example" style="font-size: 20px;">
                                            <option selected value="">All</option>
                                            <option value="ict">ICT Laboratory</option>
                                            <option value="hostel">Hostel</option>
                                        </select>
                 
                                       
                                        <script>
                                             $('.option').change(function(){
                                                var selectedValue = $(this).val();
                                                if (selectedValue === '') {
                                                    $('.opt').show();
                                                } else {
                                                    $('.opt').hide();
                                                    $('#' + selectedValue).show();
                                                }
                                            });
                                        </script>
                                    </div>

                                    <!--the appointment section-->
                                    
                                    <h7 style="opacity: 75%;">Available Appointment: </h7>

                                    <div class="appoint mt-2">
                                        <div id="ict" class="opt mt-2" style="margin-bottom: 2.5rem;">
                                            <h5 class="fw-bold">ICT</h5>
                                            <div class="d-flex justify-content-between border-bottom mb-3">
                                                <div>
                                                    <div id="what">Computer Laboratory - PC</div>
                                                    <div>30 available</div>
                                                </div>
                                                <div>
                                                    <button class="appoint-btn btn border-0" type="button"  data-bs-toggle="modal" data-bs-target="#appointment-modal">Book an Appointment</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div id="hostel" class="opt mt-2" style="margin-bottom: 5rem;">
                                            <h5 class="fw-bold">Hostel</h5>
                                            <div class="d-flex justify-content-between border-bottom mb-3">
                                                <div>
                                                    <div id="what">Rooms</div>
                                                    <div>10 available</div>
                                                </div>
                                                <div>
                                                    <button class="appoint-btn btn border-0" type="button" data-bs-toggle="modal" data-bs-target="#appointment-modal">Book an Appointment</button>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $('.appoint-btn').click(function () {
                                                    var title = $(this).parent('div').parent('div').parent('div').find('h5').text();
                                                    var sub = $(this).parent('div').parent('div').parent('div').find('#what').text();
                                                
                                                    $('#categ').html(title + " - " + sub);
                                                    $(".purpose").val("");
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="appointment-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Book An Appointment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="p-3 border rounded mb-4">
                                            <h6><strong style="font-size: 17.5px;">Surname, First Name M.I</strong><span> - name.surname@cvsu.edu.ph - </span>201810888</h6>
                                            <p style="text-align: justify; margin-bottom: 0;"> 
                                                <button class="rounded-pill border-0 me-2" style=" color: white; background-color: #df7630; cursor: context-menu;">
                                                    <i class="bi bi-house-fill me-2"></i>Address
                                                </button>Phase 1 Section 4 Block 53 Lot 2 Belvedere Towne, Paradahan, Tanza, Cavite         
                                            </p>
                                        </div>          
                                        
                                        <div>
                                            <h4 style="color: black;">
                                                Booked:
                                                <strong><span class="mx-2" id="categ" style="color: black;">dasd</span></strong>
                                            </h4>
                                        </div>
                                    
                                        <div class="row g-2 mb-2" style="font-size: 17.5px;">
                                            <p>
                                                <i class="bi bi-calendar-event-fill me-2"></i>
                                                <span class="me-2">Date:</span>
                                                <span id="date" style="color: black;"></span>
                                            </p>
                                        </div>

                                        <p style="font-size: 12.5px; text-align: justify; opacity: 75%;">
                                            <span>NOTE:</span> Kindly present your QR Code and ID Number upon showing up in the appointment time and date and the duration of items are only 24hrs and the duration span of the return is only 8hrs.
                                        </p>

                                        <div class="row g-2 mb-3">
                                            <label class="col-md-3" for="borrow-request">Appointment Purpose:</label>
                                            <div class="col-md-9">
                                                <textarea class="purpose form-control" id="borrow-request" style="resize: none; height: 100px"></textarea>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-end">
                                           
                                        </div> 
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn rounded-pill border-0 me-2" type="button" style="color: white; background-color: #df7630; font-size: 17.5px;">Send Request</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Learning Materials -->
                        <div class="tab-pane fade" id="learning" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                            <div class="d-flex justify-content-between mt-3 mb-3">

                                <div class="input-group col-md-2" style="width: 13.5vw;"> <!-- select button for copies per page-->
                                    <select class="form-select" aria-label="Default select example"  >
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select> 
                                    <span class="input-group-text" id="basic-addon2">copies per page</span>
                                </div>
        
                                <div class="input-group col-md-10 w-50"> <!-- search bar -->
                                    <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary border-0" type="button" id="button-addon2" style="color: white; background-color: #df7630;">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
        
                            <!-- the table borrow-->
                            <div class="rounded shadow mb-3" style="overflow-y: auto; height: 75vh;">
                                <table class="table table-hover">
                                    <thead class="theader"  style="vertical-align: middle;">
                                        <tr>
                                            <td>Serial Number</td>
                                            <td>Title</td>
                                            <td>Author</td>
                                            <td>Category</td>
                                            <td>Number of Copies</td>
                                            <td>Download</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>100000123</td>
                                            <td>Build A Website Using WordPress</td>
                                            <td>A. Lorem</td>
                                            <td>ICT</td>
                                            <td>12</td>
                                            <td>
                                                <button class="borrow btn border-0" type="button">Borrow</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                </main>
            </div>
        </div>

       

         <!-- offcanvas of sidebar -->
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
                    <ul class="nav nav-pills flex-column mb-auto" id="sidebar-tab"  role="tablist" aria-orientation="vertical">
                        <li class="nav-item mb-1"> <!-- the profile tab-->
                            <a class="nav-link d-flex justify-content-between active" aria-current="page" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <div>
                                    <i class="bi bi-person-circle me-2" width="16" height="16"></i> Profile
                                </div> 
                                <div> <!-- the notif badge -->
                                    <span class="badge text-bg-danger">4</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mb-1"> <!-- borrow tab -->
                            <a class="nav-link"  id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#borrow" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <i class="bi bi-handbag-fill me-2"></i> Borrow
                            </a>
                        </li>
                        <li class="nav-item mb-1"> <!-- sched tab-->
                            <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#schedule" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <i class="bi bi-calendar-event-fill me-2"></i> Schedule
                            </a>
                        </li>
                        <li class="nav-item mb-1"> <!-- download-->
                            <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#download" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
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

    </body>
</html>
