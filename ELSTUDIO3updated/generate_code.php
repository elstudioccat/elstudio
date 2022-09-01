<?php

session_start();

?>


<?php 
if(isset($_POST['generate_text']))
{
    
    // Include the qrlib file
    include 'phpqrcode/qrlib.php';
    $text = $_SESSION["id"];
      
    // $path variable store the location where to 
    // store image and $file creates directory name
    // of the QR code file by using 'uniqid'
    // uniqid creates unique id based on microtime
    $path = 'images/';
    $file = $path.uniqid().".png";
      
    // $ecc stores error correction capability('L')
    $ecc = 'L';
    $pixel_Size = 10;
   
    // Generates QR Code and Stores it in directory given
    QRcode::png($text, $file, $ecc, $pixel_Size);
      
    // Displaying the stored QR code from directory
    echo "<center><img src='".$file."'></center>";

}
?>



<!DOCTYPE html>
<body>
<div id="wrapper">
 <form method="post" action="index.php">
  <input type="submit" name="generate_text" value="Back">
 </form>
</div>
</body>
</html>