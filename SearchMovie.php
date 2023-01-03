<?php 
  
    include_once("topnav.php");
    include_once("sidenav.php");
    $ar=$_SESSION['search_result'];
    $ar2=$_SESSION['search_result2'];






                    //        foreach ($ar as $key => $value) {
        
                    //     $sql = "SELECT * FROM `movie_info` WHERE `movie_name`='$value'";
                    //     $result1 = mysqli_query($conn, $sql);
                    //     while ($row = mysqli_fetch_array($result1) ) { 
                    //         $synopsis=$row['synopsis'];
                    //         $img=$row['image'];

                    //         echo $synopsis."\n";
                    
                    //     }

                    // }




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
    <title>Cinephiles</title>
    <style>

         body{
            background-color: rgb(83, 25, 25);
         }
      
    </style>



</head>

<body>
 <div class="container">
        <div class="content-container">
            <div class="featured-content"style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">

                   <div class="movie-list-container">
                <h1 style="text-align:center" class="movie-list-title">Movies</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">


                        <?php


                        foreach ($ar as $key => $value) {
        
                        $sql = "SELECT * FROM `movie_info` WHERE `movie_name`='$value'";
                        $result1 = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result1) ) { 
                            $synopsis=$row['synopsis'];
                            $img=$row['image'];

                            // echo $synopsis."\n";

                             echo '<div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$value.'</span>
                            
                               <a href="movieOverview.php?title='.$value.'"> <input class="movie-list-item-button" name="details" type="submit" value="Details"> </a>
                        </div>';

                    
                
                    
                        }

                    }
                         
                      

                       

                    ?>

                      
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>


            <!-- /*search friend -->
            <div class="movie-list-container">
                <h1 style="text-align:center" class="movie-list-title">Peoples</h1>
            <div class="movie-list-wrapper">
                    <div class="movie-list">


                        <?php


                        foreach ($ar2 as $key => $value) {
        
                        $sql = "SELECT * FROM `user` WHERE `email`='$value'";
                        $result1 = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result1) ) { 

                            $img=$row['image'];
                            $name=$row['name'];

                            // echo $synopsis."\n";


                             echo '<div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$name.'</span>
                            
                            <a href="view_profile.php?title='.$value.'"> <input class="movie-list-item-button" type="submit" value="View Profile"> </a>     
                            
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



   
    <script src="app.js"></script>
</body>

</html>