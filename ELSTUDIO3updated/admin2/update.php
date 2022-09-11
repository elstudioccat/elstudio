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
    <div class="container-fluid" id="form-container">
        <div class="form-container shadow">
          <div class="register-form">
            <form method="post" action="includes/update.inc.php">
              <div class="mb-3">
                <h3>UPDATE USER</h3>
              </div>
              <input type="number" name="id" value="<?php echo $_GET['id']; ?>" style="width:35px; visibility:hidden;">
              <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" name="fName" value="<?php echo $_GET['fName']; ?>" class="form-control" id="fName">
              </div>
              <div class="mb-3">
                <label for="midleName" class="form-label">Midle Name</label>
                <input type="text" name="mName" value="<?php echo $_GET['mName']; ?>" class="form-control" id="mName">
              </div>
              <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" name="lName" value="<?php echo $_GET['lName']; ?>" class="form-control" id="lName">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="<?php echo $_GET['email']; ?>" class="form-control" id="email">
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" value="<?php echo $_GET['status']; ?>" class="form-control" id="status">
              </div>
              <button type="submit" name="update" class="btn">Update</button>
              </div>
            </form>
          </div>
        </div>
    </div>
    <footer>
      <h6>ELStudio</h6>
    </footer>
    <script src="app.js"></script>
</body>
</html>