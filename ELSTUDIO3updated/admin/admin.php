<?php
    include_once("../includes/config.php");
?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- for mabangis kapag sizing ng window goods paren sya tignan-->
        <title> Admin </title>
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
              <a href='../includes/logout.inc.php'>
              <button class="btn mx-3" style="background-color: #df7630; color: white;" type="button">logout</button>
              </a>
        </header>
  
        
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="height: 100vh; background-color: rgba(0, 0, 0, .1);">
                    <div class="d-flex flex-column position-sticky pt-4" style="height:90vh; margin: 10vh 0 0 0;">
    
                        <!-- categories-->
                        <ul class="nav nav-pills flex-column mb-auto" id="sidebar-tab"  role="tablist" aria-orientation="vertical">
                            <li class="nav-item mb-1"> <!-- the profile tab-->
                                <a class="nav-link d-flex justify-content-between active" aria-current="page" id="pills-new-tab" data-bs-toggle="pill" data-bs-target="#newuser" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <div>
                                        <i class="bi bi-person-plus-fill me-2"></i>New Users
                                    </div> 
                                    <div> <!-- the notif badge -->
                                        <span class="badge text-bg-danger">4</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- the profile tab-->
                                <a class="nav-link" aria-current="page" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#profile" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="bi bi-person-lines-fill me-2"></i> User Management
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- borrow tab -->
                                <a class="nav-link"  id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#borrow" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="bi bi-bag-fill me-2"></i> Inventory System
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- sched tab-->
                                <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#schedule" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="bi bi-calendar-event-fill me-2"></i> Appointments 
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- download-->
                                <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#download" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="bi bi-pc-display-horizontal me-2"></i> System Management
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>



                <!-- contents for Admin -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5" style="overflow-y: auto; margin-top: 2.5vh;">
                    <div class="tab-content" id="sidebar-tabContent">

                        <!-- New User Tab -->
                        <div class="tab-pane fade show active mt-3" id="newuser" role="tabpanel" aria-labelledby="pills-new-tab" tabindex="0">

                            <!-- profile tabs -->
                            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                <li class="nav-item shadow-right"> <!-- student button -->
                                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">Students</button>
                                </li>
                                <li class="nav-item"> <!-- faculty button -->
                                    <button class="nav-link" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#timeline-tab-pane" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="false">Faculty</button>
                                </li>
                            </ul>

                            <!-- the profile table contents -->
                            <div class="shadow p-3 mb-5 rounded" style="height: 80vh; overflow-y: auto;">
                                <div class="tab-content p-1 mb-2" id="myTabContent">
                                    <!-- about contents-->
                                    <div class="tab-pane fade show active " id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                                    
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Course</th>
                                                    <th>Year Level</th>
                                                    <th>Email</th>
                                                    <th>Validity Status</th>
                                                </tr>
                                            </thead>
                                            <tbody style="vertical-align: middle;">
                                            <?php
                                                            $sql = "SELECT * FROM users WHERE status = '1'";
                                                            if (isset($_POST['data'])) {
                                                                $filter = $_POST['data'];
                                                                $sql = "SELECT * FROM users WHERE Fname LIKE '%$filter%' OR Lname LIKE '%$filter%' OR id LIKE ''%$filter%'' OR  email LIKE '%$filter%'";
                                                            }
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultChecker = mysqli_num_rows($result);
                                                            if ($resultChecker > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                $id = $row['id'];
                                                                $lName = $row['Lname'];
                                                                $fName = $row['Fname'];
                                                                $mName = $row['Mname'];
                                                                $course = $row['course'];
                                                                $yr = $row['year'];
                                                                $email = $row['email'];
                                                                    if ($row['status'] == 0){

                                                                        $stats = "Pending";
                                                                    }
                                                                    else if ($row['status'] == 1){

                                                                        $stats = "Student";
                                                                    }
                                                                    else if ($row['status'] == 2){
                                                                        $stats = "Faculty";
                                                                    }
                                                                    else if ($row['status'] == 3){
                                                                        $stats = "Admin";
                                                                    }


                                                                echo '<tr>
                                                                <td>'.$id.'</td>
                                                                <td>'.$lName.'</td>
                                                                <td>'.$fName.'</td>
                                                                <td>'.$mName.'</td>
                                                                <td>'.$course.'</td>
                                                                <td>'.$yr.'</td>
                                                                <td>'.$email.'</td>
                                                               
                                                                <td>
                                                                <form method="get" action="includes/table.inc.php?id="'.$id.'"">
                                                                    <button class="btn" type="button" style="background-color: #df7630; color: white;">Approve</button>
                                                                    <button class="btn" type="button" style="background-color: #e14747; color: white;">No</button>
                                                                </td>
                                                                </form>
                                                                </tr>';
                                                                }
                                                            } else {
                                                                echo '<h1 style="color:red;">No User Found</h1>';
                                                            }

                                                            ?>
                                            </tbody>
                                        </table> 
                                    
                                    </div>
                                    <!-- FACULTY USERS -->
                                    <div class="tab-pane fade" id="timeline-tab-pane" role="tabpanel" aria-labelledby="timeline-tab" tabindex="0">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Department</th>
                                                    <th>Email</th>
                                                    <th>Validity Status</th>
                                                </tr>
                                            </thead>
                                            <tbody style="vertical-align: middle;">
                                            <?php
                                                            $sql = "SELECT * FROM users WHERE status = '2'";
                                                            if (isset($_POST['data'])) {
                                                                $filter = $_POST['data'];
                                                                $sql = "SELECT * FROM users WHERE Fname LIKE '%$filter%' OR Lname LIKE '%$filter%' OR id LIKE ''%$filter%'' OR  email LIKE '%$filter%'";
                                                            }
                                                            $result = mysqli_query($conn, $sql);
                                                            $resultChecker = mysqli_num_rows($result);
                                                            if ($resultChecker > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                $id = $row['id'];
                                                                $lName = $row['Lname'];
                                                                $fName = $row['Fname'];
                                                                $mName = $row['Mname'];
                                                                $dprmnt = $row['dprmnt'];                                                              
                                                                $email = $row['email'];
                                                                    if ($row['status'] == 0){

                                                                        $stats = "Pending";
                                                                    }
                                                                    else if ($row['status'] == 1){

                                                                        $stats = "Student";
                                                                    }
                                                                    else if ($row['status'] == 2){
                                                                        $stats = "Faculty";
                                                                    }
                                                                    else if ($row['status'] == 3){
                                                                        $stats = "Admin";
                                                                    }


                                                                echo '<tr>
                                                                <td>'.$id.'</td>
                                                                <td>'.$lName.'</td>
                                                                <td>'.$fName.'</td>
                                                                <td>'.$mName.'</td>
                                                                <td>'.$dprmnt.'</td>
                                                                <td>'.$email.'</td>
                                                               
                                                                <td>
                                                                <form method="get" action="includes/table.inc.php?id="'.$id.'"">
                                                                    <button class="btn" type="button" style="background-color: #df7630; color: white;">Approve</button>
                                                                    <button class="btn" type="button" style="background-color: #e14747; color: white;">No</button>
                                                                </td>
                                                                </form>
                                                                </tr>';
                                                                }
                                                            } else {
                                                                echo '<h1 style="color:red;">No User Found</h1>';
                                                            }

                                                            ?>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                              
                            
                        </div>

                        <!-- User Management Tab -->
                        <div class="tab-pane fade show active mt-3" id="profile" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                            <!-- profile tabs -->
                            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                <li class="nav-item shadow-right"> <!-- student button -->
                                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#user-manage-students" type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">Students</button>
                                </li>
                                <li class="nav-item"> <!-- faculty button -->
                                    <button class="nav-link" id="timeline-tab" data-bs-toggle="tab" data-bs-target="#user-manage-faculty" type="button" role="tab" aria-controls="timeline-tab-pane" aria-selected="false">Faculty</button>
                                </li>
                            </ul>

                            <!-- the profile table contents -->
                            <div class="shadow p-3 mb-5 rounded" style="height: 80vh; overflow-y: auto;">
                                <div class="tab-content p-1 mb-2" id="myTabContent">
                                    <!-- about contents-->
                                    <div class="tab-pane fade show active " id="user-manage-students" role="tabpanel" aria-labelledby="about-tab" tabindex="0">
                                    
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Course</th>
                                                    <th>Year Level</th>
                                                    <th>Email</th>
                                                    <th colspan="3">Option</th>
                                                    <th>Validity Status</th>
                                                </tr>
                                            </thead>
                                            <tbody style="vertical-align: middle;">
                                                <tr>
                                                    <td>201810888</td>
                                                    <td>Surname</td>
                                                    <td>First Name</td>
                                                    <td>Middle Name</td>
                                                    <td>BSCoS</td>
                                                    <td>4th</td>
                                                    <td>name.surname@cvsu.edu.ph</td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;" data-bs-toggle="modal" data-bs-target="#view-studentmodal">
                                                            <i class="bi bi-eye-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details" style="color:#df7630"></i>
                                                        </button>   
                                                    </td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;">
                                                            <i class="bi bi-pen-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;">
                                                            <i class="bi bi-trash3-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" style="color:#e14747"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn" type="button" style="background-color: #df7630; color: white;">Approve</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                    
                                    </div>
                                    <!-- FACULTY USERS -->
                                    <div class="tab-pane fade" id="user-manage-faculty" role="tabpanel" aria-labelledby="user-manage-faculty-tab" tabindex="0">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Department</th>
                                                    <th>Email</th>
                                                    <th colspan="3">Option</th>
                                                    <th>Validity Status</th>
                                                </tr>
                                            </thead>
                                            <tbody style="vertical-align: middle;">
                                                <tr>
                                                    <td>201810888</td>
                                                    <td>Surname</td>
                                                    <td>First Name</td>
                                                    <td>Middle Name</td>
                                                    <td>DCS</td>
                                                    <td>name.surname@cvsu.edu.ph</td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;" data-bs-toggle="modal" data-bs-target="#view-facultymodal">
                                                            <i class="bi bi-eye-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Details" style="color:#df7630"></i>
                                                        </button>   
                                                    </td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;">
                                                            <i class="bi bi-pen-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="border-0" type="button" style="background-color: white;">
                                                            <i class="bi bi-trash3-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" style="color:#e14747"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button class="btn" type="button" style="background-color: #df7630; color: white;">Approve</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                              
                            
                            <!-- View Details Modal for Students -->
                            <div class="modal fade" id="view-studentmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">View Details</h5>
                                        </div>
            
                                        <div class="modal-body">
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="idnummber" value="Surname, First Name Middle Name">
                                                <label for="idnumber">Name</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="idnummber" value="201810888">
                                                <label for="idnumber">ID Number</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="address" value="Tanza, Cavite">
                                                <label for="address">Address</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="email" readonly class="form-control-plaintext" id="email" value="name.surname@cvsu.edu.ph">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="course" value="Bachelor of Science in Computer Science">
                                                <label for="course">Course</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="year" value="Fourth">
                                                <label for="year">Year Level</label>
                                            </div>
                                        </div>
            
                                        <div class="modal-footer">
                                            <button type="button" class="btn border-0" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- View Details Modal for Faculty Staffs -->
                             <div class="modal fade" id="view-facultymodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">View Details</h5>
                                        </div>
            
                                        <div class="modal-body">
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="idnummber" value="Surname, First Name Middle Name">
                                                <label for="idnumber">Name</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="idnummber" value="201810888">
                                                <label for="idnumber">ID Number</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="address" value="Tanza, Cavite">
                                                <label for="address">Address</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="email" readonly class="form-control-plaintext" id="email" value="name.surname@cvsu.edu.ph">
                                                <label for="email">Email</label>
                                            </div>
                                            <div class="form-floating mb-3 border-bottom">
                                                <input type="text" readonly class="form-control-plaintext" id="course" value="Department of Computer Studies">
                                                <label for="course">Department</label>
                                            </div>
                                        </div>
            
                                        <div class="modal-footer">
                                            <button type="button" class="btn border-0" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Inventory Tab -->
                        <div class="tab-pane fade" id="borrow" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class=" pt-3 pb-2 mb-3">
                                <h1 class="h2 fw-bolder">inventory</h1>
                            </div>
                        </div>

                        <!-- Appointments -->
                        <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class=" pt-3 pb-2 mb-3">
                                <h1 class="h2 fw-bolder">appointments</h1>
                            </div>
                        </div>

                        <!-- System Management -->
                        <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                            <!-- the name and position -->
                            <div class=" pt-3 pb-2 mb-3">
                                <h1 class="h2 fw-bolder">system management</h1>
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


<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>