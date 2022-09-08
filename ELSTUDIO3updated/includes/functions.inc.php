<?php
require 'config.php';


// function to delete a record in database
if(isset($_POST['deleteuser'])){

    $idd = $_POST['deleteuser'];

    $query = "DELETE FROM users WHERE id = '$idd'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("location: ../manageuser.php?error=deleted!");
    }

}

// function to check if the user fill out all the fields in registration
function emptyInputSignup($Id, $fname, $mname, $lname,  $address, $email, $pwd, $rpwd){
    $result;
    if( empty($Id) || empty($fname) || empty($mname) || empty($lname) || empty($address) || empty($email) || empty($pwd) || empty($rpwd) ) {
        $result = true;
    }
    else {
        $result = false;
       
    }
    return $result;
}

// function to check the email if valid
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
       
    }
    return $result;
}

// function to check the password and the confirm password is match
function pwdMatch($pwd, $rpwd){
    $result;
    if ($pwd != $rpwd){
        $result = true;
    }
    else {
        $result = false;  
    }
    return $result;
}

// function to check if the email or id number is already registered
function idExists($conn, $email ,$Id){
    $sql = "SELECT * FROM users WHERE email = ? OR id = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../register.php?error=stmterror");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"si", $email, $Id);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

// function to add user into the database
function createUser($conn, $Id, $fname, $mname, $lname,  $address, $dpmnt , $course, $year , $email, $pwd){
    $sql = "INSERT INTO users (id,Fname,Mname,Lname,address,dprmnt,course,year,email,password) VALUES (?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmterror");
        exit();
    }
   // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"isssssssss",$Id, $fname, $mname, $lname,  $address,$dpmnt , $course, $year, $email, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
   
    header("location: ../index.php?error=waitforadminaproval");
    
    exit();
}

// function to update the data`s of the user
function updateUser($conn, $Id, $fname, $mname, $lname,  $address, $course, $year , $email, $pwd){
   
    $query = "UPDATE users SET Fname='$fname', Mname='$mname', Lname='$lname', address='$address', course='$course', year='$year', email='$email', password='$pwd' WHERE id = '$Id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run){

        header("location: ../manageuser.php?error=updated!");

    }
}



// function to check the inputs in the log in page
function emptyInputLogin($username, $pwd){
    $result;
    if( empty($username) || empty($pwd) ) {
        $result = true;
    }
    else {
        $result = false;
       
    }
    return $result;
}

// function to check if the username or id number and password exists
function loginUser($conn, $username, $pwd){
    $idExists = idExists($conn, $username, $username);

    if($idExists === false){
        header("location: ../index.php?error=cantlogin"); 
        exit();
    }

    $ppwd = $idExists["password"];
   
    if ($pwd !== $ppwd ){
        header("location: ../index.php?error=cantlogin!");
        exit();
    }
    else if  ($pwd == $ppwd ){
        session_start();
        $_SESSION["id"] = $idExists["id"];
        $_SESSION["Fname"] = $idExists["Fname"];
        $_SESSION["Mname"] = $idExists["Mname"];
        $_SESSION["Lname"] = $idExists["Lname"];
        $_SESSION["status"] = $idExists["status"];
        $_SESSION["address"] = $idExists["address"];
        $_SESSION["email"] = $idExists["email"];
        $_SESSION["course"] = $idExists["course"];
        $_SESSION["year"] = $idExists["year"];
        $_SESSION["dept"] = $idExists["dprmnt"];
        
        if($_SESSION["status"] === 0){
            echo "<script type='text/javascript'>alert('Wait for admin approval');</script>";
            header("location: ../index.php?error=waitforadminaproval");
            exit();
        }
        else if( $_SESSION["status"] === 1 ){
            header("location: ../userprofile/userprofile.php");
            exit();
        }else if($_SESSION["status"] === 3){
            header("location: ../admin/admin.php");
            exit();
        } else if( $_SESSION["status"] === 2 ){
            header("location: ../userprofile/userprofile.php");
            exit();
        }
    }

}
