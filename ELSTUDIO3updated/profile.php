<?php

session_start();

?>

<!------ Nagana na 2 pangalawa ------->


<?php
  require_once 'includes/header.php';
?>
<nav class="navbar navbar-expand-lg menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/images/eLstudio-logo.png" class="img-fluid" height="55" width="160" alt="logo image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
       
        <?php
          if(isset($_SESSION["id"])){
            echo "<div class='text-right'>";
            echo "<a href='includes/logout.inc.php'>";
            echo "<button action='includes/logout.inc.php' type='button' class='btn-rounded'>";
            echo "Logout";
            echo "</button>";
            echo "</a>";
            echo "</div>";
          }
          else 
          {
            ?>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#resources">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#updates">Updates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#partners">Partners</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smooth-scroll" href="#contact">Contact Us</a>
            </li>
          </ul>
            <?php
            
             echo "<button type='button' class='btn-rounded' data-bs-toggle='modal' data-bs-target='#login'>";
             echo "Login";
             echo "</button>";
          
          }
        
        ?>
        
      </div>
    </div>
  </nav>
  <!------------ END OF NAVBAR --------------->
        
        <div class="container-fluid profile-container">
            <div class="row">
                <!-- sidebar -->
                <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="height: auto; background-color: rgba(0, 0, 0, .1);">
                    <div class="d-flex flex-column position-sticky pt-4" style="height:90vh; margin:  2vh 0 0 0;">
                        <div class="outer mx-auto d-block"> <!-- the profile pic section -->
                        <?php
                                    require_once 'includes/config.php';
                                    $id = $_SESSION["id"];
                                        $query = " select * from users where id = '$id'";
                                        $result = mysqli_query($conn, $query);   
                                            while ($data = mysqli_fetch_assoc($result)) {
                                                if($data['filename'] === ""){
                                                 ?>
                                                 <img src="student.webp" class="rounded-circle mx-auto d-block" alt="" width="150" height="150"/>
                                                <?php
                                                }else{
                                                    ?>
                                                    <img src="./uploadss/<?php echo $data['filename']; ?>" class="rounded-circle mx-auto d-block" alt="" width="150" height="150"/>
                                                   <?php
                                                }
                                            }
                                        ?>
                                        <div class="inner position-absolute bottom-0 end-0"> <!-- the upload button-->
                                            <div class="position-absolute top-50 start-50 translate-middle">
                                             <form method="POST" id="imageupload" enctype="multipart/form-data" action="uploadpic.php">
                                                <input class="inputfile" type="file" id="file" name="uplods" accept="image/*" class="custom-file-input">
                                               <script type="text/javascript">

                                                    document.getElementById("file").onchange = function() {
                                                    document.getElementById("imageupload").submit();

                                                   };
                                                </script>
                                                <label>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                                    </svg>
                                                </label>
                                             </form>
                                            </div> 
                                        </div>
                                    </div>

                        
                        <hr>
                        <!-- categories-->
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item mb-1 active"> <!-- the profile tab-->
                                <a class="nav-link d-flex justify-content-between" aria-current="page">
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
                            <li class="nav-item mb-1"> <!-- sched tab-->
                                <a href="schedule.php" class="nav-link">
                                    <i class="bi bi-calendar-event-fill me-2"></i> Schedule
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- download-->
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

                <!-- contents for profile -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5" style="overflow-y: auto; margin-top: 2.5vh;">
                    <!-- the name and position -->
                    <div class=" pt-3 pb-2 mb-3">
                    <h1 class="h2 fw-bolder"><?php echo $_SESSION["Lname"].", ".$_SESSION["Fname"];?></h1>
                        <h5 class="h5">
                        <?php
                        if ($_SESSION["status"] === 1){
                            echo "Student";

                        }elseif ($_SESSION["status"] === 2){
                            echo "Faculty";
                        }    
                        ?>    
                        </h5>
                        
                    </div>

                    <!-- profile tabs -->
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                        <li class="nav-item shadow-right"> <!-- profile tab button -->
                            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">About</button>
                        </li>
                        <li class="nav-item"> <!-- transaction history button -->
                            <button class="nav-link" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline-tab-pane" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="false">Transaction History</button>
                        </li>
                    </ul>

                    <!-- the profile table contents -->
                    <div class="shadow p-3 mb-5 rounded" style="height: 35vh; overflow-y: auto;">
                        <div class="tab-content p-1 mb-2" id="myTabContent">
                            <!-- about contents-->
                            <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                                <table class="table"> <!-- the content information -->
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
                                            <td class="content w-75"><?php echo $_SESSION["id"];?></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td class="content w-75"><?php echo $_SESSION["address"];?></td>
                                            <td>
                                                <button class="editbtn btn btn-link" style="width: 5vw">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td class="content w-75"><?php echo $_SESSION["email"];?></td>
                                            <td>
                                                <button class="editbtn btn btn-link" style="width: 5vw">Edit</button>
                                            </td>
                                        </tr>
                                       
                                        <?php
                                            $dept = $_SESSION["dept"];
                                            $course = $_SESSION["course"];
                                            $year = $_SESSION["year"];

                                            if ($_SESSION["status"] === 1){
                                              echo "<tr>";
                                              echo "<td>Course</td>";
                                              echo "<td class='content w-75'>".$course."</td>";
                                              echo  "<td>";
                                              echo  "<button class='editbtn btn btn-link'  style='width: 5vw'>Edit</button>";
                                              echo  "</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                            echo  "<td>Academic Year</td>";
                                            echo    "<td class='content w-75'>".$year."</td>";
                                            echo    "<td>";
                                            echo     "<button class='editbtn btn btn-link' style='width: 5vw'>Edit</button>";
                                            echo    "</td>";
                                            echo "</tr>";
                                            }elseif ($_SESSION["status"] === 2){
                                                echo "<tr>";
                                              echo "<td>Department</td>";
                                              echo "<td class='content w-75'>".$dept."</td>";
                                              echo  "<td>";
                                              echo  "<button class='editbtn btn btn-link'  style='width: 5vw'>Edit</button>";
                                              echo  "</td>";
                                            echo "</tr>";
                                            echo "<tr>";

                                            }    
                                         ?>    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                    <!-- notification tabs -->
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                        <li class="nav-item shadow-right">
                            <button class="notifybadge nav-link active" id="notif-tab" data-bs-toggle="tab" data-bs-target="#notif-tab-pane" type="button" role="tab" aria-controls="notif-tab-pane" aria-selected="true"> Notification
                                <span class="badge text-bg-danger ms-1">4</span> <!-- the notif badge -->
                            </button>
                        </li>
                    </ul>

                    <!-- notification tab -->
                    <div class="shadow mb-5 rounded" style="height: 35vh; overflow-y: auto;">
                        <div class="tab-content p-2 mb-2" id="myTabContent">
                            <!-- notif contents-->
                            <div class="tab-pane fade show active" id="notif-tab-pane" role="tabpanel" aria-labelledby="notif-tab" tabindex="0">
                                        <script> // script for mark as read and unread 
                                            $(document).ready(function () {
                                                $('.read').click(function () {
                                                    var currentRead = $(this).parents('.notify').find('div');
                                                    var val = parseInt($('.notifybadge').find('.badge').text());

                                                    if ($(this).html() == "Mark as read") {
                                                        currentRead.css({'font-weight':'normal','opacity':'0.60'});
                                                        $('.notifybadge').find('.badge').text(val - 1);
                                                        $('.nav-link').find('.badge').text(val - 1);
                                                    } else {
                                                        currentRead.css({'font-weight':'bold','opacity':'1'});
                                                        $('.notifybadge').find('.badge').text(val + 1);
                                                        $('.nav-link').find('.badge').text(val + 1);
                                                    }
                                                    
                                                    $(this).html($(this).html() == "Mark as read" ? "Mark as unread" : "Mark as read")
                                                });
                                            });
                                        </script>

                                        <!-- the notification mails -->
                                        <div class="notify d-flex justify-content-between border-bottom p-2">
                                            <div style="width: 10vw;">Appointment</div>
                                            <div style="width: 60vw;">
                                                <span>Approved Request -</span> Congratulations, your borrow request is approved by the admin. Now schedule an appoinment for the duration and details for your lending process.
                                            </div>  
                                            <div style="width: 5vw;">Aug 16</div>
                                            <button class="read position-absolute top-50 end-0 translate-middle-y" onclick="changeStyle()">Mark as read</button>
                                        </div>
                                        <div class="notify d-flex justify-content-between border-bottom p-2">
                                            <div style="width: 10vw;">Borrow</div>
                                            <div style="width: 60vw;">
                                                <span>Lending -</span> Hello Surname, First Name M.I., your request to borrow Build A Website Using WordPress is now on process. Please wait for the admin to aprrove the confirmation. 
                                            </div>  
                                            <div style="width: 5vw;">Aug 15</div>
                                            <button class="read position-absolute top-50 end-0 translate-middle-y" onclick="changeStyle()">Mark as read</button>
                                        </div>
                                        <div class="notify d-flex justify-content-between border-bottom p-2">
                                            <div style="width: 10vw;">Welcome</div>
                                            <div style="width: 60vw;">
                                                <span>Welcome -</span> Congratulations Surname, First Name M.I., we are happy to have you in our beloved El's Studio where you can experience items with extraordinary features and provides enjoyment and knowledge.
                                            </div>  
                                            <div style="width: 5vw;">Aug 1</div>
                                            <button class="read position-absolute top-50 end-0 translate-middle-y" onclick="changeStyle()">Mark as read</button>
                                        </div>
                                        <div class="notify d-flex justify-content-between border-bottom p-2">
                                            <div style="width: 10vw;">Register</div>
                                            <div style="width: 60vw;">
                                                <span>Registration Approved -</span> Good News Surname, First Name M.I., your registration has been approved by the admin. Thank you for waiting.
                                            </div>  
                                            <div style="width: 5vw;">Aug 1</div>
                                            <button class="read position-absolute top-50 end-0 translate-middle-y" onclick="changeStyle()">Mark as read</button>
                                        </div>
                              
                            </div>
                        </div>
                    </div>


                </main>
            </div>
        </div>

        <!-- modal for QR Code-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">QR Code</h5>
                    </div>

                    <div class="modal-body" style="text-align:center;">
                    <?php     
                                    // Include the qrlib file
                                    include 'phpqrcode/qrlib.php';
                                    $text = $_SESSION["id"];
                                    
                                    // $path variable store the location where to 
                                    // store image and $file creates directory name
                                    // of the QR code file by using 'uniqid'
                                    // uniqid creates unique id based on microtime
                                    $path = './imagess/';
                                    $file = $path.$_SESSION["Fname"].$_SESSION["Lname"].".png";
                                    
                                    // $ecc stores error correction capability('L')
                                    $ecc = 'L';
                                    $pixel_Size = 8;
                                
                                    // Generates QR Code and Stores it in directory given
                                    QRcode::png($text, $file, $ecc, $pixel_Size);
                                    
                                    // Displaying the stored QR code from directory
                                    echo "<center><img src='".$file."'></center>";
       
                            ?>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <a class="btn btn-primary mr-auto" href="<?=$file?>" download>Download QR</a>
                        <button type="button" class="btn border-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
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
                    <ul class="nav nav-pills flex-column mb-auto" >
                        <li class="nav-item mb-1 active">
                            <a class="nav-link" aria-current="page">
                                <i class="bi bi-person-circle me-2" width="16" height="16"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="borrow.html" class="nav-link">
                                <i class="bi bi-handbag-fill me-2"></i> Borrow
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="schedule.html" class="nav-link">
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
  require_once 'includes/footer.php';
?>
