
   <?php
        include_once("topnav.php");
    ?> 
    
    <?php

      include_once("sidenav.php");
    ?>
<?php 

include 'config.php';

$email=$_SESSION['globalemail'];

if( assert($_SESSION['passdata']) ){
  $moviename;
  $moviename=$_SESSION['passdata'];


  $sql = "SELECT * FROM `watchparty` WHERE `ownerEmail`='$email'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows <=0) {

    
    $sql = "INSERT INTO `watchparty`(`ownerEmail`, `moviename`) VALUES ('$email','$moviename')";
  
    $result = mysqli_query($conn, $sql); 


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
</head>

<body style="background-color:gray">

 


    

    



    <div class="movie-list-container">
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">My Watch Party</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                       
                         


                    <?php
                        $sql="SELECT * FROM `watchparty` WHERE 1";
                        $result1 = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result1) ) 
                        {   
                            $moviename= $row['moviename'];
                           
                            

                            $sql="SELECT * FROM `movie_info` WHERE `movie_name`='$moviename'";
                            $result2 = mysqli_query($conn, $sql);
                            $row1 = mysqli_fetch_array($result2);
                                
                                 $img=$row1['image'];
                                 $year=$row1['release_year'];


                             
                             echo '<div class="movie-list-item" style="display: inline-block;margin:1.5%">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$moviename.'</span>

                            <a href="Group_chat.php?watchparty='.$moviename.'"> <input class="movie-list-item-button" name="JOIN" type="submit" value="JOIN"> </a>
                       </div>'
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
                        $sql="SELECT * FROM `watchparty` WHERE 1";
                        $result1 = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result1) ) 
                        {   
                            $moviename= $row['moviename'];
                           
                            

                            $sql="SELECT * FROM `movie_info` WHERE `movie_name`='$moviename'";
                            $result2 = mysqli_query($conn, $sql);
                            $row1 = mysqli_fetch_array($result2);
                                
                                 $img=$row1['image'];
                                 $year=$row1['release_year'];


                             
                             echo '<div class="movie-list-item" style="display: inline-block;margin:1.5%">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$moviename.'</span>
                            <p class="movie-list-item-desc">
                                </p>
                            <a href="Group_chat.php?watchparty='.$moviename.'"> <input class="movie-list-item-button" name="JOIN" type="submit" value="JOIN"> </a>
                            <a href="movieOverview.php?title='.$var.'"> <input class="movie-list-item-button1" name="details" type="submit" value="ADD"> </a>

                       </div>'
                        ;
                           
                        }

                    ?>

                    </div>

                    <i class="fas fa-chevron-right arrow"></i>

                </div>
            </div>


    
    <script src="app.js"></script>
</body>
