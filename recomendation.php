<?php

session_start();
include 'config.php';

$moviename=$_SESSION['valpass'];
// echo $moviename;
$image;
$des;
$sql = "SELECT * FROM `movie_info` WHERE 1";
$result1 = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result1) ) { 
  
        if($row['movie_name']==$moviename){
            $image=$row['image'];
            $des=$row['synopsis'];

        }
   
 
   

}

    
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>CINEPHILES</title>
    <style>
         body{
            background-color: rgb(83, 25, 25);
         }
        .contain1{
            display: flex;
            justify-content: space-between;
            background-color: black;
            width: 80%;
            height: 70%;
            margin-top: 5%;
            margin-left: 12%;
            margin-bottom: 1%;
            margin-right: 5%;
            border-radius: 2%;

        }

        .pic{
        background-color :blanchedalmond;
        border-radius: 5%;
        flex-basis:35%;
        position: sticky;
        top: 70px;
        align-self: flex-start;
        width: 30%;
        height: 70%;
        margin: 7% 7%;
        

        }
    .pic img{
        width: 100%;
        height: 100%;
        border-radius: 5%;
    }

        .description{
        background-color :blanchedalmond;
        flex-basis: 50%;
        position: sticky;
        top: 70px;
        align-self: flex-start;
        width: 45%;
        height: 70%;
        margin: 7% 7%;
        }
        .description h3{
            margin: 1%;
            position: relative;
            float: left;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .button1{
        background-color: gray;
        color: black;
        padding:4px;
        text-decoration: none;
        text-align: center;
        font-weight: bold;
        border-radius: 10%;
        margin-left: 23%;
        cursor: pointer;
        width: 15%;
        height: 6%;

       }
     .button1:hover{
       background-color: green;
    }
    
          
       
    </style>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="/index.html">
                    <h1 class="logo">CINEPHILES</h1>
                </a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    
                    <li>
            </a></li>

                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/profile.jpg" alt="">
                <input id="searchbar" type="text" name="search" placeholder="Search Movie">
                <div class="profile-text-container">
                    <div class="dropdown">
                        <a style="margin: 0%; padding: 0%;" class="dropbtn" class="movie-list-title">Profile</a>
                        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
                        <div class="dropdown-content">
                            <a id="name" href="#">Mehedi Hasan</a>
                            <a href="#">Setting & Srivacy</a>
                            <a href="#">Logout</a>
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
    <div class="sidebar">
        <div class="left-menu-icon fas fa-search" style="margin-top: 8px; " id="SearchIcon"></div>
        <a style="margin-left: 20px;" href="indexlogin.php"><i class="left-menu-icon fas fa-home"></i></a>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>


    <div class="contain1">
        <div class="pic">
            <img src="img/<?php if(isset($image)){
                echo $image;
                }
                ?>" alt="">

        </div>

        <div class="description">
        <h3>
               <?php if(isset($moviename)){
                echo  "Movie Name:".$moviename;

                }
                ?>
            </h3>
            <h3>
               <?php if(isset($des)){
                echo  $des;
                }
                ?>
            </h3>


        </div>


    </div>


    
         <button class="button1 ">watch party</button>
         <button class="button1">Play</button>

   
    <script src="app.js"></script>
</body>

</html>