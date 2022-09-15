<?php
include_once('../../includes/config.php');
if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    $sql = "UPDATE users SET valstatus = 1 WHERE id = $id;";
    mysqli_query($conn, $sql);
    header("Location: ../admin.php?updatesuccess");


} elseif (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id = ".$id."";
    mysqli_query($conn, $sql);
    header("Location: ../admin.php?userdeleted!");
}    
else {
    # code...
}