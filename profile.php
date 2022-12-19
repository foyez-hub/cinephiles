
<?php 
include 'config.php';
include_once("topnav.php");
include_once("sidenav.php");
    if(isset($_GET['titleself']))
    {
        
        $usermail=$_GET['titleself'];
        $mymail= $_SESSION['globalemail'];
        $sql = "SELECT * FROM `user` WHERE `email`='$mymail'";
        
        $result1 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result1);
        $wants=$row['friendreq'];
        $str=explode(",", $wants);
        $friend=",";
        foreach ($str as $key => $value) {
        /*echo $value;*/
        if($value != $usermail)
        {   
            $friend .= $value;
             $friend .= ",";
        }
    }
    $sql = "UPDATE `user` SET `friendreq`='$friend' WHERE `email`='$mymail'";
    $result = mysqli_query($conn, $sql);





    $sql = "SELECT * FROM `user` WHERE `email`='$usermail'";
    $result1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result1);
    $wants=$row['sentreq'];
    $str=explode(",", $wants);
    $friend=",";
    foreach ($str as $key => $value) {
       if($value!=$mymail)
        {$friend .= $value;
            $friend .= ",";
        }
    }
    $sql = "UPDATE `user` SET `sentreq`='$friend' WHERE `email`='$usermail'";
    $result = mysqli_query($conn, $sql);
        
    

    $sql = "SELECT * FROM `user` WHERE `email`='$usermail'";
    $result1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result1);
    $wants=$row['friendlist'];
    $str=explode(",", $wants);
    $friend=",";
    foreach ($str as $key => $value) {
       $friend .= $value;
       $friend .= ",";
    }
    $friend .= $mymail;
    $sql = "UPDATE `user` SET `sentreq`='$friend' WHERE `email`='$usermail'";
    $result = mysqli_query($conn, $sql);
    


    $sql = "SELECT * FROM `user` WHERE `email`='$mymail'";
    $result1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result1);
    $wants=$row['friendlist'];
    $str=explode(",", $wants);
    $friend=",";
    foreach ($str as $key => $value) {
       $friend .= $value;
       $friend .= ",";
    }
    $friend .= $usermail;
    $sql = "UPDATE `user` SET `sentreq`='$friend' WHERE `email`='$mymail'";
    $result = mysqli_query($conn, $sql);




    }












    if(isset($_POST['cancelsr'])){

    $email=$_POST['cancelsr'];
   
    $sql = "SELECT * FROM `user` WHERE `email`='$email'";
    $mymail= $_SESSION['globalemail'];
    $result1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result1);
    $wants=$row['friendreq'];
    $str=explode(",", $wants);
    $friend=",";
    foreach ($str as $key => $value) {
       /*echo $value;*/
       if($value!=$mymail)
        {$friend .= $value;
            $friend .= ",";
        }
    }
    $sql = "UPDATE `user` SET `friendreq`='$friend' WHERE `email`='$email'";
    $result = mysqli_query($conn, $sql);





    $sql = "SELECT * FROM `user` WHERE `email`='$mymail'";
    $result1 = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result1);
    $wants=$row['sentreq'];
    $str=explode(",", $wants);
    $friend=",";
    foreach ($str as $key => $value) {
       if($value!=$email)
        {$friend .= $value;
            $friend .= ",";
        }
    }
    $sql = "UPDATE `user` SET `sentreq`='$friend' WHERE `email`='$mymail'";
    $result = mysqli_query($conn, $sql);
}

    


 /*echo "           ".$_SESSION['Glousername'];*/

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
       border-radius: 8px;
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



    /* .container1{
            margin-left: 20px ;
            margin-top: 20px;
            display: grid;
            grid-gap: 1rem;
            background: black;
            grid-template-areas: 
            "section  aside footer"
            ;
        } */

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


    </style>



</head>

<body>
    
    


    <div class="container">
        <div class="content-container">
            <div class="featured-content">

               <div class="wrapper">
                   
                   <div class="cover">
                    <img src="img/sea.jpg" alt="Give Cover Photo">  
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
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">My List</h1>
                    <div class="movie-list-wrapper">
                    <div class="movie-list">


                         
   <?php


                        
                        $email=$_SESSION['globalemail'];
                        $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['recommended'];
                        $str=explode(",", $wants);
                        foreach ($str as $key => $value) {
                             /*echo $value;*/
                        if(strlen($value)<1)
                        {
                            continue;
                        }

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
                            <button class="movie-list-item-button">Watch</button>
                        </div>';

                        }

                    ?>
                 </div>
                 <i class="fas fa-chevron-right arrow"></i> 
             </div>
              </div>

              <div class="movie-list-container" style="background-color:black">
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">Friend Request</h1>
                    <div class="movie-list-wrapper">
                    <div class="movie-list">


                      
                         <?php


                        
                        $email=$_SESSION['globalemail'];
                        $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['friendreq'];
                        $str=explode(",", $wants);
                        foreach ($str as $key => $value) {

                        if(strlen($value) <1 )
                        {
                            continue;
                        }

                        $sql = "SELECT * FROM `user` WHERE `email`='$value'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $img= $row['image'];
                        $name= $row['name'];
                        

                             echo '<div class="movie-list-item" style="display: inline-block;margin:1.5%">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$name.'</span>
                            
                            <a href="view_profile.php?title='.$value.'"> <input class="movie-list-item-button" type="submit" value="View Profile"> </a>
                            <a href="profile.php?titleself='.$value.'"> <input class="movie-list-item-button1" name="addfriend" type="submit" value="Accept Request"> </a>

                            
                       </div>';
                        
                        }

                    ?>
                 </div>
                 <i class="fas fa-chevron-right arrow"></i> 
             </div>
              </div>

             
            <div class="movie-list-container" style="background-color:black">
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">Sent Request</h1>
                    <div class="movie-list-wrapper">
                    <div class="movie-list">


                      
                         <?php


                        
                        $email=$_SESSION['globalemail'];
                        $sql = "SELECT * FROM `user` WHERE `email`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $wants=$row['sentreq'];
                        $str=explode(",", $wants);
                        foreach ($str as $key => $value) {

                        if(strlen($value) <1 )
                        {
                            continue;
                        }

                        $sql = "SELECT * FROM `user` WHERE `email`='$value'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $img= $row['image'];
                        $name= $row['name'];
                        

                             echo '<div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$name.'</span>
                            <a href="view_profile.php?title='.$value.'"> <input class="movie-list-item-button" type="submit" value="View Profile"> </a>

                        <form action="" method="POST">
                        <div class="buttons">

                       

                        <input name="cancelsr" class="but1"  type="submit" value="'.$value.'">

                        </div>

                        </form>


                        </div>';
                        
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







    <script src="app.js"></script>
</body>

</html>