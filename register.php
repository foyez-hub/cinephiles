
<?php 

if (isset($_POST['stdbtn'])) {
    
}

include 'databaseConnection.php';//

error_reporting(0);

session_start();

 //if (isset($_SESSION['username'])) {
    //header("Location: index.php");
//}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	

	if ($password == $cpassword) {
		$sql = "SELECT * FROM `user_info` WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO `user_info`(username,email,password)
					VALUES ('$username','$email','$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				header('location:login.php');

			
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";

			} 
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
      
       <a href="login.php" class="close">&times;</a>
      <img src="avatar.png" alt="">
      <h2>Sign Up</h2>

       <div class="input-group">
				<input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
                 <label for="username">Name</label>

			</div>
			
			<div class="input-group">
				<input type="email" id="Email" name="email" value="<?php echo $email; ?>" required>
				<label for="Email">Email</label>
			</div>
			
			

			<div class="input-group">
				<input type="password" id="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
				<label for="Password">Password</label>
            </div>
            <div class="input-group">
				<input type="password" id="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
				<label for="Confirm Password">Confirm Password</label>
			</div>
			<div class="input-group">
            
                  <button name="submit" class="submit-btn">Register</button>
				
			</div>






      

      
  


  </form>




    
</body>
</html>




















