
   <?php
        include_once("topnav.php");
    ?> 
    
    <?php

      include_once("sidenav.php");
    ?>
<?php 

include 'config.php';

$myemail=$_SESSION['globalemail'];


if(isset($_GET['watchpartyend'])){


        $mname=$_GET['watchpartyend'];



    $sql = "DELETE FROM `watchparty` WHERE `ownerEmail`='$email'";
    $result = mysqli_query($conn, $sql);
     
    $sqlchat = "DELETE FROM `chats` WHERE `moviename`='$mname'";
  
    $resultchar = mysqli_query($conn, $sqlchat); 

   

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
</head>

<body style="background-color:gray">

 


    

<div class="container">
        <div class="content-container">
            <div class="featured-content"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
            <div class="movie-list-container">
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">My Watch Party</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                       
                         


                    <?php

                        $sql="SELECT * FROM `watchparty` WHERE `ownerEmail`='$email'";
                        $result1 = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result1) ) 
                        {   
                            $moviename= $row['moviename'];
                           
                            

                            $sql="SELECT * FROM `movie_info` WHERE `movie_name`='$moviename'";
                            $result2 = mysqli_query($conn, $sql);
                            $row1 = mysqli_fetch_array($result2);
                                
                                 $img=$row1['image'];
                                 $year=$row1['release_year'];


                             
                             echo '
                             <div class="movie-list-item" style="display: inline-block;margin:1.5%">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span  class="movie-list-item-title">'.$moviename.'</span>
                            <input style="display:none" name="mname" type="text " value="'.$moviename.'">
                             <a href="watchParty.php?watchpartyend='.$moviename.'"> <input style="background-color:red" class="movie-list-item-button" name="JOIN" type="submit" value="END"> </a>
                             <a href="Group_chat.php?watchparty='.$moviename.'"> <input class="movie-list-item-button2" name="JOIN" type="submit" value="JOIN"> </a>

                             </a>
                       </div>
                       '
                       
                        ;
                           
                        }

                    ?>

                    </div>

                    <i class="fas fa-chevron-right arrow"></i>

                </div>
            </div>






            <div class="movie-list-container">
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">Friend Watch Party</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                       
                         


                    <?php

                        $sql="SELECT * FROM `user` WHERE `email`='$myemail'";
                        $result1 = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result1);
                        $friendlist=$row['friendlist'];
                        $list = explode(",", $friendlist);
                        foreach ($list as $friendemail) {

                           $sqlfriend="SELECT * FROM `watchparty` WHERE `ownerEmail`='$friendemail'";
                           $resultfriend = mysqli_query($conn, $sqlfriend);

                           while ($rowfriend = mysqli_fetch_array($resultfriend) ) { 
                                  
                       

                              $movienamefriend=$rowfriend['moviename'];


                              $sqlmovieinfo="SELECT * FROM `movie_info` WHERE `movie_name`='$movienamefriend'";
                              $resultmovieinfo = mysqli_query($conn, $sqlmovieinfo);
                              $rowmovieinfo = mysqli_fetch_array($resultmovieinfo);
                              $movieimg= $rowmovieinfo['image'];

                              $sqlfriendname="SELECT * FROM `user` WHERE `email`='$friendemail'";
                              $resultfriendname = mysqli_query($conn, $sqlfriendname);
                              $rowfriendname= mysqli_fetch_array($resultfriendname);
                              $fiendname= $rowfriendname['name'];








                             echo '<div class="movie-list-item" style="display: inline-block;margin:1.5%">
                            <img class="movie-list-item-img" src="img/'.$movieimg.'" alt="">
                            <span class="movie-list-item-title">'.$movienamefriend.'</span>
                            <p class="movie-list-item-desc">Created By: '.$fiendname.'

                                </p>
                            <a href="Group_chat.php?watchparty='.$movienamefriend.'"> <input class="movie-list-item-button" name="JOIN" type="submit" value="JOIN"> </a>

                       </div>' ;


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



   
    
    <script src="app.js"></script>
</body>
