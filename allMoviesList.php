<?php
        include_once("topnav.php");
    ?> 
    
    <?php

      include_once("sidenav.php");
    ?>


<?php 

include 'config.php';
$email=$_SESSION['globalemail'];


if(isset($_GET['titleself'])){

    $moviename=$_GET['titleself'];
    $sql1 = "SELECT * FROM `user` WHERE `email`='$email'";
    $result1 = mysqli_query($conn, $sql1);
    if ($result1->num_rows > 0) {

      $row = mysqli_fetch_assoc($result1);
      $my_list=$row['my_list'];
      $tem=",";
      $tem.=$my_list;
      $tem.=",";
      $tem.=$moviename;
      

    $sql = "UPDATE `user` SET `my_list`='$tem'  WHERE `email`='$email'";
  
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



    

    <div class="container" style="background-color:gray">
        <div class="content-container" style="background-color:gray">
            <div class="featured-content" style="background-color:gray">
            <div class="movie-list-container" style="background-color:gray">
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">All MOVIES</h1>
                <div class="movie-list-wrapper" style="padding-left:1.5% ;  background: gray"> 

                        <?php
                        $sql="SELECT * FROM `movie_info`";
                        $result1 = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result1) ) 
                        {   
                            $var= $row['movie_name'];
                             $synopsis=$row['synopsis'];
                            $img=$row['image'];
                            $year=$row['release_year'];

                             
                             echo '<div class="movie-list-item" style="display: inline-block;margin:1.5%">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$var.'</span>
                            <p class="movie-list-item-desc">
                                '.$year.'</p>
                            <a href="movieOverview.php?title='.$var.'"> <input class="movie-list-item-button" name="details" type="submit" value="Details"> </a>
                            <a href="allMoviesList.php?titleself='.$var.'"> <input class="movie-list-item-button1" name="addlist" type="submit" value="ADD"> </a>

                            
                       </div>'
                        ;
                           
                        }

                    ?>
                 </div> 
             </div>

            </div>
        </div>
    </div>
    
    <script src="app.js"></script>
</body>
