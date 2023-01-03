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


    $row = mysqli_fetch_array($result1);
    $wants=$row['watchlist'];
    $str=explode(",", $wants);
    $friend=",";
    $friend .=$moviename;
    $friend .= ",";
    foreach ($str as $key => $value) {
    if($value != $moviename && strlen($moviename)>1)
        $friend .= $value;
         $friend .= ",";
    }
            

    $sql = "UPDATE `user` SET `watchlist`='$friend'  WHERE `email`='$email'";
  
    $result = mysqli_query($conn, $sql); 
}





if(isset($_GET['titleFavorite'])){

    $moviename=$_GET['titleFavorite'];
    

    $mymail= $_SESSION['globalemail'];
        $sql = "SELECT * FROM `user` WHERE `email`='$mymail'";
        
        $result1 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result1);
        $wants=$row['favorites'];
        $str=explode(",", $wants);
        $friend=",";
        $friend .=$moviename;
        $friend .= ",";
        foreach ($str as $key => $value) {
        /*echo $value;*/
        if($value != $moviename && strlen($moviename)>1)
            $friend .= $value;
             $friend .= ",";
        }  
        

    $sql = "UPDATE `user` SET `favorites`='$friend' WHERE `email`='$mymail'";
    $result = mysqli_query($conn, $sql);

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

<body style="background-color:#151515">



    

    <div class="container" style="background-color:#151515">
        <div class="content-container" style="background-color:#151515">
            <div class="featured-content" style="background-color:#151515">
            <div class="movie-list-container" style="background-color:#151515">
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">All MOVIES</h1>
                <div class="movie-list-wrapper" style="padding-left:1.5% ;  background: #151515"> 

                        <?php
                        $sql="SELECT * FROM `movie_info`";
                        $result1 = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result1) ) 
                        {   
                            $var= $row['movie_name'];
                             $synopsis=$row['synopsis'];
                            $img=$row['image'];
                            $year=$row['release_year'];


                            $star="";

                        $mymail= $_SESSION['globalemail'];
                        $sql1 = "SELECT * FROM `user` WHERE `email`='$mymail'";
                        
                        $result2 = mysqli_query($conn, $sql1);
                        $row1= mysqli_fetch_array($result2);
                        $wants=$row1['favorites'];
                        $str=explode(",", $wants);
                        $friend=0;
                        
                        foreach ($str as $key => $value) {
                        /*echo $value;*/
                            if($value == $var)
                            {   
                               $friend= 1;
                            }
                        } 

                        if($friend==1){
                            $star.="**";
                            echo '<div class="movie-list-item" style="display: inline-block;margin:1.5%">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$var.'</span>
                            <p class="movie-list-item-desc">
                                '.$year.'</p>
                            <a href="movieOverview.php?title='.$var.'"> <input class="movie-list-item-button" name="details" type="submit" value="Details"> </a>
                            <a href="allMoviesList.php?titleself='.$var.'"> <input class="movie-list-item-button1" name="addlist" type="submit" value="ADD"> </a>
                            <button class="movie-list-item-button2" class="btn"><i class="fa fa-star"style="font-size:20px;color:yellow"></i></button>


                            
                       </div>'
                        ;

                        }


                        else{   
                             echo '<div class="movie-list-item" style="display: inline-block;margin:1.5%">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$var.$star.'</span>
                            <p class="movie-list-item-desc">
                                '.$year.'</p>
                            <a href="movieOverview.php?title='.$var.'"> <input class="movie-list-item-button" name="details" type="submit" value="Details"> </a>
                            <a href="allMoviesList.php?titleself='.$var.'"> <input class="movie-list-item-button1" name="addlist" type="submit" value="ADD"> </a>
                            <a href="allMoviesList.php?titleFavorite='.$var.'"> <input class="movie-list-item-button2" name="Favorite" type="submit" value="Favorite"> </a>
                             

                            
                       </div>'
                        ;
                        }
                           
                        }

                    ?>
                 </div> 
             </div>

            </div>
        </div>
    </div>
    
    <script src="app.js"></script>
</body>
