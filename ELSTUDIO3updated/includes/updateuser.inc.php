<?php

    if(isset($_POST["submit"])){

        $Id = $_POST["Id"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $course = $_POST["course"];
        $year = $_POST["year"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

        require_once 'config.php';
        require_once 'functions.inc.php';
       

     updateUser($conn, $Id, $fname, $mname, $lname,  $address, $course, $year, $email, $pwd);


    }    
    else {

            header("location: ../useredit.php");
            exit();
    }