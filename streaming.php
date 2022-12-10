<?php
   include_once("topnav.php");
?>
<?php
  include_once("sidenav.php");
?>

<?php 
include 'config.php';

if (isset($_POST['sub'])) {
    

    if(isset($_POST["dark"])){

            $sql = "SELECT * FROM `movie_info` WHERE `category`='DARK'";
           $result1 = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result1) ) { 
              
              $var=$row['movie_name'];
              array_push($movies,$var);

        }


    }
    else if(isset($_POST["light"])){


        $sql = "SELECT * FROM `movie_info` WHERE `category`='LIGHT'";
        $result1 = mysqli_query($conn, $sql);
       while ($row = mysqli_fetch_array($result1) ) { 
           
           $var=$row['movie_name'];
           array_push($movies,$var);

     }


    }


    
    



}






    






  ?>






<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>CINEPHILES</title>
    <style>
        body {
            background-color: rgb(83, 25, 25);
        }

        .continer-Streaming {
            display: flex;
            justify-content: space-between;
            background-color: black;
            width: 60%;
            height: 70%;
            margin-top: 5%;
            margin-left: 20%;
            margin-bottom: 1%;
            margin-right: 5%;
            border-radius: 2%;

        }

        .video video {
            width: 100%;
            height: 100%;
            position: sticky;
        }

        .title {
            margin-top: 1%;
            color: white;

        }
    </style>
</head>

<body>






    <div class="continer-Streaming">
        <div class="main-video">
            <div class="video">
                <video src="vid/Avatar.mp4" controls unmuted autoplay></video>
                <h3 class="title"></h3>

            </div>
        </div>
    </div>




    <script src="app.js"></script>
</body>

</html>