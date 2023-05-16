<?php

if (isset($_POST['SubmitSignup'])){

    $fullname = $_POST['name'];
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpassword = $_POST["password01"];
    $passwordrepeat = $_POST["password02"];

    require "config.inc.php";
    require "functions.inc.php";

    if(emptyInputSignup($fullname, $username, $useremail, $userpassword, $passwordrepeat) !== false){
        header("location: ./signup.php?error=emptyInputField");
        exit();
    }
    if(invalidUId($username) !== false){
        header("location: ./signup.php?error=InvalidUsername");
        exit();
    }
    if(invalidEmail($useremail) !== false){
        header("location: ./signup.php?error=invalidEmail");
        exit();
    }
    if(checkPasswords($userpassword, $passwordrepeat) !== false){
        header("location: ./signup.php?error=passworderror");
        exit();
    }
    if(UidExists($conn, $username, $useremail) !== false){
        header("location: ./signup.php?error=usernameTaken");
        exit();
    }
    
    createUser($conn, $fullname, $username, $useremail, $userpassword, $passwordrepeat);


}
else{
    header("location: ./signup.php");
    exit();
}