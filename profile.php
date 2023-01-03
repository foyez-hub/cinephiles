
<?php 
include 'config.php';
include_once("topnav.php");
include_once("sidenav.php");

    //save privacy

    if(isset($_POST['save'])){

        if(isset($_POST['public'])) 
        {   
            $val="p";
            $val=$_POST['public'];
            $mymail= $_SESSION['globalemail'];
            $sql = "UPDATE `user` SET `watchlistp`='$val' WHERE `email`='$mymail'";
            $result =mysqli_query($conn, $sql);
        }
        
    }
    if(isset($_POST['save2'])){

        
        if(isset($_POST['public'])) 
        {   
            $val="p";   
            $val=$_POST['public'];
            $mymail= $_SESSION['globalemail'];
            $sql = "UPDATE `user` SET `recentlyp`='$val' WHERE `email`='$mymail'";
            $result =mysqli_query($conn, $sql);
        }
        
    }
    if(isset($_POST['save3'])){

        
        if(isset($_POST['public'])) 
        {   
            $val="p";
            $val=$_POST['public'];
            $mymail= $_SESSION['globalemail'];
            $sql = "UPDATE `user` SET `favoritesp`='$val' WHERE `email`='$mymail'";
            $result =mysqli_query($conn, $sql);
        }
        
    }
    if(isset($_POST['save4'])){

        
        if(isset($_POST['public'])) 
        {   
            $val="p";
            $val=$_POST['public'];
            $mymail= $_SESSION['globalemail'];
            $sql = "UPDATE `user` SET `memep`='$val' WHERE `email`='$mymail'";
            $result =mysqli_query($conn, $sql);
        }
        
    }




    


if(isset($_GET['titleX'])){

    $moviex=$_GET['titleX'];


       $mymail= $_SESSION['globalemail'];
        $sql = "SELECT * FROM `user` WHERE `email`='$mymail'";
        
        $result1 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result1);
        $wants=$row['watchlist'];
        $str=explode(",", $wants);
        $friend=",";
        foreach ($str as $key => $value) {
        /*echo $value;*/
        if($value != $moviex && strlen($value)>1)
            $friend .= $value;
             $friend .= ",";
        }  
       

    $sql = "UPDATE `user` SET `watchlist`='$friend' WHERE `email`='$mymail'";
    $result = mysqli_query($conn, $sql);

}
if(isset($_GET['titleX2'])){

    $moviex=$_GET['titleX2'];


       $mymail= $_SESSION['globalemail'];
        $sql = "SELECT * FROM `user` WHERE `email`='$mymail'";
        
        $result1 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result1);
        $wants=$row['favorites'];
        $str=explode(",", $wants);
        $friend=",";
        foreach ($str as $key => $value) {
        /*echo $value;*/
        if($value != $moviex && strlen($value)>1)
            $friend .= $value;
             $friend .= ",";
        }  
       

    $sql = "UPDATE `user` SET `favorites`='$friend' WHERE `email`='$mymail'";
    $result = mysqli_query($conn, $sql);

}

    


