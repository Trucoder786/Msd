<?php

if (isset($_POST['SubmitSignup'])){

    $username = $_POST['username'];
    // $useremail = $_POST['useremail'];
    $userpassword = $_POST["password01"];

    require "config.inc.php";
    require "functions.inc.php";

    if(emptyInputlogin($username, $userpassword) !== false){
        header("location: ./login.php?error=emptyInputField");
        exit();
    }
    
    
    loginTheUser($conn, $username, $userpassword);


}
else{
    header("location: ./login.php");
    exit();
}