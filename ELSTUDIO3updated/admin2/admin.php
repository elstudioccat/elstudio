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
                <div class="logo-name">ELstudio</div>
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
                <a href="../index.php">
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
<div class="home-content">
     <div class="container-fluid">
    <div class="row">
      <div class="stat col-sm-3 shadow-sm bg-white text-success">
        <div class="bg-success">
          <i class="fa-solid fa-users text-white"></i> 
        </div>
        <?php
          $sql = "SELECT * FROM users WHERE status < '3'";
          $result = mysqli_query($conn, $sql);
          $resultChecker = mysqli_num_rows($result);
          echo '<h4>'.$resultChecker.'</h4>';
        ?>
        <p>Registered Users</p>
      </div>
      <div class="stat col-sm-3 shadow-sm bg-white text-primary">
        <div class="bg-primary">
          <i class="fa-solid fa-user-check text-white"></i>
        </div>
        <?php
          $sql = "SELECT * FROM users;";
          $result = mysqli_query($conn, $sql);
          $resultChecker = mysqli_num_rows($result);
          echo '<h4>'.$resultChecker.'</h4>';
        ?>
        <p>Uploaded Users</p>
      </div>
      <div class="stat col-sm-3 shadow-sm bg-white text-warning">
        <div class="bg-warning">
          <i class="fa-solid fa-user-clock text-white"></i>
        </div>
        <?php
          $sql = "SELECT * FROM users WHERE status = '0';";
          $result = mysqli_query($conn, $sql);
          $resultChecker = mysqli_num_rows($result);
          echo '<h4>'.$resultChecker.'</h4>';
        ?>
        <p>Pending Users</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
       <div class="col-md-8">
           <div class="search">
             <i class="fa-solid fa-magnifying-glass"></i>
      <input type="text" name="" id="search" class="form-control" placeholder="Search" />
    </div>
           <div class="table-data">
      <table class="table table-striped table-hover">
        <thead>
          <tr> 
            <th>Id</th>
            <th>First Name</th>
            <th>Midle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
        <!-- search-->
          <?php
          $sql = "SELECT * FROM users WHERE status < '3'";
          if (isset($_POST['data'])) {
            $filter = $_POST['data'];
            $sql = "SELECT * FROM users WHERE Fname LIKE '%$filter%' OR Lname LIKE '%$filter%' OR id LIKE ''%$filter%'' OR  email LIKE '%$filter%'";
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
              <td>'.$fName.'</td>
              <td>'.$mName.'</td>
              <td>'.$lName.'</td>
              <td>'.$email.'</td>
              <td>'.$stats.'</td>
              <td>
              <form method="get" action="includes/table.inc.php?id="'.$id.'"">
                <a type="submit" class="btn btn-primary" name="edit" value="'.$id.'">Update User</a>
                <a type="submit" class="btn btn-danger" name="delete" value="'.$id.'">Delete User</a>
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
</div>
<footer>
      <h6>ELStudio</h6>
    </footer>
    <script src="app.js"></script>
</body>
</html>