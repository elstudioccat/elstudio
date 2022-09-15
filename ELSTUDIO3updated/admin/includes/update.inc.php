<?php
  include_once("../../includes/config.php");

if (isset($_POST['updateid'])) {
    $id=$_POST['updateid'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $result=mysqli_query($conn, $sql);
    $response=array();
    while ($row = mysqli_fetch_assoc($result)) {
        $response=$row;
    }
    echo json_encode($response);
} else {

    $response['status']=200;

}



if (isset($_POST['hiddendata'])){
      $id=$_POST['hiddendata'];
      $Fname=$_POST['Fname'];
      $Mname=$_POST['Mname'];
      $Lname=$_POST['Lname'];
      $address=$_POST['address'];
      $course=$_POST['course'];
      $year=$_POST['year'];
      $email=$_POST['email'];
      $dprmnt=$_POST['dprmnt'];

      $sql = "UPDATE users SET Fname='$Fname',Mname='$Mname',Lname='$Lname',address='$address',dprmnt='$dprmnt',course='$course',year='$year',email='$email' where id = '$id'";
      $result=mysqli_query($conn, $sql);
      header("Location: ../admin.php?updatesuccess");



}

if (isset($_POST['hiddendatas'])){
 
  $id=$_POST['hiddendatas'];
  $Fname=$_POST['Fnames'];
  $Mname=$_POST['Mnames'];
  $Lname=$_POST['Lnames'];
  $address=$_POST['addresss'];
  $email=$_POST['emails'];
  $dprmnt=$_POST['dprmnts'];

  $sql = "UPDATE users SET Fname='$Fname',Mname='$Mname',Lname='$Lname',address='$address',dprmnt='$dprmnt',email='$email' where id = '$id'";
  $result=mysqli_query($conn, $sql);
  header("Location: ../admin.php?updatesuccess");



}
