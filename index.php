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

    <div class="slider">
        <div>
            <h2>Ride With Ease</h2>
            <p>Forget about carrying all your essential documents, No need to carry them with you all the time. So just leave that to us and</p><br>
            <p style="margin-top: 2rem;font-size: 3.5rem; color: red;font-weight:bolder;"> ENJOY YOUR RIDES</p>
        </div>
    </div>

    <!-- The intro boxes that explains the services of our website -->
    <div style="margin: 0 auto;">
        <div class="MainIntroBox">
            <div class="infor" style="margin-right: 20px;">
                <h4>Service 1</h4><br>
                <p>000111 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maiores, saepe officiis tenetur ut veritatis quisquam blanditiis modi maxime voluptate.</p>
            </div>
            <div class="images">
                <img src="AllimagesinHere/sliderimages/Bike-Trip-to-Leh-Ladakh.jpg" alt="Slider images">
            </div>
        </div>
        <div class="MainIntroBox">
            <div class="images">
                <img src="AllimagesinHere/sliderimages/Bike-Trip-to-Leh-Ladakh.jpg" alt="Slider images">
            </div>
            <div class="infor" style="margin-right: 20px;">
                <h4>Service 2</h4><br>
                <p>000111 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maiores, saepe officiis tenetur ut veritatis quisquam blanditiis modi maxime voluptate.</p>
            </div>
        </div>
        <div class="MainIntroBox">
            <div class="infor" style="margin-right: 20px;">
                <h4>Service 3</h4><br>
                <p>000111 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maiores, saepe officiis tenetur ut veritatis quisquam blanditiis modi maxime voluptate.</p>
            </div>
            <div class="images">
                <img src="AllimagesinHere/sliderimages/Bike-Trip-to-Leh-Ladakh.jpg" alt="Slider images">
            </div>
        </div>
        <div class="MainIntroBox">
            <div class="images">
                <img src="AllimagesinHere/sliderimages/Bike-Trip-to-Leh-Ladakh.jpg" alt="Slider images">
            </div>
            <div class="infor" style="margin-right: 20px;">
                <h4>Service 4</h4><br>
                <p>000111 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut maiores, saepe officiis tenetur ut veritatis quisquam blanditiis modi maxime voluptate.</p>
            </div>
        </div>
        
        
    </div>
    
    <hr>
    <footer>
        <a href="Contacts">Contact Us</a><br><br>
        <a href="Abouts">About Us</a>
    </footer>
</body>
</html>
