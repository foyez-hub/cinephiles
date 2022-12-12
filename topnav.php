<?php 
     session_start();
   if(isset($_SESSION['globalemail']))  $name=$_SESSION['globalemail'];
?>


<div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="indexlogin.php">
                    <h1 class="logo">CINEPHILES</h1>
                </a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li><a class="movie-list-title " href="indexlogin.php">Home</a></li>
                    <li><a class="movie-list-title " href="indexlogin.php">About</a></li>

                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/profile.jpg" alt="">
                <div class="profile-text-container">
                    <div class="dropdown">
                        <a style="cursor: pointer; margin: 0%; padding: 0%;" class="dropbtn" class="movie-list-title" onclick="toggleClock()"> <?php
                                  if(isset($name)) echo $name; 
                                           ?> </a>
                        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
                        <div class="dropdown-content" id="dropdown" style="background-color:black">
                            <a href="profile.php" style="color: white">Profile</a>
                            <hr>
                            <a href="index.php"style="color: white">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>
