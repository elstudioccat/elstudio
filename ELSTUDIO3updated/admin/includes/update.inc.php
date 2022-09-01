<?php
if (isset($_POST['update'])) {
  include_once("../../includes/config.php");
$fName = trim($_POST['fName']);
$mName = trim($_POST['mName']);
$lName = trim($_POST['lName']);
$email = trim($_POST['email']);
$status = trim($_POST['status']);
$tel = $_POST['phoneNumber'];
$id = $_POST['id'];
if (empty($fName) || empty($lName) || empty($email)) {
  header('Location: ../update.php?error=emptyfield');
  exit();
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: ../update.php?error=wrongemail');
  exit();
} else {
      $sql = "UPDATE users SET Fname = '$fName', Mname = '$fName', Lname = '$lName', email = '$email', status = '$status' WHERE id = $id;";
      mysqli_query($conn, $sql);
      header('Location: ../admin.php?update=success');
    }
} else {
 header('Location: ../update.php');
}