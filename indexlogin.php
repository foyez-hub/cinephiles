
   

<?php 

include 'config.php';


include_once("sidenav.php");




include_once("topnav.php");


//recommend 

$startsec=0;
$genres_count=0;
$countgenresarray=array();

// favorites count
$email=$_SESSION['globalemail'];
$sql = "SELECT * FROM `user` WHERE `email`='$email'";
$result1 = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result1);
$wants=$row['favorites'];
$str=explode(",", $wants);
foreach ($str as $key => $value) {

    if(strlen($value)<1)
  {
   continue;
  }

  $sqlgen = "SELECT * FROM `movie_info` WHERE `movie_name`='$value'";
  $resultgen = mysqli_query($conn, $sqlgen);
  $rowgen = mysqli_fetch_array($resultgen);
  $genras=$rowgen['genres'];

  array_push($countgenresarray,$genras);










$startsec++;

}


$wants1=$row['recent'];
$str=explode(",", $wants1);
foreach ($str as $key => $value) {

    if(strlen($value)<1)
  {
   continue;
  }


  $sqlgen = "SELECT * FROM `movie_info` WHERE `movie_name`='$value'";
  $resultgen = mysqli_query($conn, $sqlgen);
  $rowgen = mysqli_fetch_array($resultgen);
  $genras=$rowgen['genres'];

  array_push($countgenresarray,$genras);

$startsec++;

}

$wants2=$row['watchlist'];
$str=explode(",", $wants2);

foreach ($str as $key => $value) {

    if(strlen($value)<1)
  {
   continue;
  }

  $sqlgen = "SELECT * FROM `movie_info` WHERE `movie_name`='$value'";
  $resultgen = mysqli_query($conn, $sqlgen);
  $rowgen = mysqli_fetch_array($resultgen);
  $genras=$rowgen['genres'];

  array_push($countgenresarray,$genras);
$startsec++;

}




$maxgen=-1;
$maxmovie;
$countgenresarray=array_count_values($countgenresarray);
foreach($countgenresarray as $x => $val) {
    if($val>$maxgen){
        $maxgen=$val;
        $maxmovie=$x;
    }
  }



$allmaxmoives=array();

$sqlmax = "SELECT * FROM `movie_info` WHERE `genres`='$maxmovie'";
$resultmax = mysqli_query($conn, $sqlmax);
while ($rowmax = mysqli_fetch_array($resultmax) ) { 

   $name1=$rowmax['movie_name'];
   array_push($allmaxmoives,$name1);

}


$_SESSION['vv1']=$allmaxmoives;


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
</head>

<body>

 

    

    <div class="container">
        <div class="content-container">

            <div class="featured-content"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
            <img class="featured-title" src="img/f-t-1.png" alt="">
            <input id="searchbar" type="text" name="search" placeholder="Search Movie">
            <h1 class="featured-desc">Recommend Movies Based On One’s Activity & Interest</h1>
            <button class="featured-button" onclick="openForm()">Get Recommend</button>
            </div>


            



<?php

echo '<div class="form-popup" id="myForm">
  <form style="background-color: black; padding:2%" method="POST" action="">
       <fieldset>
        <legend>1.How are you today?</legend>
        <input type="radio" name="dark" value="Dark">Happy<br>
        <input type="radio" name="light" value="Light">Sad<br>
        <br>

      

        <legend>2.Choose your preferred genre?</legend>
        <input type="radio" name="Romance" value="Romance">Romance<br>
        <input type="radio" name="Thriller" value="Thriller">Thriller<br>
        <input type="radio" name="Science fiction" value="Science fiction">Science fiction<br>
        <input type="radio" name="Horror" value="Horror">Horror<br>
        <input type="radio" name="Fantasy" value="Fantasy">Fantasy<br>
        <br>

        <legend>3.From which time period do you want to watch movie?</legend>
        <input type="radio" name="4.1" value="Before2000">Before 2000<br>
        <input type="radio" name="4.2" value="After2000">After 2000<br>
        <input type="radio" name="4.3" value="Doesn’t matter">Doesn’t matter<br>
        <br>

        <input class="featured-button form-button" name="sub" type="submit" value="Submit now">
        <button type="button" class="featured-button form-button" onclick="closeForm()"> Close </button>

    </fieldset>
</form>

  
  </div>'

  ?>


           

            <div class="movie-list-container">
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                       
                         


                        <?php
                        $sql="SELECT * FROM `movie_info` WHERE`release_year`>=2000";
                        $result1 = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result1) ) 
                        {   
                            $var= $row['movie_name'];

                             $synopsis=$row['synopsis'];
                            $img=$row['image'];

                             
                             echo '<div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                            <span class="movie-list-item-title">'.$var.'</span>
                            <p class="movie-list-item-desc">
                                '.$synopsis.'</p>
                                <a href="movieOverview.php?title='.$var.'"><input class="movie-list-item-button" name="details" type="submit" value="Details"></a>
                        </div>';
                           
                        }

                    ?>

                    </div>

                    <i class="fas fa-chevron-right arrow"></i>

                </div>
            </div>


            <div class="movie-list-container">
                <h1 style="text-align:center" class="movie-list-title">OLD MOVIES</h1>
                <div class="movie-list-wrapper">
                <div class="movie-list">
                       
                         


                       <?php
                       $sql="SELECT * FROM `movie_info` WHERE`release_year`<2000";
                       $result1 = mysqli_query($conn, $sql);
                       while ($row = mysqli_fetch_array($result1) ) 
                       {   
                           $var= $row['movie_name'];

                            $synopsis=$row['synopsis'];
                           $img=$row['image'];


                            echo '<div class="movie-list-item">
                           <img class="movie-list-item-img" src="img/'.$img.'" alt="">
                           <span class="movie-list-item-title">'.$var.'</span>
                           <p class="movie-list-item-desc">
                               '.$synopsis.'</p>
                               <a href="movieOverview.php?title='.$var.'"><input class="movie-list-item-button" name="details" type="submit" value="Details"></a>
                               </div>';
                          
                       }

                   ?>

                   </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

            <h1 style="margin-top:15px; text-align:center " class="movie-list-title ">Cinephiles Premium</h1>

            <div class="featured-content"
            
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/avatar.jpg');">
                <!-- <img class="featured-title" src="img/f-t-2.png" alt=""> -->
                <p class="featured-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana).</p>
                <!-- <button class="featured-button">WATCH</button> -->
                <a href="movieOverview.php?title=Avatar"><input class="featured-button" name="details" type="submit" value="WATCH"></a>
            </div>

            <div class="movie-list-container">
                <h1 style="margin-top:15px;text-align:center" class="movie-list-title">POPULER</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/2.jpeg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/15.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/4.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/5.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/15.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

            <div class="movie-list-container">
                <h1 style="text-align:center" class="movie-list-title">TRENDY</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/17.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/18.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/19.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/7.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/5.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/15.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/4.jpg" alt="">
                            <span  class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

        </div>
    </div>
    
    <script src="app.js"></script>

    <script>

     
function openForm() {
    
        document.getElementById("myForm").style.display = "none";
        document.getElementById("notification-bar").style.display = "none";
        location.href = 'recomendation.php';

    

}


        </Script>
</body>

