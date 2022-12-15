<!DOCTYPE html>
<?php
  session_start();
  include("find_friends_function.php");
    if(!isset($_SESSION['email'])){
	header("location: index.php");
    }

else{ ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

      <nav>
      	
          <a href="#">
          	<?php

                  $user=$_SESSION['email'];
                  $get_user="select * from `user` where email='$user'";
                  $run_user=mysqli_query($con,$get_user);
                  $row=mysqli_fetch_array($run_user);

                  $user_name=$row['name'];
                  echo"<a href='profile.php?name=$user_name'> </a>";






          	?>
               



             </a>
             <div>
             	<form>
             		<input type="text" name="search_query" placeholder="Search Friends" autocomplete="off" required>
             		<button type="submit" name="search_btn">Search</button>
             	</form>



             </div>





      </nav>







</body>
</html>
<?php} ?>