<?php 
     session_start();
   if(isset($_SESSION['Glousername']))  $name=$_SESSION['Glousername'];

    
$usernames=array();
include 'config.php';
$moviesnames=array();
if(isset($_POST['q']))
{   

    $s= $_POST['q'];
    if(strlen($s)>0){
    $sql = "SELECT * FROM `movie_info` WHERE 1 ";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result) ) { 
              
            $var=$row['movie_name'];
            $z= strtolower($var);
            $s = strtolower($s);
            $size=strlen($z);
            $cnt=0;
            $ans=0;
            $mymail=$_SESSION['globalemail'];
           
            $temp;
            for($j=0;$j<strlen($z);$j++)
            {
                
                for($i=0;$i<strlen($s);$i++)
                {
                     if($z[$j]==$s[$i])
                     {
                        $cnt++;
                        $j++;
                        if($j>=strlen($z))
                        {
                            break;
                        }
                     }
                     else
                     {
                        continue;
                     }
                }
                $ans= max($cnt,$ans);
                $cnt=0;

            }

            if($ans==strlen($s))
            {

                // echo "                             .............".$var;
                array_push($moviesnames,$var);
            }
              /*
              array_push($movies,$var);*/


        } 




        $sql = "SELECT * FROM `user` WHERE 1 ";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result) ) { 
              
            $var=$row['name'];
            $email=$row['email'];
            $z= strtolower($var);
            $s = strtolower($s);
            $size=strlen($z);
            $cnt=0;
            $ans=0;
            
           
            $temp;
            for($j=0;$j<strlen($z);$j++)
            {
                
                for($i=0;$i<strlen($s);$i++)
                {
                     if($z[$j]==$s[$i])
                     {
                        $cnt++;
                        $j++;
                        if($j>=strlen($z))
                        {
                            break;
                        }
                     }
                     else
                     {
                        continue;
                     }
                }
                $ans= max($cnt,$ans);
                $cnt=0;

            }

            if($ans==strlen($s) && $email!=$mymail)
            {

                // echo "                             .............".$var;
                array_push($usernames,$email);
            }
              /*
              array_push($movies,$var);*/


        }
        } 

$_SESSION['search_result'] = $moviesnames;
$_SESSION['search_result2'] = $usernames;




header("Location:SearchMovie.php");

}
?>




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

#notification{
   position: absolute;
   padding: 2px;
   background:white;
   margin-left: 65%;
   width: 30px;
   height: 30px;
   border-radius:50%;
   cursor: pointer;
}

.fa-bell{
    color:black;
    display:flex;
    margin-left:25%;
    margin-top:20%;
    align-items: center;
    justify-content:center;
}

#notification-bar{
    position: fixed;
    width:90%;
    max-width:350px;
    height: 90vh;
    background:blue;
    top:7%;
    right:1%;
    overflow:scroll;
    z-index: 10000;
    display:none;
    padding:5px;
   
}


.notification-section{
    margin-top:1%;
    margin-bottom:5%;
    padding:5%;

}
.user-profile {
    margin-bottom: -5px;
    font-weight: 500;
    color: #626262;
    cursor: pointer;

}


.most-vote-section{
  margin-top:20%;
  margin-bottom:20%;
  padding:5%;
  
  
}
.request-div{
    margin-left:18%;
}
.req-btn{
    background-color: #6c6969;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    border: none;
    outline: none;
    font-weight: bold;
    align-items: center;
    justify-content: space-between;
    margin:auto;
}

.req-btn:hover {
    background-color:  #4dbf00;
    cursor: pointer;
  
  }
 </style>
</head>

<body>
    
<div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="indexlogin.php">
                    <h1 class="logo">CINEPHILES</h1>
                </a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li><a style="margin-top: 49px" class="movie-list-title " href="indexlogin.php"></a></li>
                    <li><a class="movie-list-title " href="indexlogin.php"></a></li>

                    <form style="margin-left:40%; background:#fff; width:350px; height:32px; display:flex;" id="form" action=""  method ="POST" > 
                       <i style=" align-self:center; padding:10px 12px; color:#777" class="fa fa-search" aria-hidden="true"></i>

                       <input style=" flex:1; border:none;outline:none;" type="search" id="query" name="q" placeholder="Search...">
                        <button style=" background:gray; padding:8px 30px; border:none; outline:none; color:#fff;letter-spacing:1px; cursor:pointer;" type="submit">Search</button>
                    </form>

                </ul>
            </div>
            <div class="profile-container">
                <?php 
                $email=$_SESSION['globalemail'];
                            $sql = "SELECT * FROM `user` WHERE `email`= '$email'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $var=$row['image'];

                
                echo '<img class="profile-picture" src="img/'.$var.'" alt="">';
                 ?>
                <div class="profile-text-container">

                    <div class="dropdown">

                    <a style="cursor: pointer; margin: 0%; padding: 0%;" class="droptn" class="movie-list-title" onclick="toggleClock()"> <?php
                                  if(isset($name)) echo $name; 
                                           ?> </a>
                        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
                        <div class="dropdown-content" id="dropdown" style="background-color:black">
                            <a href="profile.php" style="color: white">Profile</a>
                            <hr>
                            <a href="friends.php"style="color: white">Friends</a>
                            <hr>
                            <a href="index.php"style="color: white">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="notification-bar">   
    <button style="margin:auto;display:block" onclick="closenotificationbarForm()">Close</button>  
    <div class="notification-section">
        <div class="user-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi </p>
           <span>&nbsp Sent you friend Request</span>

        </div>
        <div class="request-div">
            <button class="req-btn">Confirm</button>
            <button class="req-btn">Delete</button>
        </div>
        

    </div>
       
    <div class="notification-section">
        <div class="user-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi </p>
           <span>&nbsp Sent you friend Request</span>

        </div>

        <div class="request-div">
            <button class="req-btn">Accept</button>
            <button class="req-btn">Cancel</button>
        </div>
        

    </div>

    

    <div class="notification-section">
        <div class="user-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi </p>
           <span>&nbsp Sent you friend Request</span>

        </div>

        <div class="request-div">
            <button class="req-btn">Accept</button>
            <button class="req-btn">Cancel</button>
        </div>
        

    </div>
    



    <div class="notification-section">
        <div class="user-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi </p>
           <span>&nbsp Sent you friend Request</span>

        </div>

        <div class="request-div">
            <button class="req-btn">Accept</button>
            <button class="req-btn">Cancel</button>
        </div>
        

    </div>



    <div class="notification-section">
        <div class="user-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi </p>
           <span>&nbsp Sent you friend Request</span>

        </div>

        <div class="request-div">
            <button class="req-btn">Accept</button>
            <button class="req-btn">Cancel</button>
        </div>
        

    </div>




    <div class="notification-section">
        <div class="user-profile">
           <img src="img/15.jpg" > 
           <p > Mehadi </p>
           <span>&nbsp Sent you friend Request</span>

        </div>

        <div class="request-div">
            <button class="req-btn">Accept</button>
            <button class="req-btn">Cancel</button>
        </div>
        

    </div>



        

</div>


</body>
