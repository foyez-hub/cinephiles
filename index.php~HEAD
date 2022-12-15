<?php 

include 'config.php';
session_start();
$name;
$email;
$password;
//signup
if (isset($_POST['submit'])) {
    
    if (isset($_POST['name'])) {
           $name=$_POST['name'];


    }
     if(isset($_POST['email'])){
        $email=$_POST['email'];


    }
     if(isset($_POST['password'])){
        $password=$_POST['password'];

    }



$sql = "SELECT * FROM `user` WHERE `email`='$email'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    header("Location:index.php");
}
else{
    
    $sql = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
  
    $result = mysqli_query($conn, $sql); 

}


}


$email_login;
$password_login;


if (isset($_POST['submitLogin'])) {
    
 
     if(isset($_POST['email_login'])){
        $email_login=$_POST['email_login'];
          


    }
     if(isset($_POST['password_login'])){
        $password_login=$_POST['password_login'];

    }

    $sql = "SELECT * FROM `user` WHERE `email`='$email_login' AND`password`='$password_login'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['globalemail'] = $email_login;
            $_SESSION['Glousername'] = $row['name'];


          header("Location:indexlogin.php");

    }
    else{


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

    </head>
    
    <body>
    
    
        <div class="navbar">
            <div class="navbar-container">
                <div class="logo-container">
                    <a href="index.php">
                        <h1 class="logo">CINEPHILES</h1>
                    </a>
                </div>
                <div class="menu-container">
                    <ul class="menu-list">
                        <li><a class="movie-list-title " href="index.php">Home</a></li>
                        <li><a class="movie-list-title " href="index.php">About</a></li>
                    </ul>
                </div>
                <div class="profile-container">
                    <div class="profile-text-container">
                        <div class="dropdown">
                            <a style="cursor: pointer; margin: 0%; padding: 0%;" class="dropbtn"
                                class="movie-list-title" onclick="loginopenForm()">SIGN IN</a>
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
            <div class="left-menu-icon fas fa-search" style="margin-top: 8px; " onclick="loginopenForm()" id="SearchIcon"></div>
            <a style="margin-left: 20px;" href="index.php"><i class="left-menu-icon fas fa-home"></i></a>
            <i class="left-menu-icon fas fa-users" onclick="loginopenForm()"></i>
            <i class="left-menu-icon fas fa-tv" onclick="loginopenForm()"></i>
            <i class="left-menu-icon fas fa-grin-alt" onclick="loginopenForm()"></i>
        </div>
    
        <div class="container">
            <div class="content-container">
                <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
                <img class="featured-title" src="img/f-t-1.png" alt="">
                <input id="searchbar" type="text" name="search" placeholder="Search Movie">
                <h1 class="featured-desc">Recommend Movies Based On One’s Mood & Interest</h1>
                <p class="featured-desc">Answer 4 questions and let us do the work!</p>
                <button class="featured-button" onclick="loginopenForm()">START</button>
    
                <div class="form-popup" id="myForm">
                    <form action="/action_page.php" class="form-container">
                        <h2 style="color:gray">1. How are you today?</h2>
                        <p style=" text-align: center; color: gray">Choose 1 Option</p>
                        <hr />
    
    
                        <div id='block-1' style='padding: 10px;'>
                            <label for='option-1' style=' padding: 5px; font-size: 1.5rem;color:gray;'>
                                <input type='radio' name='option' value='Happy' id='option-1'
                                    style='color:black; transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Happy</label>
    
                        </div>
                        <hr />
    
    
                        <div id='block-2' style='padding: 10px;'>
                            <label for='option-2' style=' padding: 5px; font-size: 1.5rem;color:gray;'>
                                <input type='radio' name='option' value='Neutral' id='option-2'
                                    style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Neutral</label>
                        </div>
                        <hr />
    
                        <div id='block-3' style='padding: 10px;'>
                            <label for='option-3' style=' padding: 5px; font-size: 1.5rem; color:gray;'>
                                <input type='radio' name='option' value='Sad' id='option-3'
                                    style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;'>Sad</label>
                        </div>
                        <hr />
    
    
                        <button type='button' class="featured-button form-button" onclick="openForm2()" >Next</button>
                        <button type="button" class="featured-button form-button" onclick="closeForm()"> Close </button>
                    </form>
                 </div>
    
    
                 <div class="form-popup" id="myForm2">
                    <form action="/action_page.php" class="form-container">
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
    
    
                        <button type='button' class="featured-button form-button" onclick="openForm3()" >Next</button>
                        <button type="button" class="featured-button form-button" onclick="closeForm2()"> Close </button>
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
                 </div>
    
                <!-- login -->
                <div class="form-popup" id="loginmyForm">
                    <form action="" class="form-container" method="POST">
                        <h2 style="color:gray; text-align: center;">Login Form</h2>
                        <hr>
                        <div class="field">
                            <input name='email_login' class="input" type="text" placeholder="Email Address" required>
                          </div>
                          <div class="field">
                            <input name='password_login' id="showPass" class="input" type="password" placeholder="Password" required>
                          </div>
                          <div>
                            <input  type="checkbox" onclick="showPassword()"><span style="color: grey">Show Password</span> 
    
                            <a style="margin:auto;color: blue" href="#">Forgot password?</a>
                        </div>
                          <div class="field btn">
                            <div class="btn-layer"></div>
                            <input name='submitLogin'style="margin-top:12px; margin-bottom:12px;width:150px;display: flex; justify-content: center;align-items: center" class="featured-button form-button" type="submit" value="Login">
                          </div>
                          <div style="cursor: pointer; color:gray">Not a member? <a style="color:blue" onclick="signupopenForm()">Signup now</a></div>
                        <hr />
                        <button style="margin-top:12px; margin-bottom:12px;width:150px;display: flex; justify-content: center;align-items: center" type="button" class="featured-button form-button" onclick="logincloseForm()"> Close </button>
                    </form>
                </div>
    
    
       <!-- signup -->
            <div class="form-popup" id="signupmyForm">
                <form action="" class="form-container" method="POST">
                     <h2 style="color:gray; text-align: center;">Signup Form</h2>
                    <hr>
                    <div class="field">
                        <input name='name' class="input" type="text" placeholder="Name" required>
                    </div>
                    <div class="field">
                        <input name='email' class="input" type="text" placeholder="Email Address" required>
                      </div>
                      <div class="field">
                        <input name='password' id="showPass" class="input" type="password" placeholder="Password" required>
                      </div>
                      <div>
                        <input  type="checkbox" onclick="showPassword()"><span style="color: grey">Show Password</span> 
                    </div>
                    <!-- <div class="field">
                        <input id="showConfirmPass" class="input" type="password" placeholder="Confirm Password" required>
                      </div> -->
                      <div>
                        <input  type="checkbox" onclick="showConfirmPassword()"><span style="color: grey">Show Password</span> 
                    </div>
                      <div class="field btn">
                        <div class="btn-layer"></div>
                        <input style="margin-top:12px; margin-bottom:12px;width:150px;display: flex; justify-content: center;align-items: center" class="featured-button form-button" type="submit" value="Signup" name='submit'>
                      </div>
                    <hr />
                    <button style="margin-top:12px; margin-bottom:12px;width:150px;display: flex; justify-content: center;align-items: center" type="button" class="featured-button form-button" onclick="signupcloseForm()"> Close </button>
                </form>
            </div>
    
        </div>
    
    
    
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
    
    
    
    
    
    
    
    
    
    

