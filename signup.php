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
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="/indexHomepage.html">
                    <h1 class="logo">CINEPHILES</h1>
                </a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li><a class="movie-list-title " href="/indexHomepage.html">Home</a></li>
                    <li><a class="movie-list-title " href="/indexHomepage.html">Forum</a></li>

                    <div class="dropdown">
                        <a class="dropbtn" class="movie-list-title">Activites</a>
                        <div class="dropdown-content">
                            <a href="#">Quizzes</a>
                            <a href="#">MEME Contest</a>
                            <a href="#">Fan Club</a>
                        </div>
                    </div>
                    <li><a class="movie-list-title " href="/indexHomepage.html">More</a></li>
                    <li><a class="movie-list-title " href="/indexHomepage.html">About</a></li>

                </ul>
            </div>
            <div class="profile-container">
                <div class="profile-text-container">
                    <div class="dropdown">
                        <a style="cursor: pointer; margin: 0%; padding: 0%;" class="dropbtn"
                            class="movie-list-title">SIGN IN</a>
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
        <a style="margin-left: 20px;" href="/indexHomepage.html"><i class="left-menu-icon fas fa-home"></i></a>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
    </div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    <style>
    /* *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    .main{
       display: grid; 
      height: 100%;
      width: 100%;
      place-items: center;
      background:rgb(141, 4, 4);
      /* background: -webkit-linear-gradient(left, #003366,#004080,#0059b3
    , #0073e6); */
} */

.container {
  max-width: 1250px;
  margin: 30px auto 30px;
  padding: 0 !important;
  width: 90%;
  background-color: #fff;
  box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
}

