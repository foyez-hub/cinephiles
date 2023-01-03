
<?php

include 'config.php';

    
?>





<?php
   include_once("topnav.php");

   $moviename1=$_SESSION['passdata'];


     $sql = "SELECT * FROM `movie_info` WHERE 1";
     $result1 = mysqli_query($conn, $sql);
     $vid;
     while ($row = mysqli_fetch_array($result1) ) { 
  
        if($row['movie_name']==$moviename1){
            
            $vid=$row['movie_clip'];
            $year=$row['release_year'];
        }
   
 
   

}








//add recent movie


    

        $mymail= $_SESSION['globalemail'];
        $sql = "SELECT * FROM `user` WHERE `email`='$mymail'";
        
        $result1 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result1);
        $wants=$row['recent'];
        $str=explode(",", $wants);
        $friend=",";
        $friend .=$moviename1;
        foreach ($str as $key => $value) {
        /*echo $value;*/
        if($value != $moviename1 && strlen($moviename1)>1)
            $friend .= $value;
             $friend .= ",";
        }  
        
        $friend .= ",";

    $sql = "UPDATE `user` SET `recent`='$friend' WHERE `email`='$mymail'";
    $result = mysqli_query($conn, $sql);

//end add recent movie





?>
<?php
  include_once("sidenav.php");
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
            background-color: none;
            width: 85%;
            height: 85%;
            margin-top: 5%;
            margin-left: 13%;
            margin-bottom: 1%;
            margin-right: 1%;
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
                <video id="video1" src="Movie_CLIP/<?php echo $vid;?>" controls unmuted autoplay ></video>

                <h3 id="moviename" class="title">
                <?php if(isset($moviename1)){
                    echo  $moviename1." | ".$year;

                    }
                    ?>
                
                </h3>

            


            </div>
        </div>
    </div>



 

    <script src="app.js"></script>
</body>

</html>