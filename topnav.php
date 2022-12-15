<?php 
     session_start();
<<<<<<< HEAD
   if(isset($_SESSION['Glousername']))  $name=$_SESSION['Glousername'];
=======
   if(isset($_SESSION['globalemail']))  $name=$_SESSION['globalemail'];
>>>>>>> ShojibWorkplace

    

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
            
            //abc_def
            //abc
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
                <a href="/indexlogin.php">
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
<<<<<<< HEAD
                <?php 
                $email=$_SESSION['globalemail'];
                            $sql = "SELECT * FROM `user` WHERE `email`= '$email'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $var=$row['image'];

                
                echo '<img class="profile-picture" src="img/'.$var.'" alt="">';
                 ?>
=======
                <img class="profile-picture" src="img/profile.jpg" alt="">
>>>>>>> ShojibWorkplace
                <div class="profile-text-container">
                    <div class="dropdown">
                        <a style="cursor: pointer; margin: 0%; padding: 0%;" class="dropbtn" class="movie-list-title"> <?php
                                  if(isset($name)) echo $name; 
                                           ?> </a>
                        <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
                        <div class="dropdown-content">
                            <!-- <a id="name" href="#"> <?php
                                  if(isset($name)) echo $name; 
                                           ?> 
                              </a -->
<<<<<<< HEAD
                            <a href="profile.php">Profile</a>
=======
                            <!-- <a href="#">Setting & Srivacy</a> -->
>>>>>>> ShojibWorkplace
                            <a href="index.php">Logout</a>
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
