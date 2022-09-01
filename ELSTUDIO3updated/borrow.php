<?php
  require("includes/header.php");
?>
        
        <div class="container-fluid borrow-container">
            <div class="row">
                <!-- sidebar -->
                <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="height: auto; background-color: rgba(0, 0, 0, .1);">
                    <div class="d-flex flex-column position-sticky pt-4" style="height:90vh; margin: 10vh 0 0 0;">
                        
                        <div class="outer mx-auto d-block"> <!-- profile pic -->
                            <!-- photo below-->
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
                        <ul class="nav nav-pills flex-column mb-auto" >
                            <li class="nav-item mb-1"> <!-- profile tab -->
                                <a href="profile.php" class="nav-link d-flex justify-content-between">
                                    <div> <!-- the notif badge -->
                                        <i class="bi bi-person-circle me-2" width="16" height="16"></i> Profile
                                    </div> 
                                    <div>
                                        <span class="badge text-bg-danger">4</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mb-1 active"> <!-- borrow tab-->
                                <a class="nav-link" aria-current="page">
                                    <i class="bi bi-handbag-fill me-2"></i> Borrow
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- sched tab-->
                                <a href="schedule.php" class="nav-link">
                                    <i class="bi bi-calendar-event-fill me-2"></i> Schedule
                                </a>
                            </li>
                            <li class="nav-item mb-1"> <!-- download -->
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

                <!-- contents for borrow -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5" style="overflow-y: auto; height: auto; margin-top: 3.5vh;">
                    <!-- the name and position -->
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
                                    <td>Status</td>
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

        <!-- offcanvas of sidebar for mobile view -->
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
                            <a href="profile.html" class="nav-link">
                                <i class="bi bi-person-circle me-2" width="16" height="16"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item mb-1 active">
                            <a class="nav-link" aria-current="page">
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
require("includes/footer.php");
      ?>
      