//  /echo "           ".$_SESSION['Glousername'];/

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
    <title>CINEPHILES/Profile</title>

    <style>
          body{
            background-color:  #151515;;
        }
        *{
            margin: 0;
            padding: 0;
        }
      .wrapper{
         width: 80%;
         margin: auto; 
      }

      .cover{
        height:360px;
        background: gray;
      }
      .cover img{
        width:100%;
        height:100%;
        
        

      }

      .circle{
        width: 150px;
        height: 150px;
        margin: auto;
        border-radius: 50%;
        border: 3px solid #fff;
        position: relative;
        top: -90px;

      }
      .logo1{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        
      } 

      .id{
        position: relative;
        top:-80px;
        text-align: center;
       
     }
    .buttons{
        position: relative;
        margin-top: -60px;

    }
    button{
       padding: 10px; 
       border: none;
       background: #bbb7a9;
       cursor: pointer;


    }

    .but1{
        width: 20%;
        margin-left: 40%;
        margin-right:1%;
    }
    .but2{
        margin-right: 10px;
    }
    .but3{
         width: 60px;
    }

    button:hover{
        background: rgba(104, 226, 10, 0.792);
    }


        .item1{
            background-color: gray;
            border: 2px solid white;
            padding : 34px 19px;
         
            border-radius: 13px;
            height: 400px;
            width: 350px;
            position: absolute;
            margin-top: 120px;
            box-sizing: border-box;
            
        }

        .item2{
            background-color: gray;
            border: 2px solid white;
            padding : 34px 19px;
           
            border-radius: 13px;
            height: 400px;
            width: 350px;
            position: absolute;
            margin-top: 120px;
            margin-left: 28%;
            box-sizing: border-box;
        }  
        
        
        .item3{
            background-color: gray;
            border: 2px solid white;
            padding : 34px 19px;
            border-radius: 13px;
            height: 400px;
            width: 350px;
            position: absolute;
            margin-top: 120px;
            margin-left: 55%;
            box-sizing: border-box;
        }  
        .list{
            margin:15px;
            margin-left:10%;
            height:80px;
            width:80%;
            color:gray;
            background-color:white;
            display:flex;
            align-items: center;
            justify-content:space-between;
        }
        .list ul li a{  
        margin-top: 49px; 
        color:black;
        }
    .people-bar{
        display: none;
    }

#request-bar{
    padding-top:5px;
    position:absolute;
    width:90%;
    max-width:1000px;
    background:blue;
    top:690px;
    left:20%;
    right:20%;
    z-index: 10000;
    display:none;
}


.people-section{
    width:450px;
    padding:5%;
    background:white;
    margin:20px;
    display:none;

}
.people-profile {
    margin-bottom: -5px;
    font-weight: 500;
    color: #626262;
    cursor: pointer;
    display: flex;
    align-items: center;

}

.people-profile img{
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin-right: 10px;

} 
.people-profile p{
    font-size:30px;
}
.friend-nav{
    cursor: pointer;
}
#privacy-section{

            width: 220px;
            height: 150px;
            background-color: #07375c;
            padding-left: 15px;
            padding-top: 15px;
            display: none;
            position: absolute;
            z-index: 10;


}
#privacy-section2{
            width: 220px;
            height: 150px;
            background-color: #07375c;
            padding-left: 15px;
            padding-top: 15px;
            display: none;
            position: absolute;
            z-index: 10;

           

}
#privacy-section3{
            width: 220px;
            height: 150px;
            background-color: #07375c;
            padding-left: 15px;
            padding-top: 15px;
            display: none;
            position: absolute;
            z-index: 10;

           

}

#privacy-section4{
            width: 220px;
            height: 150px;
            background-color: #07375c;
            padding-left: 15px;
            padding-top: 15px;
            display: none;
            position: absolute;
            z-index: 10;

           

}


.privacy-class{
    padding-top: 15px;
    padding-left: 20px;
    width:80px;
    height:30px;
    cursor:pointer; 
    background:white; 
    color:black;
    margin-top: 20px;
    font-size:15px;
}
        

.privacy-radio {
    margin-left:50px;

}
.privacy-save{
    margin-left:50px; 
    margin-top:7px; 
    border-radius: 20px; 
    cursor:pointer; 
    border-style:none; 
    background-color:  #4dbf00; 
    width:50px; 
    font-weight:800;

}
.privacy-close{
    border-radius: 30px; 
    font-weight:800;
    width:50px; 
    padding-left:5px; 
    cursor:pointer; 
    background:red; 
    color:black;  
    margin-top:8px; 
    margin-left:5px;
    
}




    </style>



</head>

