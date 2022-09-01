<?php

    if(isset($_POST["ssubmit"])){

        $Id = $_POST["sId"];
        $fname = $_POST["sfname"];
        $mname = $_POST["smname"];
        $lname = $_POST["slname"];
        $address = $_POST["saddress"];
        $dpmnt = "N/A";
        $course = $_POST["course"];
        $year = $_POST["year"];
        $email = $_POST["semail"];
        $pwd = $_POST["spwd"];
        $rpwd = $_POST["srpwd"];


        require_once 'config.php';
        require_once 'functions.inc.php';
       
        if(emptyInputSignup($Id, $fname, $mname, $lname,  $address ,$dpmnt , $course, $year, $email,  $pwd, $rpwd) !== false)
        {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if(invalidEmail($email) !== false)
        {
            header("location: ../index.php?error=invalidemail");
            exit();
        }
        if(pwdMatch($pwd, $rpwd) !== false)
        {
            header("location: ../index.php?error=passwordsnotmatch");
            exit();
        }
        if(idExists($conn, $email, $Id) !== false)
        {
            header("location: ../index.php?error=emailalreadyused");
            exit();
        }


        createUser($conn, $Id, $fname, $mname, $lname,  $address,$dpmnt , $course, $year, $email, $pwd);


    } else if(isset($_POST["fsubmit"])){

        $Id = $_POST["Id"];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $dpmnt = $_POST["dpmnt"];
        $course = "N/A";
        $year = "N/A";
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $rpwd = $_POST["rpwd"];

        require_once 'config.php';
        require_once 'functions.inc.php';
       
        if(emptyInputSignup($Id, $fname, $mname, $lname,  $address, $dpmnt , $email,  $pwd, $rpwd) !== false)
        {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if(invalidEmail($email) !== false)
        {
            header("location: ../index.php?error=invalidemail");
            exit();
        }
        if(pwdMatch($pwd, $rpwd) !== false)
        {
            header("location: ../index.php?error=passwordsnotmatch");
            exit();
        }
        if(idExists($conn, $email, $Id) !== false)
        {
            header("location: ../index.php?error=emailalreadyused");
            exit();
        }


        createUser($conn, $Id, $fname, $mname, $lname,  $address, $dpmnt ,$course, $year, $email, $pwd);


    }        
    else {

            header("location: ../index.php");
            exit();
    }


    

       




