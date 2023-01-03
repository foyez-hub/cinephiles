<?php

include_once("topnav.php");

include_once("sidenav.php");
include 'config.php';

<<<<<<< HEAD
$movienames=array();
if(isset($_SESSION['vv1'])){
    $movienames=$_SESSION['vv1'];
  }
  date_default_timezone_set("Asia/Dhaka");   
  $randsec=date("s");
  $randomNumber1=$randsec%count($movienames);
  $moviename=$movienames[$randomNumber1];

=======
$moviename=$_SESSION['vv'];
>>>>>>> FoyezPlayground


$image;
$des;
$sql = "SELECT * FROM `movie_info` WHERE 1";
$result1 = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result1) ) { 
  
        if($row['movie_name']==$moviename){
            $image=$row['image'];
            $des=$row['synopsis'];
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
    <style>
        
         body{
            background-color: rgb(83, 25, 25);
         }
        .contain1{
            background-color: none;
            width: 700px;
            height: 500px;
            margin-top: 1%;
            margin-left: 30%;
            margin-bottom: 5%;
            margin-right: 5%;

        }

    .pic img{
        
        width: 100%;
        height: 100%;
        border-radius: 5%;
    }

        .button1{
        background-color: gray;
        color: black;
        padding:4px;
        text-decoration: none;
        text-align: center;
        font-weight: bold;
        border-radius: 10%;
        margin-top: -15%;
        margin-left: auto;
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
   

    <div class="contain1">
        
        <div class="pic">
            <img src="img/<?php if(isset($image)){
                echo $image;
                }
                ?>" alt="">

        </div>

        


    </div>


    
<div style="margin-left: 35%">


<?php
    echo '<a href="movieOverview.php?title='.$moviename.'"> <input class="button1" name="Favorite" type="submit" value="Details"> </a>';
?>
    <a href="recomendation.php"> <input class="button1 " type="submit" value="Shuffle"> </a>
</div>

<<<<<<< HEAD
=======
    
      
    <a href="streaming.php?title2=$_SESSION['vv']"> <input class="button1 " type="submit" value="Play"> </a>
         <a href="Group_chat.php?title2=$_SESSION['vv']"> <input class="button1 " type="submit" value="Watch Party"> </a>
>>>>>>> FoyezPlayground

   
    <script src="app.js"></script>
</body>

</html>