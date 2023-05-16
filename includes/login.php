<?php

require "header.html";
// include "styles01.css";
?>
<main>
    <h3>Hey, Nice to see you again... <br>Enter your details below to log in...</h3>
    <br><br>
    <div class="mainbox">
        <form action="login.inc.php" method="POST">
            <p>Username/E-mail :</p><br>
            <input type="text" name="username" placeholder="Username">
            <!-- <p>E-mail :</p><br> -->
            <!-- <input type="text" name="useremail" placeholder="Enter your email"> -->
            <p>Password : </p><br>
            <input type="text" name="password01" placeholder="Password" >
            <br><br>
            <button type="submit" name ="SubmitSignup">Log In</button>
        </form>
    </div>
    
<?php

if(isset($_GET["error"])){
    if($_GET["error"] == "emptyInputField"){
        echo "<p class='errormsg'> ...You left some fields empty... </p>";
    }
    else if($_GET["error"] == "wrongcredentials"){
        echo "<p class='errormsg'> ...That's an invalid username... </p>";
    }
    else if($_GET["error"] == "incorrectPswd"){
        echo "<p class='errormsg'> ...Incorrect Password... </p>";
    }
    
}

?>
</main>
