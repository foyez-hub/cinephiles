

<?php


    
        include 'config.php';
        include_once("topnav.php");
        include_once("sidenav.php");
        $name=$_SESSION['Glousername'];
        $email=$_SESSION['globalemail'];
<<<<<<< HEAD


        $sql = "SELECT * FROM `user` WHERE `email`= '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        
        $userimg=$row['image'];

        $reimag;
        
       //meme post
        if (isset($_POST['submit'])) {

            if (isset($_POST['myfile'])){
=======
        $sql = "SELECT * FROM `user` WHERE `email`= '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        
        $userimg=$row['image'];
        $reimag;


        $reimag;
        $email=$_SESSION['globalemail'];
        

        if (isset($_POST['submit'])) {

            if (isset($_POST['myfile'])){

               $reimag=$_POST['myfile'];
               $sql = "INSERT INTO `memeinfo`(`postOwner`, `PostImg`, `postOwnerImg`) VALUES ('$name','$reimag','$userimg')";
               $result = mysqli_query($conn, $sql); 
>>>>>>> FoyezPlayground

               $reimag=$_POST['myfile'];
               if(strlen($reimag)>2)
               {
               $sql = "INSERT INTO `memeinfo`(`PostImg`,`email`) VALUES ('$reimag','$email')";
               $result = mysqli_query($conn, $sql); 
               }
            }

        }


        // vote meme

if (isset($_POST['outpost'])) {
            
         
    if (isset($_POST['uiu'])) {

            $memeid=$_POST['uiu'];
           


            $postlike=0;
            $sql = "SELECT * FROM `memeinfo` WHERE `PostId`='$memeid'" ;
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {

                $row = mysqli_fetch_array($result);
                $postlike=$row['PostLike'];



                $sqlck = "SELECT `postid`, `postOwnerEmail` FROM `votetracking` WHERE `postid`='$memeid' and `postOwnerEmail`='$email'" ;
                $resultck = mysqli_query($conn, $sqlck);
    
                if ($resultck->num_rows <=0) {

               //insert into votetracking database
                $sqlvote = "INSERT INTO `votetracking`(`postid`, `postOwnerEmail`) VALUES ('$memeid','$email')";
                $resultvote = mysqli_query($conn, $sqlvote); 
               //update like count in memeinfo database
               $postlike++;
               $sql = "UPDATE `memeinfo` SET `PostLike`='$postlike' WHERE `PostId`='$memeid'" ;
               $result = mysqli_query($conn, $sql);
               
                }

                else{
                    
                    //delete from votetracking database
                    $sqlvote = "DELETE FROM `votetracking` WHERE `postid`='$memeid' AND `postOwnerEmail`='$email'";
                    $resultvote = mysqli_query($conn, $sqlvote); 
                   //update like count in memeinfo database
                   $postlike--;

                   $sql = "UPDATE `memeinfo` SET `PostLike`='$postlike' WHERE `PostId`='$memeid'" ;
                   $result = mysqli_query($conn, $sql);
                }




             }
             

            
         
           
            
            
        }
            

}

<<<<<<< HEAD
//Most funny

$mostOmwerimg;
$mostOmwername="-1";
$mostFunnymemeimg;
$Mostvote;
$sql = "SELECT * FROM `memeinfo` ORDER BY `PostLike` DESC";

$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {


    $row = mysqli_fetch_array($result);
    $mostowneremail=$row['email'];

    $sqlinfo = "SELECT * FROM `user` WHERE `email`='$mostowneremail'";

    $resultinfo = mysqli_query($conn, $sqlinfo);
    if ($resultinfo->num_rows > 0) {
        $rowinfo = mysqli_fetch_array($resultinfo);

        $mostOmwerimg=$rowinfo['image'];
        $mostOmwername=$rowinfo['name'];
    }



    $mostFunnymemeimg=$row['PostImg'];
    $Mostvote=$row['PostLike'];



    //    winner select

          date_default_timezone_set("Asia/Dhaka");
          $curhour=date("h");
          
          $curmin=date("i");
          $cursatues=date("a");
          $curtime=$curhour.",".$curmin.",".$cursatues;
          if($curmin%3==0){



           $sqlwinner = "INSERT INTO `winners`( `email`) VALUES ('$mostowneremail')";
           $resultwinner = mysqli_query($conn, $sqlwinner);

           $sqlemptymemes = "DELETE FROM `memeinfo` WHERE 1";
           $resultemptymemes = mysqli_query($conn, $sqlemptymemes);
           $sqlemptyvotes = "DELETE  FROM `votetracking` WHERE 1";
           $resultemptyvotes = mysqli_query($conn, $sqlemptyvotes);

          }

}



=======

        if (isset($_POST['outpost'])) {
         
        if (isset($_POST['uiu'])) {

            $memeid=$_POST['uiu'];
            $postlike=0;
            $sql = "SELECT * FROM `memeinfo` WHERE `PostId`='$memeid'" ;
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {

                $row = mysqli_fetch_array($result);
                $postlike=$row['PostLike'];



                $sqlck = "SELECT `postid`, `postOwnerEmail` FROM `votetracking` WHERE `postid`='$memeid' and `postOwnerEmail`='$email'" ;
                $resultck = mysqli_query($conn, $sqlck);
    
                if ($resultck->num_rows <=0) {
    

               //insert into votetracking database
                $sqlvote = "INSERT INTO `votetracking`(`postid`, `postOwnerEmail`) VALUES ('$memeid','$email')";
                $resultvote = mysqli_query($conn, $sqlvote); 
               //update like count in memeinfo database
               $postlike++;
               $sql = "UPDATE `memeinfo` SET `PostLike`='$postlike' WHERE `PostId`='$memeid'" ;
               $result = mysqli_query($conn, $sql);
               
                }

                else{
                        //delete from votetracking database


                    $sqlvote = "DELETE FROM `votetracking` WHERE `postid`='$memeid' AND `postOwnerEmail`='$email'";
                    $resultvote = mysqli_query($conn, $sqlvote); 
                   //update like count in memeinfo database
                   $postlike--;

                   $sql = "UPDATE `memeinfo` SET `PostLike`='$postlike' WHERE `PostId`='$memeid'" ;
                   $result = mysqli_query($conn, $sql);
                   



                }
>>>>>>> FoyezPlayground




<<<<<<< HEAD
//meme share

if (isset($_POST['share'])) {
            
         
    if (isset($_POST['uiu'])) {

        
        $id=$_POST['uiu'];
           
        $sql = "SELECT * FROM `memeinfo` WHERE `PostId`='$id'" ;
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {

            $row = mysqli_fetch_array($result);
           
            $memimg=$row['PostImg'];

                 
          $sqlfriends = "SELECT * FROM `user` WHERE `email`='$email'" ;
          $resultfriends  = mysqli_query($conn, $sqlfriends);
          if($rowfriends  = mysqli_fetch_array($resultfriends)){

          $allfriend=$rowfriends['friendlist'];

          $str=explode(",", $allfriend);
          foreach ($str as $key => $value) {



            $sqlfriendsmeme = "SELECT * FROM `user` WHERE `email`='$value'" ;
            $resultfriendsmeme  = mysqli_query($conn, $sqlfriendsmeme);
            if($rowfriendsmeme  = mysqli_fetch_array($resultfriendsmeme)){

                
                  $memes=$rowfriendsmeme['friendmeme'];


                
                   $strmeme=explode(",", $memes);
                   $shareimg=$memimg;
                   $shareimg.=",";
                   foreach ($strmeme as $key => $valuememe) {
                    if($valuememe!=$memimg&&strlen($valuememe)>2){



                    $shareimg.=$valuememe;
                    $shareimg.=",";


                    }



                   }

                   $sqlup = "UPDATE `user` SET `friendmeme`='$shareimg' where `email`='$value'";
                   $resultup = mysqli_query($conn, $sqlup);


                       
            }
=======
             }
             

            
         
           
            

        }
            

        }


     
>>>>>>> FoyezPlayground





          
          }

          



        }
       
    }


 }

    

}



   

//meme share end
     



    ?> 
    
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>CINEPHILES/Profile</title>

    <style>
        *margin{
           box-sizing: border-box; 
        }

    .con{
        margin-left: 50px;
        display: flex;
        justify-content: space-between;
        padding: 13px 5%;


    }
    .left-sidebar{
        background :blanchedalmond;
        flex-basis:25%;
        position: sticky;
        top: 70px;
        align-self: flex-start;
        

    }
    .right-sidebar{
        background :blanchedalmond;
        flex-basis:25%;
        position: sticky;
        top: 70px;
        align-self: flex-start;
        padding: 20px;
        border-radius: 4px;
        color: #626262;

    }
    .main-content{
        flex-basis:47%;

    }

    .sidebar-title{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;

    }
    .sidebar-title h4{
        font-weight: 600;
        font-size: 16px;  
    }



 .btn {
  background-color: gray;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}


.btn:hover {
  background-color: rgb(145, 160, 205);
}


.list{
    display: flex;
    font-size: 14px;
    margin-bottom: 20px;
}
.date{
    border-radius: 10px;
    height: 65px;
    width: 65px;
    margin-right: 15px;
    padding-top: 10px;
    text-align: center;
    position: relative;
    overflow:hidden;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    
}
.date span{
    position:absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background:#1876f2;
    color: #fff;
    font-size: 10px;
    padding: 4px 0;

}

.list p{
    font-size: 12px;
    


}
.list a{
    font-size:12px;
    text-decoration: none;
    color: #1876f2;
}
.peopleProfile{
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}
.peopleProfile .winner img{
    width: 40px;
    height: 40px;
    border-radius: 50%;

}
    
.peopleProfile .winner {
    width: 40px;
    border-radius: 50%;
    margin-right: 15px;
    cursor: pointer;


}

.write-post-container{
    width: 100%;
    background:rgb(247, 246, 244);
    border-radius: 6px;
    padding: 20px;
    color: #626262;

}

.user-profile{
    display: flex;
    align-items: center;

}



.user-profile img{
    width: 45px;
    height: 45px;
    border-radius: 50%;
    margin-right: 10px;

}

.user-profile {
    margin-bottom: -5px;
    font-weight: 500;
    color: #626262;
    cursor: pointer;

}
.user-profile span{
    font-size: 13px;
    color: #9a9a9a;

}
.user-profile small{
    display: flex;
    align-items: center;

}

.post-input-container{
    padding-left: 55px;
    padding-top: 20px;

}
.post-input-container textarea{
  width: 100%;
  border:0;
  outline: 0;
  border-bottom: 1px solid #ccc;
  background: transparent;
  resize: none;

}
.add-post-links{
    display: flex;
    margin-top: 10px;

}

.add-post-links a{
    text-decoration: none;
    display: flex;
    align-items: center;
    color: #626262;
    margin-right: 30px;
    font-size: 13px;
}


.add-post-links img{
    width: 20px;
    margin-right: 10px;
    cursor: pointer;
}


.post-container{
    width: 100%;
    background:#fff;
    border-radius: 6px;
    padding: 20px;
    color: #626262;
    margin:20px 0;


}

.post-img{
    width: 100%;
    border-radius: 4px;
    margin-top: 10px;
    margin-bottom: 5px;
}

.post-row{
    display: flex;
    align-items: center;
    justify-content: space-between;
}


.like-icon div img{
    width: 30px;
    margin-right: 10px;
    cursor: pointer;
}
.most-vote-section{
    margin-top:20%;
    margin-bottom:20%;
    padding:5%;
    
    
}


    </style>



</head>

<<<<<<< HEAD
<body style=" background:#626262 ;background-image: url('memeImg/mbb.jpg');background-attachment: fixed ">
=======
<body style=" background:#626262 ">
>>>>>>> FoyezPlayground




    


  <div class="con" >
      <div style="background-color: #40E0D0;" class="left-sidebar">

      <p style="background-color:blue;text-align: center;font-size:140%" > Click on the image to download it</p> 

        <a href="memeImg/realimg.jpg" download><img style=" width: 80%;height: 80%;" src="memeImg/realimg.jpg" alt=""></a>



        <div style="color:white ; font-size:40px ;  text-align: center ;background-color: DodgerBlue" class="most-vote-section">
      <?php
        if($mostOmwername!="-1"){
        echo '<span style="color:white ; font-size:20px ;  text-align: center">MOST FUNNY  </span>


        <div style="background-color: white;" class="user-profile">
        <img src="img/'.$mostOmwerimg.'" > 
           <span style="color:black ; font-size:20px">'.$mostOmwername.'</span>
        
        </div>

        <div style="background-color: white;"><img   src="memeImg/'.$mostFunnymemeimg.'"  class="post-img" ></div>';
        
        }
         
         ?>

        </div>

      </div>


      
      


      <div style="  margin-left:5px; margin-top:8px; margin-right:47px" class="main-content">
         <div class="write-post-container">
            <div class="user-profile">
                <!-- <img src="profileimg/p2.jfif"> -->
                <div>
                    <!-- <p><?php if(isset($name)) echo $name; ?></p> -->

                </div>

            </div>
            <div class=" post-input-container">
                <p>Post your Meme</p>
                <div class="add-post-links">
                    <form action="" method="POST">
                        <a href="#"> <img src="img/photo.png" >
                            <input  style="border-radius:5px" type="file" id="myfile" name="myfile">

                        </a><br>
                        
                        <input name="submit" style=" border-radius: 5px; cursor: pointer; margin-left:70px; background-color: rgb(131, 108, 193); "type="submit">

                      </form>
                </div>
            </div>
         </div>

          
          <?php

$sql="SELECT * FROM `memeinfo` ORDER BY `Time`  DESC";
$result1 = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result1) ) 
{   
  



      $Time= $row['Time'];
      $PostImg= $row['PostImg'];
      $PostLike= $row['PostLike'];
      $postid=$row['PostId'];
      $postemail=$row['email'];
  
      $sqlinfo = "SELECT * FROM `user` WHERE `email`='$postemail'";
      $resultinfo = mysqli_query($conn, $sqlinfo);
      if ($resultinfo->num_rows > 0) {
          $rowinfo = mysqli_fetch_array($resultinfo);
  
          $postOwnerImg=$rowinfo['image'];
          $postOwner=$rowinfo['name'];
      }



     

      $sqlck = "SELECT * FROM `votetracking` WHERE `postid`='$postid' and `postOwnerEmail`='$email'" ;
      $resultck = mysqli_query($conn, $sqlck);
      $isvote="Unvote";

      if ($resultck->num_rows <=0) {
        $isvote="Vote";

      }
      

        echo '<form action="" method="POST">
        <div class="post-container">
            <div class="user-profile">
                <img src="img/'.$postOwnerImg.'">
                <div>
                <span style="color:black ; font-size:20px"> '.$postOwner.'| </span>
                
                    <span  style="color:black" > '.$Time.' </span>

                    <input  style="display:none" name="uiu" value="'.$postid.'">

                </div>
            </div>


            <img src="memeImg/'.$PostImg.'"  class="post-img" >

            <div class="post-row">

                <div class="like-icon">
                    <div>
<<<<<<< HEAD
                    <input class="featured-button form-button" id="unvote" name="outpost" type="submit" value="'.$isvote.'">
                         '.$PostLike.'
                         <input style="background-color: #10e7c5" class="featured-button form-button" id="unvote" name="share" type="submit" value="Share">
=======
                    <input class="featured-button form-button" id="'.$postid.'" name="outpost" type="submit" value="Vote">
                         '.$PostLike.'
>>>>>>> FoyezPlayground
                    </div>
                </div>

            </div>
    
          </div>
          </form>';
    

}
          ?>

      

      </div>
      





      <div class="right-sidebar">
        <div class="sidebar-title">

