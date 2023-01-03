<?php 

include 'config.php';
session_start();

if(isset($_POST['a']) || (isset($_POST['j'])) || (isset($_POST['am'])) )
{   
    /*if))
    {

        $name=$_SESSION['Glousername'];
        
        $sql = "UPDATE `user` SET  WHERE `name`='$name'";
        $result = mysqli_query($conn, $sql);
    }*/
    $x=$_POST['j'];
    $email= $_SESSION['globalemail'];
    $s= $_POST['a'];
    $ab= $_POST['am'];
    if(strlen($x)>1)
    {
        $sql = "UPDATE `user` SET `image`='$x'  WHERE `email`='$email' ";
        $result = mysqli_query($conn, $sql);
    }
    if(strlen($s)>1)
    {
        $sql = "UPDATE `user` SET `name`='$s'  WHERE `email`='$email' ";
        $result = mysqli_query($conn, $sql);
    }
    if(strlen($ab)>1)
    {
        $sql = "UPDATE `user` SET `bio`='$ab'  WHERE `email`='$email' ";
        $result = mysqli_query($conn, $sql);
    }
    
    $_SESSION['Glousername']=$s;


    header("Location:profile.php");
    
}
?>


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="editProfile.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

        <title></title>

    </head>
    
    <body>


<div class="container rounded bg-white mt-5 mb-5">
    <h1 class="text-primary">Profile Settings</h1>
      <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3 border-right bg-red">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
          
          <?php 
                            $email=$_SESSION['globalemail'];
                            $sql = "SELECT * FROM `user` WHERE `email`= '$email'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $var=$row['image'];
          echo '<img src="img/'.$var.'" class="avatar img-circle img-thumbnail" alt="avatar">';

          ?>
          <h6>Edit photo </h6>
          <form id="form" action=""  method ="POST" >
          <input type="file" class="form-control" name= "j" value="">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h5>Personal info</h5>
        
        <form class="form-horizontal" role="form">

          <div class="col-md-6">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <form id="form" action=""  method ="POST" >
                <?php 

                $mymail=$_SESSION['globalemail'];
                $sql = "SELECT * FROM `user` WHERE `email`='$mymail'";
                
                $result1 = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result1);
                $wants=$row['bio'];
                $name=$row['name'];

              echo '<input class="form-control" name="a" type="text" value="'.$name.'">
            </div>
          </div>
          <div class="form-group">
<<<<<<< HEAD
            <label class="col-lg-3 control-label">BIO:</label>
            <div class="col-lg-8">
              <form id="form" action=""  method ="POST" >
              <input class="form-control" name="am" type="text" value="'.$wants.'">';

              ?>
            </div>
          </div>
          <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
            </div>
=======
            <label class="col-lg-3 control-label">About Me:</label>
            <div class="col-lg-8">
              <form id="form" action=""  method ="POST" >
              <input class="form-control" name="am" type="text" value="">
            </div>
          </div>
          <input type="submit">
>>>>>>> FoyezPlayground
            </form>

          
        </form>

      </div>
  </div>
</div>