<body>
    
    


    <div style="background-color: #460505;" class="container">
        <div  class="content-container">
            <div class="featured-content">

               <div class="wrapper">
                   
                   <div class="cover">
                    <img src="img/avatar.jpg" alt="Give Cover Photo">  
                   </div>
                   <div class="id-section">
                      <div class="circle">
                      <?php 
                            $email=$_SESSION['globalemail'];
                            $sql = "SELECT * FROM `user` WHERE `email`= '$email'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $var=$row['image'];
                        if(strlen($var)>2)
                        {
                            echo '<img src="img/'.$var.'" alt="" class="logo1">';
                        }
                        if(strlen($var)<2)
                        {   
                            $sql = "UPDATE `user` SET `image`='profile.jpg' WHERE `email`='$email'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $var=$row['image'];
                            echo '<img src="img/'.$var.'" alt="" class="logo1">';
                        }

                        ?>
                      </div>
                    <div class="id">
                        
                        <?php 
                            echo '<h2>'.$_SESSION['Glousername'].'</h2>' ;
                         ?>
                        
                        <h5 style="color:rgb(227, 207, 207); font-weight:bold;">
                        
                        <?php 
                            $email=$_SESSION['globalemail'];
                            $sql = "SELECT * FROM `user` WHERE `email`= '$email'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $var=$row['bio'];
                            if(strlen($var)<1)
                            {
                                echo "Movie Freak";
                            }
                            else echo $var;
                         ?>
                    
                    </h5>
                    </div>
                    <div class="buttons">
                    <button class="but1">
                        <a href="edit_Profile.php">Edit Profile</a>
                    </button>
                    
                    
                  </div>
                  

                </div>
            </div>

          

                
        </div>
    </div>
    </div>

       <div class="container" style="background-color:black">
        <div class="content-container" style="background-color:black">
            <div class="featured-content" style="background-color:black">
            



            <div class="movie-list-container" style="background-color:black">
            <div class="privacy" style="display:flex; align-items: center;justify-content:center;">
            <a class="privacy-class"  onclick="openprivacyForm()">Privacy

                <?php                                         
                    $email=$_SESSION['globalemail'];

                    $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['watchlistp'];
                        $x="fas fa-eye";
                        if($wants=="f")
                        {
                            $x="fas fa-user-friends";
                        }
                        else if($wants=="o")
                        {
                            $x="fas fa-eye-slash";
                        }
                        echo '<i style="margin-left:2px"class="'.$x.'"></i>';
                 ?>
            </a>
                
                <form action="" method="POST"  id="privacy-section">
                 <input class="privacy-radio"  type="radio" name = "public" value="p">Public</br>
                 <input class="privacy-radio" type="radio" name = "public" value="f">Friends</br>
                 <input class="privacy-radio" type="radio" name = "public" value="o">Only Me</br>
                 <div style="display: flex;">
                 <input class="privacy-save"  type="submit" name = "save" value="Save"></br>
                 <a class="privacy-close" onclick="closeprivacyForm()">close</a>
                     
                 </div>
                 
 


              </form>
              <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">Watchlist</h1>

            </div>
                    <div class="movie-list-wrapper">
                    <div class="movie-list">
                    <?php


                        
                    $email=$_SESSION['globalemail'];
                    $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                    $result1 = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result1);
                    $wants=$row['watchlist'];
                    $str=explode(",", $wants);
                    foreach ($str as $key => $value) {
                        // /echo $value;/
                    if(strlen($value)<1)
                    {
                        continue;
                    }

                    $sql = "SELECT * FROM `movie_info` WHERE `movie_name`='$value'";
                    $result1 = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result1);
                    $img= $row['image'];
                    $year= $row['release_year'];

                    $_SESSION['passdata1']=$value;

                        echo '<div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                        <span class="movie-list-item-title">'.$value.'</span>
                        <p class="movie-year-title">'.$year.'
                            </p>
                        <a href="movieOverview.php?title='.$value.'"> <input class="movie-list-item-button2" name="Favorite" type="submit" value="Details"> </a>
                        <a href="profile.php?titleX='.$value.'"> <input style="background-color:red" class="movie-list-item-button" name="Favorite" type="submit" value="X"> </a>
                    </div>';

                    }

                    ?>

                        
                 </div>
                 <i class="fas fa-chevron-right arrow"></i> 
             </div>
              </div> 
             </div>




             <div class="movie-list-container" style="background-color:black">
             <div class="privacy" style="display:flex; align-items: center;justify-content:center;">
            <a  class="privacy-class" onclick="openprivacyForm2()">Privacy

                <?php                                         
                    $email=$_SESSION['globalemail'];

                    $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['recentlyp'];
                        $x="fas fa-eye";
                        if($wants=="f")
                        {
                            $x="fas fa-user-friends";
                        }
                        else if($wants=="o")
                        {
                            $x="fas fa-eye-slash";
                        }
                        echo '<i style="margin-left:2px"class="'.$x.'"></i>';
                 ?>
                    </a>
                
                <form action="" method="POST"  id="privacy-section2">
                 <input class="privacy-radio" type="radio" name = "public" value="p">Public</br>
                 <input class="privacy-radio" type="radio" name = "public" value="f">Friends</br>
                 <input class="privacy-radio" type="radio" name = "public" value="o">Only Me</br>
                 <div  style="display: flex;">
                 <input class="privacy-save"  type="submit" name = "save2" value="Save"></br>
                 <a class="privacy-close"  onclick="closeprivacyForm2()">close</a>
                     
                 </div>
                 
 


              </form>
              <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">RECENTLY WATCHED</h1>

            </div>
                    <div class="movie-list-wrapper">
                    <div class="movie-list">


                        <?php


                        
                        $email=$_SESSION['globalemail'];
                        $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['recent'];
                        $str=explode(",", $wants);
                        $cnt=0;
                        foreach ($str as $key => $value) {
                            
                            if($cnt>5) break;
                            

                            if(strlen($value)<2)
                            {   
                                
                                continue;
                            }
                            $cnt+=1;

                        $sql = "SELECT * FROM `movie_info` WHERE `movie_name`='$value'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $img= $row['image'];
                        $year= $row['release_year'];


                             echo '<div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$value.'</span>
                            <p class="movie-year-title">'.$year.'
                                </p>

                            <a href="movieOverview.php?title='.$value.'"> <input class="movie-list-item-button" name="Favorite" type="submit" value="Details"> </a>

                        </div>';

                        }

                    ?>
                 </div>
                 <i class="fas fa-chevron-right arrow"></i> 
             </div>
              </div> 
             </div>

             <div class="container" style="background-color:black">
        <div class="content-container" style="background-color:black">
            <div class="featured-content" style="background-color:black">
            <div class="movie-list-container" style="background-color:black">


            <div class="privacy" style="display:flex; align-items: center;justify-content:center;">
            <a class="privacy-class" onclick="openprivacyForm3()">Privacy

                <?php                                         
                    $email=$_SESSION['globalemail'];

                    $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['favoritesp'];
                        $x="fas fa-eye";
                        if($wants=="f")
                        {
                            $x="fas fa-user-friends";
                        }
                        else if($wants=="o")
                        {
                            $x="fas fa-eye-slash";
                        }
                        echo '<i style="margin-left:2px"class="'.$x.'"></i>';
                 ?>


             </a>
                
                <form action="" method="POST"  id="privacy-section3">
                 <input class="privacy-radio" type="radio" name = "public" value="p" checked>Public</br>
                 <input class="privacy-radio" type="radio" name = "public" value="f">Friends</br>
                 <input class="privacy-radio" type="radio" name = "public" value="o">Only Me</br>
                 <div style="display: flex;">
                 <input class="privacy-save"  type="submit" name = "save3" value="Save"></br>
                 <a class="privacy-close" onclick="closeprivacyForm3()">close</a>
                     
                 </div>
                 
 


              </form>
              <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">Favorites</h1>

            </div>
                
                    <div class="movie-list-wrapper">
                    <div class="movie-list">


                        <?php


                        
                        $email=$_SESSION['globalemail'];
                        $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['favorites'];
                        $str=explode(",", $wants);
                        foreach ($str as $key => $value) {
                            if(strlen($value)<1)
                    {
                        continue;
                    }
                             /*echo $value;*/

                        $sql = "SELECT * FROM `movie_info` WHERE `movie_name`='$value'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $img= $row['image'];
                        $year= $row['release_year'];


                             echo '<div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$value.'</span>
                            <p class="movie-year-title">'.$year.'
                                </p>
                            
                            <a href="movieOverview.php?title='.$value.'"> <input class="movie-list-item-button" name="Favorite" type="submit" value="Details"> </a>
                            <a href="profile.php?titleX2='.$value.'"> <input style="background-color:red" class="movie-list-item-button2" name="Favorite" type="submit" value="X"> </a>


                        </div>';

                        }

                    ?>
                 </div>
                 <i class="fas fa-chevron-right arrow"></i> 
             </div>
              </div> 

              <div class="container" style="background-color:black">
        <div class="content-container" style="background-color:black">
            <div class="featured-content" style="background-color:black">
         <div class="movie-list-container" style="background-color:black">


            <div class="privacy" style="display:flex; align-items: center;justify-content:center;">
            <a class="privacy-class" onclick="openprivacyForm4()">Privacy 

                <?php 
                    $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['memep'];
                        $x="fas fa-eye";
                        if($wants=="p")
                        {
                            $x="fas fa-user-friends";
                        }
                        else
                        {
                            $x="fas fa-eye-slash";
                        }
                        echo '<i style="margin-left:2px"class="'.$x.'"></i>';
                 ?>
                </a>
                
                <form action="" method="POST"  id="privacy-section4">
                 <input class="privacy-radio" type="radio" name = "public" value="p" checked>Enable</br>
                 <input class="privacy-radio" type="radio" name = "public" value="o">Disable</br>
                 <div style="display: flex;">
                 <input class="privacy-save"  type="submit" name = "save4" value="Save"></br>
                 <a class="privacy-close" onclick="closeprivacyForm4()">close</a>
                     
                 </div>
                 
 


              </form>
              <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">Friends Memes</h1>

            </div>
                
                    <div class="movie-list-wrapper">
                    <div class="movie-list">


                        <?php

                        $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['memep'];
                        if($wants=="p")
                        {




                        
                        $email=$_SESSION['globalemail'];
                        $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['friendmeme'];
                        $str=explode(",", $wants);
                        foreach ($str as $key => $value) {
                            if(strlen($value)<1)
                        {
                        continue;
                        }
                           


                             echo '<div class="movie-list-item">
                            <img class="movie-list-item-img" src="memeImg/'.$value.'" alt="">
                        </div>';

                        }

                        }

                    ?>
                 </div>
                 <i class="fas fa-chevron-right arrow"></i> 
             </div>
              </div>

          </div>

             


             


            </div>
        </div>
    </div>


<div id="people-bar">  
    
    <div class="people-section">
        <div class="people-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi Hasan </p>
       </div>     
    </div>

    <div class="people-section">
        <div class="people-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi Hasan </p>
       </div>     
    </div>


    <div class="people-section">
        <div class="people-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi Hasan </p>
       </div>     
    </div>
    <div class="people-section">
        <div class="people-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi Hasan </p>
       </div>     
    </div>
</div>



<div id="request-bar">  
    
    <div class="people-section">
        <div class="user-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi </p>
           <span>&nbsp you sent friend Request</span>

        </div>

        <div class="request-div">
            <button class="req-btn">Cancel Request</button>
        </div>
        

    </div>

</div>







<script src="app.js"></script>
</body>

</html>