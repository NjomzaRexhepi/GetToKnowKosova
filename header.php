<?php 


if(session_id() == ''){
    //session has not started
    session_start();
}?>
<div class="header">
        <div class="header-container" id="burger-menu">
            <div class="logo-part-1">
                <img src="Header/logoja.png" height=104px;>
            </div>
            
            <div class="logo-part-2">
                <div class="empty"></div>
                <div class="header-inside" id="burger-menu">
                    <div class="left-side">
                        <div class="left-side-inside">
                            <a class="logo-part-2-inside">
                                <img src="Header/llogojaGerma.png" height=45px>
                            </a>
                        </div>
                    </div>
                    
                    <div class="in-the-middle">
                        <div class="in-the-middle-inside">
                            <div class="the-header">
                            <a href="Explore.php">Explore Kosova</a>
                        </div>
                            
                        </div>
                        
                        <div class="in-the-middle-inside">
                            <div class="the-header">
                            <a href="#">What's on</a>
                        </div>
                            <ul>
                                <li><a href="Nature.php">Nature</a></li>
                            </ul>
                        </div>
                        <div class="in-the-middle-inside">
                            <div class="the-header">
                            <a href="#">Plan Your Trip</a>
                        </div>
                            <ul>
                                <li><a href="PracticalInfo.php">Practical Info</a></li>
                                <li><a href="Accomodation.php">Accomodation</a></li>
                                <li><a href="Transport.php">Transport</a></li>
                                <li><a href="shopping.php">Shopping</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="right-side">
                        <div class="search-box" style = "background-color:white; color:black;">
                            <form action = "search.php" method = "POST">
                            <input type  = "text" name = "search" placeholder= "Type to search" class = "search-text">
                            <button type = "submit" name = "submit-search" class = "search-button"><img src="Header/search-icon.png" width=28px, height=28px> </button>

                            </form>
                        </div>
          
                        <div class="menu">
                            <div class="menu-button" data-target="#burger-menu, #burger-menu-2">
                                <div class="menu-button-hamburger">
                                    
                                </div>
                                
                            </div>

                        </div>
    
                    </div>
                </div>

                <div class="hidden-menu" id="burger-menu-2">
                        <div class="hidden-menu-ontop">
                            <div class="hidden-menu-ontop-inside">
                                
                                    <a href="subscribe.php" class="hamburger-header btn btn-dark text-center">Subscribe</a>
									<a href="webapi.php" class="hamburger-header btn btn-dark text-center">Weather API</a>
                                    <a href="com.php" class="hamburger-header btn btn-dark text-center">Comments</a>
                                
                            </div>
                            <div class="hidden-menu-ontop-inside">
                                <a href=<?php 
                            if(isset($_SESSION["user_id"])){
                                echo 'logout.php';
                            }else{
                                echo 'login_signup.php';
                            }
                            ?> class="button btn btn-dark text-center" id="signup"><?php 
                            if(isset($_SESSION["user_id"])){
                                echo 'Logout';
                            }else{
                                echo 'Sign Up/Log In';
                            }
                            ?></a>
                                
                            </div>
                        </div>
                        <div class="hidden-menu-bottom">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="https://github.com/"><i class="fab fa-github fa-2x"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook fa-2x"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-2x"></i></a>
                            <a href="https://twitter.com/"><i class="fab fa-twitter fa-2x"></i></a>
                        </div>
                        </div>
                </div>
            </div>
            
        </div>
    </div>