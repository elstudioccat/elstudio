<?php

session_start();

?>


<?php
 
$msg = "";
 
// If upload button is clicked ...
if(isset($_FILES['uplods'])) {
    require_once '../includes/config.php';
    $pic = $_FILES['uplods'];
    $filename = $_FILES['uplods']["name"];
    $tempname = $_FILES['uplods']["tmp_name"];
    $folder = "./uploadss/" . $filename;
    $id = $_SESSION["id"];
    
    // Get all the submitted data from the form
    $sql = "UPDATE users SET filename='$filename' WHERE id = '$id' ";
    

    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
        header("location: userprofile.php");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
} else {

    echo "choose image please";
}
?>