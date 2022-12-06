
<?php 

include 'config.php';
session_start();
$email;
$name="EMAM HASAN";
if (isset($_SESSION['globalemail'])) {
    $email=$_SESSION['globalemail'];

}
if (isset($_SESSION['Glousername'])) {
    $name=$_SESSION['Glousername'];

}

$movies=array();
if (isset($_POST['sub'])) {

    if(isset($_POST["dark"])){
        // echo $_POST["dark" ];

            $sql = "SELECT * FROM `movie_info` WHERE `category`='DARK'";
           $result1 = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result1) ) { 
              
              $var=$row['movie_name'];
              array_push($movies,$var);

        }


    }
    else if(isset($_POST["light"])){

        // echo $_POST["light"];

        $sql = "SELECT * FROM `movie_info` WHERE `category`='LIGHT'";
        $result1 = mysqli_query($conn, $sql);
       while ($row = mysqli_fetch_array($result1) ) { 
           
           $var=$row['movie_name'];
           array_push($movies,$var);

     }


    }

        $randomNumber = rand(0,5);


      $_SESSION['valpass']=$movies[$randomNumber];

    header("Location:recomendation.php");

    
    



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
</head>

<body>
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

                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/profile.jpg" alt="">
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
                            <!-- <a href="#">Setting & Srivacy</a> -->
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
    <div class="sidebar">
        <div class="left-menu-icon fas fa-search" style="margin-top: 8px; " onclick="toggleClock()" id="SearchIcon"></div>
        <a style="margin-left: 20px;" href="indexlogin.php"><i class="left-menu-icon fas fa-home"></i></a>
        <a style="margin-left: 20px;" href="watchParty.html"> <i class="left-menu-icon fas fa-users"></i></a>
        <a style="margin-left: 20px;" href="streaming.html"><i class="left-menu-icon fas fa-tv"></i></a>
        <a style="margin-left: 20px;" href="meme.html"><i class="left-menu-icon fas fa-grin-alt"></i></a>
    </div>

    <div class="container">
        <div class="content-container">
            <div class="featured-content"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
            <img class="featured-title" src="img/f-t-1.png" alt="">
            <input id="searchbar" type="text" name="search" placeholder="Search Movie">
            <h1 class="featured-desc">Recommend Movies Based On One’s Mood & Interest</h1>
            <p class="featured-desc">Answer 4 questions and let us do the work!</p>
            <button class="featured-button" onclick="openForm()">START</button>


            <!-- start -->




<div class="form-popup" id="myForm">
  <form style="background-color: black; padding:2%" method="POST" action="">
       <fieldset>
        <legend>1.How are you today?</legend>
        <input type="radio" name="dark" value="Dark">Happy<br>
        <input type="radio" name="light" value="Light">Sad<br>
        <br>

        <legend>2. What comes closest to your occasion?</legend>
        <input type="radio" name="2.1" value="2.1">watching alone<br>
        <input type="radio" name="2.2" value="2.2">watching with your favorite person<br>
        <input type="radio" name="2.3" value="2.3">movie party<br>
        <br>


        <legend>3.Choose your preferred genre?</legend>
        <input type="radio" name="3.1" value="Drama"><p>Drama</p><br>
        <input type="radio" name="3.2" value="Romance">Romance<br>
        <input type="radio" name="3.3" value="Thriller">Thriller<br>
        <input type="radio" name="3.4" value="Science fiction">Science fiction<br>
        <input type="radio" name="3.5" value="Horror">Horror<br>
        <input type="radio" name="3.5" value="Fantasy">Fantasy<br>
        <br>

        <legend>4.From which time period do you want to watch movie?</legend>
        <input type="radio" name="4.1" value="Before2000">Before 2000<br>
        <input type="radio" name="4.2" value="After2000">After 2000<br>
        <input type="radio" name="4.3" value="Doesn’t matter">Doesn’t matter<br>
        <br>

        <input class="featured-button form-button" name='sub' type="submit" value="Submit now">
        <button type="button" class="featured-button form-button" onclick="closeForm()"> Close </button>

    </fieldset>
