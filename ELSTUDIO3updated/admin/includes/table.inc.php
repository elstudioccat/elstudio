<?php
include_once('../../includes/config.php');
if (isset($_GET['view'])) {
    $id = $_GET['view'];
    header("Location: ../users.php?id=".$id."");
} elseif (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id = ".$id."";
    mysqli_query($conn, $sql);
    header("Location: ../index.php");
} elseif (isset($_GET['img'])) {
    $id = $_GET['img'];
    header("Location: ../upload.php?id=".$id."");
}
elseif (isset($_GET['upload'])) {
    $id = $_GET['upload'];
    $sql = "UPDATE users SET upload = 'Uploaded' WHERE id = ".$id."";
    mysqli_query($conn, $sql);
    header("Location: ../index.php");
}  elseif (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM users WHERE id=".$id.";";
                    $result = mysqli_query($conn, $sql);
                    $resultChecker = mysqli_num_rows($result);
                    echo $resultChecker;
                    if ($resultChecker > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $fName = $row['Fname'];
                             $mName = $row['Mname'];
                             $lName = $row['Lname'];
                            $email = $row['email'];
                            $status = $row['status'];
                            header("Location: ../update.php?id=".$id."&fName=".$fName."&mName=".$mName."&lName=".$lName."&email=".$email."&status=".$status."");
                        }
                    }
}  
   
else {
    # code...
}