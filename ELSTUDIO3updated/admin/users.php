<?php
    include_once("../includes/config.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/347f221dac.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>C.R.U.D</title>
</head>
<body>
    <div class="sidebar active">
        <div class="logo-content">
            <div class="logo">
                <i class="fa-solid fa-c"></i>
                <div class="logo-name">CodeXtra</div>
            </div>
            <i class="fa-solid fa-x hide" id="btn"></i>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="admin.php">
                    <i class="fa-solid fa-house"></i>
                    <span class="link-name">Dashboard</span>
                </a>
               <p class="tool">Dashboard</p>
            </li>
            <li>
                <a href="users.php?id">
                    <i class="fa-solid fa-user"></i>
                    <span class="link-name">Users</span>
                </a>
               <p class="tool">Users</p>
            </li>
            <li>
                <a href="register.php">
                    <i class="fa-solid fa-user-pen"></i>
                    <span class="link-name">Register</span>
                </a>
               <p class="tool">Register</p>
            </li>
            <li>
                <a href="">
                    <i class="fa-solid fa-gear"></i>
                    <span class="link-name">Settings</span>
                </a>
               <p class="tool">Settings</p>
            </li>
            <li>
                <a href="">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="link-name">Logout</span>
                </a>
             <p class="tool">Logout</p>
            </li>
        </ul>
    </div>
    <header>
      <div class="header">
          <div class="header-text">
            <p><span>Admin</span> Dashboard</p>
          </div>
          <div class="themes">
            <div class="current">
            <div class="green"></div> Themes
            </div>
            <div class="theme">
            <div class="blue"></div>
            <div class="red"></div>
            <div class="violet"></div>
            <div class="green"></div>
          </div>
          </div>
      </div>
    </header>
<body>
                <?php
                    $id = $_GET['id'];
                    if (!$id) {
                       $sql = "SELECT * FROM users";
                    } else {
                        $sql = "SELECT * FROM users WHERE id =".$id."";
                    }
                    $result = mysqli_query($conn, $sql);
                    $resultChecker = mysqli_num_rows($result);
                    if ($resultChecker > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $fName = $row['Fname'];
                        $mName = $row['Mname'];
                        $lName = $row['Lname'];
                        $email = $row['email'];
                        // $upload = $row['upload'];
                        // $status = $row['Imgstatus'];
                        if ($status == 0) {
                            echo '<div class="container-fluid">
                            <div class="photo-card-container d-flex align-items-center justify-content-center">
                                <div class="photo-card shadow">
                            <div class="img-sec">
                            <img src="images/default.png" alt="Profile Photo">
                        </div>';
                        } else {
                            $img = "images/profile".$id."*";
                            $imgSearch = glob($img);
                            echo '<div class="container-fluid">
                        <div class="photo-card-container d-flex align-items-center justify-content-center">
                         <div class="photo-card shadow">
                            <div class="img-sec">
                            <img src="'.$imgSearch[0].'" alt="Profile Photo">
                        </div>';
                        }
                        echo '<div class="info-sec">
                        <p class="first-name">First Name: <span>'.$fName.'</span></p>
                        <p class="midle-name">Midle Name <span>'.$mName.'</span></p>
                        <p class="last-name">Last Name: <span>'.$lName.'</span></p>
                        <p class="email">Email: <span>'.$email.'</span></p>
                    </div>
                    <div class="social-links">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>
        </div>';
        // <button onclick="window.print()" class="print-card-buttton">Print Card</button>
                      }
                    }
                    
                ?>
    <footer>
      <h6>ELStudio</h6>
    </footer>
    <script src="app.js"></script>
</body>
</html>