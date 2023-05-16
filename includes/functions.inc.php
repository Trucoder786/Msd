<?php

function emptyInputSignup($fullname, $username, $useremail, $userpassword, $passwordrepeat){
    if (empty($fullname) || empty($username) || empty($useremail) || empty($useremail) || empty($userpassword) || empty($passwordrepeat)){
        return true;
    }
    else{
        return false;
    }
}

function invalidUId($username){
    if(preg_match("/^[a-zA-Z0-9_!#$]*$/", $username)){
        return true;
    }else{
        return false;
    }
}

function invalidEmail($useremail){
    if(!filter_var($useremail, FILTER_VALIDATE_EMAIL)){
        return true;
    }else {
        return false;
    }
}
function checkPasswords($userpassword, $passwordrepeat) {
    if($userpassword !== $passwordrepeat){
        return true;
    }
    else{
        return false;
    }
}

function UidExists($conn, $username, $useremail){
    $sql = "SELECT * FROM riderlogs	WHERE USERNAME = ? OR USEREMAIL = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ./signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $useremail);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultdata)){
        mysqli_stmt_close($stmt);
        return $row;
        // To be changed later
    }else{
        mysqli_stmt_close($stmt);
        return false;
    }
}

function createUser($conn,$fullname, $username, $useremail, $userpassword, $passwordrepeat){
    $sql = "INSER INTO riderlogs (FULLNAME, USERNAME, USEREMAIL, USERPSWD) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ./signup.php?error=stmtfailed");
        exit();
    }

    $hashedPSWD = password_hash($userpassword, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss",$fullname, $username, $useremail, $hashedPSWD);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../page.html?error=none");
}

function emptyInputlogin($username, $userpassword){
    if (empty($username) || empty($userpassword)){
        return true;
    }
    else{
        return false;
    }   
}

function loginTheUser($conn, $username, $userpassword){
    $uidExists = UidExists($conn, $username, $username);

    if($uidExists === false){
        header("location: ./login.php?error=wrongcredentials");
        exit();
    }

    $pwdsHashed = $uidExists["USERPSWD"];
    $checkpswd = password_verify($userpassword, $pwdsHashed);

    if ($checkpswd === false){
        header("location: ./login.php?error=incorrectPswd");
        exit();
    }
    else if($checkpswd === true){
        session_start();
        $_SESSION["RIDERID_Sessionname"] = $uidExists["USERPSWD"];
        $_SESSION["USERNAME_Sessionname"] = $uidExists["USERNAME"];

        header("location: ../MainPage.php");
        exit();
    }
}