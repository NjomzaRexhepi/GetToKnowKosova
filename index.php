<?php session_start();
if(!isset($_SESSION["user_id"])){
    header("Location: explore.php");
}
?>
<html>
<head>
    <meta charset='utf-8'>
    <title>Get to know Kosova</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <div class="bg"></div>
<div class="header" id="burger-menu">
    <div class="header-container">
        <div class="logo-part-1">
            <img src="logoja.png" height=104px;>
        </div>
        
        <div class="logo-part-2">
            <div class="empty"></div>
            <div class="header-inside" id="burger-menu">
                <div class="left-side">
                    <div class="left-side-inside">
                        <a class="logo-part-2-inside">
                            <img src="llogojaGerma.png" height=45px>
                        </a>
                    </div>
                </div>
                
                <div class="in-the-middle">
                    <div class="in-the-middle-inside">
                        <div class="the-header">
                        <a href="index.php">Explore Kosova</a>
                    </div>
                        <ul>
                            <li><a href="AboutKosova.html">About Kosova</a></li>
                            <li><a href="LocalCulture.html">Local Culture</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="in-the-middle-inside">
                        <div class="the-header">
                        <a href="ThingsToDo.html">Things to do</a>
                    </div>
                        <ul>
                            <li><a href="#">Arta Culture</a></li>
                            <li><a href="#">Food Drink</a></li>
                            <li><a href="#">Shopping</a></li>
                            <li><a href="#">Sights Attractions</a></li>
                            <li><a href="#">Spas</a></li>
                        </ul>
                    </div>
                    <div class="in-the-middle-inside">
                        <div class="the-header">
                        <a href="WhatsOn.html">What's on</a>
                    </div>
                        <ul>
                            <li><a href="#">Calendar</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Hiking</a></li>
                        </ul>
                    </div>
                    <div class="in-the-middle-inside">
                        <div class="the-header">
                        <a href="PlanYourTrip.html">Plan Your Trip</a>
                    </div>
                        <ul>
                            <li><a href="practicalInfo.php">Practical Info</a></li>
                            <li><a href="#">Getting to</a></li>
                            <li><a href="accomodation.php">Accomodation</a></li>
                            <li><a href="transport.php">Transport</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="right-side">
                    <div class="search-box">
                        <input class="search-text" type="text" placeholder="Type to search">
                        <a class="search-button" href="#">
                            <img src="search-icon.png" width=28px, height=28px>
                        </a>
                    </div>
                    
                    <div class="menu">
                        <div class="menu-button" data-target="#burger-menu, #burger-menu-2">
                            <div class="menu-button-hamburger">
                                
                            </div>
                            
                        </div>
                        <!--<div class="menu-window ">
                            <button type="button">login</button>

                        </div>-->
                    </div>

                </div>
            </div>
            <!--<div class="menu-window">
                                
            </div>
        -->
            <div class="hidden-menu" id="burger-menu-2">
                    <div class="hidden-menu-ontop">
                        <div class="hidden-menu-ontop-inside">
                            <ul>
                                <li><a href="#" class="hamburger-header">Kosovo History</a></li>
                                <li><a href="#" class="hamburger-header">News</a></li>
                                <li><a href="#" class="hamburger-header">About Us</a></li>
                            </ul>
                        </div>
                        <div class="hidden-menu-ontop-inside">
                            <a href=<?php 
                            if(isset($_SESSION["user_id"])){
                                echo 'logout.php';
                            }else{
                                echo 'login_signup.php';
                            }
                            ?> class="button" id="signup"><?php 
                            if(isset($_SESSION["user_id"])){
                                echo 'Logout';
                            }else{
                                echo 'Sign Up/Log In';
                            }
                            ?></a>
                            <a href="shopping.php" class="button" id="login">Shopping</a>
                            <a href="com.php" class="button" id="comment">Comment</a>
                        </div>
                    </div>
                    <div class="hidden-menu-bottom">
                    <h4>Social Media</h4> 
                    </div>
            </div>
        </div>
        
    </div>
</div>

<script src="JavaScript.js"></script>
</body>

</html>