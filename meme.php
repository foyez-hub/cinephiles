<?php
    
        include 'config.php';
        include_once("topnav.php");



        $name=$_SESSION['Glousername'];
        $reimag;
        $userimg="img/1.jpeg";

        if (isset($_POST['submit'])) {

            if (isset($_POST['myfile'])){
                $reimag=$_POST['myfile'];
               $sql = "INSERT INTO `memeinfo`(`postOwner`, `PostImg`, `postOwnerImg`) VALUES ('$name','$reimag','$userimg')";
  
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


    </style>



</head>

<body>




    <?php
      include_once("sidenav.php");
    ?>
    


  <div class="con" >
      <div class="left-sidebar">
      <p>Click on the image to download it:</p> 
        <a href="memeImg/realimg.jpg" download><img style=" width: 80%;height: 80%;" src="memeImg/realimg.jpg" alt=""></a>
        
      </div>


      <div style="  margin-left:5px; margin-top:8px; margin-right:47px" class="main-content">
         <div class="write-post-container">
            <div class="user-profile">
                <img src="img/1.jpeg">
                <div>
                    <p><?php if(isset($name)) echo $name; ?></p>

                </div>

            </div>
            <div class="post-input-container">
                <p>Post your Meme</p>
                <div class="add-post-links">
                    <form action="" method="POST">
                        <a href="#"> <img src="img/photo.png" >
                            <input style="border-radius:5px" type="file" id="myfile" name="myfile">
                        </a><br>
                        <input name="submit" style=" border-radius: 5px; cursor: pointer; margin-left:70px; background-color: rgb(131, 108, 193); "type="submit">
                      </form>
                </div>
            </div>
         </div>

          
          <?php

$sql="SELECT * FROM `memeinfo` WHERE 1";
$result1 = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result1) ) 
{   
      $postOwner= $row['postOwner'];
      $PostImg= $row['PostImg'];
      $Time= $row['Time'];
      $postOwnerImg= $row['postOwnerImg'];
      $PostLike= $row['PostLike'];

        echo '<div class="post-container">
            <div class="user-profile">
                <img src="'.$postOwnerImg.'">
                <div>

                    <p><'.$postOwner.'></p>
                    <span >'.$postOwner.' </span>
                    <span > '.$Time.' </span>

    
                </div>
    
            </div>


            <img src="memeImg/'.$PostImg.'"  class="post-img" >

            <div class="post-row">

                <div class="like-icon">
                    <div>
                        <input class="featured-button form-button" name="sub" type="submit" value="Vote">
                    </div>
                </div>

            </div>
    
          </div>';
    

}
          ?>

      

      </div>
      





      <div class="right-sidebar">
        <div class="sidebar-title">
            <h4> Winner list </h4>
        </div>

        <div class="list">
            <div class="date">
                <h3>18</h3>
                <span>November</span>
            </div>
            
            <div class="peopleProfile">
               <div class="winner">

                <img src="img/2.jpeg">

               </div>
               <h5 style="cursor:pointer;">Mehedi Hasan</h5>
            </div>

        </div>

        <div class="list">
            <div class="date">
                <h3>18</h3>
                <span>November</span>
            </div>
            
            <div class="peopleProfile">
               <div class="winner">
                <img src="img/2.jpeg">
               </div>
               <h5 style="cursor:pointer;">Mehedi Hasan</h5>
            </div>

        </div>

      </div>




</div>
 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="app.js"></script>
</body>

</html>