

<?php
session_start();
include 'config.php';
$moviename=$_GET['title'];


$image;
$des;
$relese_year;
$genres;
$sql = "SELECT * FROM `movie_info` WHERE 1";
$result1 = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result1) ) { 
  
        if($row['movie_name']==$moviename){
            $image=$row['image'];
            $des=$row['synopsis'];
            $relese_year=$row['release_year'];
            $genres=$row['genres'];

        }
   
 
   

}

    
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Movie Overview</title>
    <style>
        *margin{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Poppins', sans-serif;

        }

        .overviewMain{
            width: 100%;
            height:100vh;
            background-image: linear-gradient(rgba(12,3,51,0.3),rgba(12,3,51,0.3));
            position: relative;
            padding: 0 0;
            display: flex;
            align-items: center;
            justify-content: center;

        }
        nav{
            width:100%;
            position:absolute;
            top:0;
            left:0;
            padding:0 0;
            display: flex;
            align-items: center;
            justify-content: space-between;

       }

       nav ul li{
        list-style:none;
        display: inline-block;
        margin-left: -8%;
       }
       nav ul a h1{
        list-style:none;
        display: inline-block;
        margin-top: 3px;
        margin-left: 20px;
        color: #fff;
        font-size: 40px;

       }
      
       nav ul li a{
        color: #fff;

       }
       .content{
        width: 80%;
        text-align: center;

       }
      .content h1, h2, p{
        color: #fff;
        }
      .back-video{
        position: absolute; 
        right:0;
        bottom: 0;
        z-index: -1;
      } 
@media (min-aspect-ratio: 16/9) {
        .back-video{
            width: 100%;
            height: auto;
        }
  }
@media (max-aspect-ratio: 16/9) {
    .back-video{
            width: auto;
            height: 100%;
        }
}



.button1{
        background-color: gray;
        color: black;
        padding:4px;
        text-decoration: none;
        text-align: center;
        font-weight: bold;
        border-radius: 10%;
        margin-left: 5%;
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
    <div class="overviewMain">
       <video autoplay loop umuted plays-inline class="back-video">
        <!-- <source src="vid/Avatar.mp4" type="video/mp4"> -->
        <source src="vid/Avatar.mp4" type="video/mp4">
       </video>
       <nav>
        <ul>
            <li><a href="#"><i class="fa fa-arrow-left fa-2x " aria-hidden="true"></i></a></li>
            <a href="indexlogin.php">
                <h1>CINEPHILES</h1>
            </a>
        </ul>
       </nav>
       
       <div class="content">
        <h1><?php if(isset($moviename)){
                echo  "Movie Name: ".$moviename;

                }
                ?>
        </h1>
        <h2><?php if(isset($genres)){
                echo "Genres: ".$genres;
                }
                ?>
        </h2>
        <h2><?php if(isset($relese_year)){
                echo "Release Year: ".$relese_year;
                }
                ?>
        </h2>
        <p><?php if(isset($des)){
                echo  $des;
                }
                ?>
        </p>

        <?php 
        $_SESSION['passdata'] = $moviename;
        ?>
        

         <a href="streaming.php?title2=$moviename"> <input class="button1 " type="submit" value="Play"> </a>
         <a href="Group_chat.php?title2=$moviename"> <input class="button1 " type="submit" value="Watch Party"> </a>

    
        
       </div>
    </div>


    <script src="app.js"></script>
    
</body>
</html>




















