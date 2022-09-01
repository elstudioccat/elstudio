<?php 

if (isset($_POST["lsubmit"])){

$username = $_POST["email"];
$pwd = $_POST["pwd"];

require_once 'config.php';
require_once 'functions.inc.php';


if(emptyInputLogin($username, $pwd) !== false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

    loginUser($conn, $username, $pwd);

} 
else {

    header("location: ../index.php");
    exit();
}