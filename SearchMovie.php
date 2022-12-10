<?php 
  
    include_once("topnav.php");
    include_once("sidenav.php");
    $ar=$_SESSION['search_result'];

    // foreach ($ar as $key => $value) {
    //      echo $value;
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
                <h1 style="text-align:center" class="movie-list-title">TRENDY</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">


                        <?php
                         
                         foreach ($ar as $key => $value)
                         {
                            // echo $value;
                            $sql = "SELECT * FROM `movie_info` WHERE 'movie_name'='$value'";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result) ) { 
                            echo $row['movie_name'];
                            $var=$row['movie_name'];
                            $var2=$row['image'];
                            $var3=$row['synopsis'];

                        echo '<div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/$var2" alt="">
                            <span class="movie-list-item-title">'.$var.'</span>
                            <p class="movie-list-item-desc">
                                "$var3"</p>
                            <button class="movie-list-item-button">Watch</button>
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