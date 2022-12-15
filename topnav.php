<?php 
     session_start();
   if(isset($_SESSION['Glousername']))  $name=$_SESSION['Glousername'];

    

include 'config.php';
$moviesnames=array();
if(isset($_POST['q']))
{   

    $s= $_POST['q'];
    $sql = "SELECT * FROM `movie_info` WHERE 1 ";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result) ) { 
              
            $var=$row['movie_name'];
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

            if($ans==strlen($s))
            {

                // echo "                             .............".$var;
                array_push($moviesnames,$var);
            }
              /*
              array_push($movies,$var);*/


        } 

$_SESSION['search_result'] = $moviesnames;
header("Location:SearchMovie.php");

}





?>



<div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="indexlogin.php">
                    <h1 class="logo">CINEPHILES</h1>
                </a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li><a class="movie-list-title " href="indexlogin.php">Home</a></li>
                    <li><a class="movie-list-title " href="indexlogin.php">About</a></li>
                               
                               <form id="form" action=""  method ="POST" > 

                <input type="search" id="query" name="q" placeholder="Search...">
                     <button>Search</button>
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

                        <a style="cursor: pointer; margin: 0%; padding: 0%;" class="dropbtn" class="movie-list-title" onclick="toggleClock()"> <?php
                                  if(isset($name)) echo $name; 
                                           ?> </a>
                        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
                        <div class="dropdown-content" id="dropdown" style="background-color:black">
                            <a href="profile.php" style="color: white">Profile</a>
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