header {
  background: #eee;
  background-image: url("https://images.pexels.com/photos/1731427/pexels-photo-1731427.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  height: 250px;
}

header i {
  position: relative;
  cursor: pointer;
  right: -96%;
  top: 25px;
  font-size: 18px !important;
  color: #fff;
}

@media (max-width:800px) {
  header {
    height: 150px;
  } 
  
  header i {
    right: -90%;
  }
}

main {
      padding: 20px 20px 0px 20px;
}

.left {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.photo {
  width: 200px;
  height: 200px;
  margin-top: -120px;
  border-radius: 100px;
  border: 4px solid #fff;
}

.active {
  width: 20px;
  height: 20px;
  border-radius: 20px;
  position: absolute;
  right: calc(50% - 70px);
  top: 50px;
  background-color: #FFC107;
  border: 3px solid #fff;
}

@media (max-width:990px) {
  .active {
    right: calc(50% - 60px);
    top: 50px;
  } 
}

.name {
  margin-top: 20px;
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  font-size: 18pt;
  color: #777;
}

.info {
  margin-top: -5px;
  margin-bottom: 5px;
  font-family: 'Montserrat', sans-serif;
  font-size: 11pt;
  color: #aaa;
}

.stats {
  margin-top: 25px;
  text-align: center;
  padding-bottom: 20px;
  border-bottom: 1px solid #ededed;
  font-family: 'Montserrat', sans-serif;
}


.number-stat {
  padding: 0px;
  font-size: 14pt;
  font-weight: bold;
  font-family: 'Montserrat', sans-serif;
  color: #aaa;
}

.desc-stat {
  margin-top: -15px;
  font-size: 10pt;
  color: #bbb;
}

.desc {
  text-align: center;
  margin-top: 25px;
  margin: 25px 40px;
  color: #999;
  font-size: 11pt;
  font-family: 'Montserrat', sans-serif;
  padding-bottom: 25px;
  border-bottom: 1px solid #ededed;
}

.social {
  margin: 5px 0 12px 0;
  text-align: center;
  display: inline-block;
  font-size: 20pt;
}

.social i {
  cursor: pointer;
  margin: 0 15px;
}

.social i:nth-child(1)  { color: #4267b2; }
.social i:nth-child(2)  { color: #1da1f2; }
.social i:nth-child(3)  { color: #bd081c; }
.social i:nth-child(4)  { color: #36465d; }

.right {
  padding: 0 25px 0 25px !important;
}

.nav {
  display: inline-flex;
}

.nav li {
  margin: 40px 30px 0 10px;
  cursor: pointer;
  font-size: 13pt;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 500;
  color: #888;
}

.nav li:hover, .nav li:nth-child(1)  { 
  color: #999;
  border-bottom: 2px solid #999;
}

.follow {
  position: absolute;
  right: 8%;
  top: 35px;
  font-size: 11pt;
  background-color: #42b1fa;
  color: #fff;
  padding: 8px 15px;
  cursor: pointer;
  transition: all .4s;
  font-family: 'Montserrat', sans-serif;
  font-weight: 400;
}

.follow:hover {
  box-shadow: 0 0 15px rgba(0,0,0,0.2), 0 0 15px rgba(0,0,0,0.2);
}

@media (max-width:990px) {
  .nav {
    display: none;
  }
  
  .follow {
    width: 50%;
    margin-left: 25%;
    display: block;
    position: unset;
    text-align: center;
  }
}
.gallery  {
  margin-top: 35px;
}

.gallery div {
  margin-bottom: 30px;
}

.gallery img {
  box-shadow: 0 3px 6px rgba(0,0,0,0.10), 0 3px 6px rgba(0,0,0,0.10);
  width: auto; 
  height: auto;
  cursor: pointer;
  max-width: 100%;
}
 </style>    /* } */ */

    /* html,body {
  background: #efefef;
  font-family: "Arial";



    </head>
    <body>

    <!-- <div class="main">   
      
      
    </div> -->

    <div class="container">
      <header>
        <i class="fa fa-bars" aria-hidden="true"></i>
      </header>
      <main>
        <div class="row">
          <div class="left col-lg-4">
            <div class="photo-left">
              <img class="photo" src="https://images.pexels.com/photos/1804796/pexels-photo-1804796.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
              <div class="active"></div>
            </div>
            <h4 class="name">Jane Doe</h4>
            <p class="info">UI/UX Designer</p>
            <p class="info">jane.doe@gmail.com</p>
            <div class="stats row">
              <div class="stat col-xs-4" style="padding-right: 50px;">
                <p class="number-stat">3,619</p>
                <p class="desc-stat">Followers</p>
              </div>
              <div class="stat col-xs-4">
                <p class="number-stat">42</p>
                <p class="desc-stat">Following</p>
              </div>
              <div class="stat col-xs-4" style="padding-left: 50px;">
                <p class="number-stat">38</p>
                <p class="desc-stat">Uploads</p>
              </div>
            </div>
            <p class="desc">Hi ! My name is Jane Doe. I'm a UI/UX Designer from Paris, in France. I really enjoy photography and mountains.</p>
            <div class="social">
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
              <i class="fa fa-twitter-square" aria-hidden="true"></i>
              <i class="fa fa-pinterest-square" aria-hidden="true"></i>
              <i class="fa fa-tumblr-square" aria-hidden="true"></i>
            </div>
          </div>
          <div class="right col-lg-8">
            <ul class="nav">
              <li>Gallery</li>
              <li>Collections</li>
              <li>Groups</li>
              <li>About</li>
            </ul>
            <span class="follow">Follow</span>
            <div class="row gallery">
              <div class="col-md-4">
                 <img src="https://images.pexels.com/photos/1036371/pexels-photo-1036371.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
              </div>
              <div class="col-md-4">
                <img src="https://images.pexels.com/photos/861034/pexels-photo-861034.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
              </div>
              <div class="col-md-4">
                 <img src="https://images.pexels.com/photos/113338/pexels-photo-113338.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
              </div>
              <div class="col-md-4">
                 <img src="https://images.pexels.com/photos/5049/forest-trees-fog-foggy.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
              </div>
              <div class="col-md-4">
                <img src="https://images.pexels.com/photos/428431/pexels-photo-428431.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
              </div>
              <div class="col-md-4">
                <img src="https://images.pexels.com/photos/50859/pexels-photo-50859.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
              </div>
            </div>
          </div>
      </main>
    </div>




    <script src="app.js"></script>
</body>

</html>











<?php
include("databaseConnection.php");


 if(isset($_POST['sign_up'])){


     $name=htmlentities(mysql_real_escape_string($con,$_POST['user_name']));
     $email=htmlentities(mysql_real_escape_string($con,$_POST['user_email']));
     $pass=htmlentities(mysql_real_escape_string($con,$_POST['user_pass']));
     $rand=rand(1,2);

    


    if($name==''){

       echo"<script>alert('We can not verify your name')</script>";


    }

    if(strlen($pass)<8){

       echo"<script>alert('Password should be minimum 8 characters!')</script>";
        exit();


    }

    $check_email="select * from user_info where email='$email'";
    $run_email=mysqli_master_query($con,$check_email);
    $check= mysqli_num_rows($run_email);

    if($check==1){


      
      echo"<script>alert('Email already exist, please try again!')</script>";
       echo"<script>window.open('signup.php','_self')</script>";
       exit();






    }

    if($rand==1)
    	$profile_pic="images/cinephiles1.png";
    else if($rand==2)
    	$profile_pic="images/cinephiles2.png";

    $insert="insert into user_info(username,email,pass) values('$name','$email','$pass')";

    $query=mysqli_query($con,$insert);
    
    if($query){

             
           
      echo"<script>alert('Congratulations $name, your account has been created Successfully')</script>";

       echo"<script>window.open('signin.php','_self')</script>";

    }
   

    else{

           echo"<script>alert('Registration failed, try again!')</script>";
           echo"<script>window.open('signup.php','_self')</script>";



    }





 }




















?>