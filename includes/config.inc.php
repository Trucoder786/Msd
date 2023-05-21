<?php

$conn = mysqli_connect("localhost", "root", "root", "UserRegister");

if(!$conn){
    print_r($conn.mysqli_error($conn));
    
    die("Connection failed : ".mysqli_connect_error());
}