<<<<<<< HEAD


            <h4 id="uiu"> Winner list </h4>
            
=======
            <h4> Winner list </h4>
>>>>>>> FoyezPlayground
           

        </div>


        <?php

 $sql="SELECT * FROM `winners` ORDER BY `winnerId` DESC";
 $result1 = mysqli_query($conn, $sql);
 $cnt=0;
 while ($row = mysqli_fetch_array($result1) ) 
 {   
        if($cnt>=5) break; 
        $cnt++;
       $date= $row['date'];
       $mail=$row['email'];

<<<<<<< HEAD
    
      $sqlinfo1 = "SELECT * FROM `user` WHERE `email`='$mail'";
      $resultinfo1 = mysqli_query($conn, $sqlinfo1);
      if ($resultinfo1->num_rows > 0) {
          $rowinfo1 = mysqli_fetch_array($resultinfo1);
  
          $img1=$rowinfo1['image'];
          $name1=$rowinfo1['name'];
      }
      


      $newStr = explode(" ", $date);
       $day=explode(":", $newStr[1]);
       $ampm="PM";
        if($day[0]>=12&&$day[0]<=23){
            $ampm="AM";

        }
        $tt=$day[0]%12;

=======
>>>>>>> FoyezPlayground
     echo '<div class="list">
      <div class="date">
          <h3>'.$tt.':'.$day[1].'</h3>
          <span>'.$ampm.'</span>
      </div>
      <div class="peopleProfile">
         <div class="winner">

          <img  src="img/'.$img1.'">

         </div>
         <h5 style="cursor:pointer;">'.$name1.'</h5>
      
      </div>

  </div>';

 }

 ?>
      

<<<<<<< HEAD


      </div>



=======
      </div>
>>>>>>> FoyezPlayground

</div>



 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="app.js"></script>

<<<<<<< HEAD
 <script>






    </script>
=======
>>>>>>> FoyezPlayground

</body>

</html>