</form>
    <!-- <div class="featured">Test</div>
    <div class="vertical-text"><span>VERTICAL</span></div> -->
  
  </div>


             <!-- <div class="form-popup" id="myForm2">
                <form action="" class="form-container" >
                    <h2 style="color:gray">2. What comes closest to your occasion?</h2>
                    <p style=" text-align: center; color: gray">Choose 1 Option</p>
                    <hr />


                    <div id='block-1' style='padding: 10px;'>
                        <label for='option-1' style=' padding: 5px; font-size: 1.5rem;color:gray;'>
                            <input type='radio' name='option' value='6/24' id='option-1'
                                style='color:black; transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Watching alone</label>

                    </div>
                    <hr />


                    <div id='block-2' style='padding: 10px;'>
                        <label for='option-2' style=' padding: 5px; font-size: 1.5rem;color:gray;'>
                            <input type='radio' name='option' value='6' id='option-2'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Watching with your favorite person</label>
                    </div>
                    <hr />

                    <div id='block-3' style='padding: 10px;'>
                        <label for='option-3' style=' padding: 5px; font-size: 1.5rem; color:gray;'>
                            <input type='radio' name='option' value='1/3' id='option-3'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>movie party
                            </label>
                    </div>
                    <hr />


                    
                </form>
                </form>
             </div>

             <div class="form-popup" id="myForm3">
                <form action="/action_page.php" class="form-container">
                    <h2 style="color:gray">3. Choose your preferred genre? </h2>
                    <p style=" text-align: center; color: gray">Choose 1 option</p>
                    <hr />


                    <div id='block-1' style='padding: 10px;'>
                        <label for='option-1' style=' padding: 5px; font-size: 1.5rem;color:gray;'>
                            <input type='radio' name='option' value='6/24' id='option-1'
                                style='color:black; transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Drama</label>

                    </div>
                    <hr />


                    <div id='block-2' style='padding: 10px;'>
                        <label for='option-2' style=' padding: 5px; font-size: 1.5rem;color:gray;'>
                            <input type='radio' name='option' value='6' id='option-2'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Romance</label>
                    </div>
                    <hr />

                    <div id='block-3' style='padding: 10px;'>
                        <label for='option-3' style=' padding: 5px; font-size: 1.5rem; color:gray;'>
                            <input type='radio' name='option' value='1/3' id='option-3'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Thriller</label>
                    </div>
                    <hr />
                    <div id='block-3' style='padding: 10px;'>
                        <label for='option-3' style=' padding: 5px; font-size: 1.5rem; color:gray;'>
                            <input type='radio' name='option' value='1/3' id='option-3'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Science fiction</label>
                    </div>
                    <hr />

                    <div id='block-3' style='padding: 10px;'>
                        <label for='option-3' style=' padding: 5px; font-size: 1.5rem; color:gray;'>
                            <input type='radio' name='option' value='1/3' id='option-3'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Horror</label>
                    </div>
                    <hr />
                    <div id='block-3' style='padding: 10px;'>
                        <label for='option-3' style=' padding: 5px; font-size: 1.5rem; color:gray;'>
                            <input type='radio' name='option' value='1/3' id='option-3'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Fantasy</label>
                    </div>
                    <hr />

                    <div id='block-3' style='padding: 10px;'>
                        <label for='option-3' style=' padding: 5px; font-size: 1.5rem; color:gray;'>
                            <input type='radio' name='option' value='1/3' id='option-3'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Doesn’t matter </label>
                    </div>
                    <hr />


                    <button type='button' class="featured-button form-button" onclick="openForm4()" >Next</button>
                    <button type="button" class="featured-button form-button" onclick="closeForm3()"> Close </button>
                </form>
                </form>
             </div>

             <div class="form-popup" id="myForm4">
                <form action="/action_page.php" class="form-container">
                    <h2 style="color:gray">4. how old would you like the movie to be?</h2>
                    <p style=" text-align: center; color: gray">Choose 1 option</p>
                    <hr />


                    <div id='block-1' style='padding: 10px;'>
                        <label for='option-1' style=' padding: 5px; font-size: 1.5rem;color:gray;'>
                            <input type='radio' name='option' value='6/24' id='option-1'
                                style='color:black; transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Doesn’t matter</label>

                    </div>
                    <hr />


                    <div id='block-2' style='padding: 10px;'>
                        <label for='option-2' style=' padding: 5px; font-size: 1.5rem;color:gray;'>
                            <input type='radio' name='option' value='6' id='option-2'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>10 years</label>
                    </div>
                    <hr />

                    <div id='block-3' style='padding: 10px;'>
                        <label for='option-3' style=' padding: 5px; font-size: 1.5rem; color:gray;'>
                            <input type='radio' name='option' value='1/3' id='option-3'
                                style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>20 years</label>
                    </div>
                    <hr />


                    <button type='button' class="featured-button form-button">Submit</button>
                    <button type="button" class="featured-button form-button" onclick="closeForm4()"> Close </button>
                </form>
                </form>
             </div> -->

            <div class="movie-list-container">
                <h1 style="margin-top:15px; text-align:center" class="movie-list-title ">NEW RELEASES</h1>
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
                            <span class="movie-list-item-title">Star Wars</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/3.jpg" alt="">
                            <span class="movie-list-item-title">Storm</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/4.jpg" alt="">
                            <span class="movie-list-item-title">1917</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/5.jpg" alt="">
                            <span class="movie-list-item-title">Avengers</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/6.jpg" alt="">
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
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 style="text-align:center" class="movie-list-title">UPCOMMING</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/8.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/9.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/10.jpg" alt="">
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
                            <img class="movie-list-item-img" src="img/5.jpg" alt="">
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
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-2.jpg');">
                <img class="featured-title" src="img/f-t-2.png" alt="">
                <p class="featured-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto illo dolor
                    deserunt nam assumenda ipsa eligendi dolore, ipsum id fugiat quo enim impedit, laboriosam omnis
                    minima voluptatibus incidunt. Accusamus, provident.</p>
                <button class="featured-button">WATCH</button>
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
                            <span class="movie-list-item-title">Her</span>
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
</body>

</html>