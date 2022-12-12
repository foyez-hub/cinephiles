<?php 

include 'databaseConnection.php';

session_start();

error_reporting(0);



if (isset($_SESSION['username'])) {
    header("Location:Homepage.php");
}

if (isset($_POST['submit'])) {


  $password =$_POST['password'];
  $email=$_POST['email'];


  if($id=="admin"&&$password=="admin"){
    header("Location:adminshow.php");
  }
  else{
    echo "IN";
    $password =md5($_POST['password']);
  $sql = "SELECT * FROM `user_info` WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['st_email'] = $row['email'];

    header("Location:Homepage.php");
  } 
  else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
  }

}
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login_signup.css">
  
</head>
<body>
  <div class="login-wrapper">
    
<form action="" class="form" method="POST">
      

      <img src="avatar.png" alt=""> <a href="index.php" class="close">&times;</a>
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="email" id="email" value="<?php echo $email; ?>" required>
        <label for="id">User Email</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" required>
        <label for="password">Password</label>
      </div>
      <div class="input-group">
        <button name="submit" class="submit-btn">Login</button>
       
      </div>
      
      

      <p classs="forgot-pw"><a href="register.php">Sign Up</a>.</p>
  


  </form>




    
</body>
</html>