<?php

require "header.html";
// require "styles01.css"
?>
<main>
    <h3>Welcome to Moto Docs... <br>Enter your details below t sign up...</h3>
    <br><br>
    <div class="mainbox">
        <form action="signup.inc.php" method="POST">
            <p>Full Name :</p><br>
            <input type="text" name="name" placeholder="Your full name">
            <p>Username :</p><br>
            <input type="text" name="username" placeholder="Set username">
            <p>E-mail :</p><br>
            <input type="text" name="useremail" placeholder="Enter your email">
            <p>Password : </p><br>
            <input type="text" name="password01" placeholder="Set password" >
            <p>Confirm Password : </p><br>
            <input type="text" name="password02" placeholder="Confirm Password">
            <br><br>
            <button type="submit" name ="SubmitSignup">Create Account</button>
        </form>
    </div>
    
<?php

if(isset($_GET["error"])){
    if($_GET["error"] == "emptyInputField"){
        echo "<p class='errormsg'> ...You left some fields empty... </p>";
    }
    else if($_GET["error"] == "InvalidUsername"){
        echo "<p class='errormsg'> ...That's an invalid username... </p>";
    }
    else if($_GET["error"] == "invalidEmail"){
        echo "<p class='errormsg'> ...The email is invalid... </p>";
    }
    else if($_GET["error"] == "passworderror"){
        echo "<p class='errormsg'> ...The passwords do not match correctly... </p>";
    }
    else if($_GET["error"] == "usernameTaken"){
        echo "<p class='errormsg'> ...The username is already taken, Be more creative... </p>";
    }
}

?>
</main>
