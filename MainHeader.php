<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoDocs</title>
    <link rel="shortcut icon" href="AllimagesinHere/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="Style3.css">
</head>
<body>
    <!-- For style1.css, nav bar type 1 -->
    <header>
            <img src="AllimagesinHere/logo.png" alt="Our Logo" class="logo">
            <ul class="nav_links">
                <li><a href="Home">Home</a></li>
                <li><a href="Recent Rides">Recent Rides</a></li>
                <li><a href="Must Rides">Must Rides</a></li>
            </ul>
            <span>
                <?php
                    if (isset($_SESSION["RIDERID_Sessionname"])){
                        echo "<a href='includes/Profile.php'><button>Your Profile</button></a>";
                        echo "<a href='includes/includes/logout.inc.php'><button>Log Out</button></a>";
                    }
                    else{
                        echo "<a href='includes/login.php'><button >Sign-in</button><br></a>";
                        echo '<p style="color: white; text-align:center;">Or</p>';
                        echo "<a href='includes/signup.php'><button>Register</button></a>";
                    }
                ?>                
            </span>

    </header>
