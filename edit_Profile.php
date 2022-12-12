<?php 

include 'config.php';
session_start();

if(isset($_POST['a']) && (isset($_POST['j'])) )
{   
    /*if))
    {

        $name=$_SESSION['Glousername'];
        
        $sql = "UPDATE `user` SET  WHERE `name`='$name'";
        $result = mysqli_query($conn, $sql);
    }*/
    $x=$_POST['j'];
    echo $_POST['j'];
    $email= $_SESSION['globalemail'];
    $s= $_POST['a'];
    $sql = "UPDATE `user` SET `name`='$s', `image`='$x' WHERE `email`='$email'";
    $result = mysqli_query($conn, $sql);
    $_SESSION['Glousername']=$s;


    header("Location:profile.php");
    
}
?>


<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">Edit Profile</h1>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          
          <?php 
                            $email=$_SESSION['globalemail'];
                            $sql = "SELECT * FROM `user` WHERE `email`= '$email'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            $var=$row['image'];
          echo '<img src="img/'.$var.'" class="avatar img-circle img-thumbnail" alt="avatar">';

          ?>
          <h6>Upload a different photo...</h6>
          <form id="form" action=""  method ="POST" >
          <input type="file" class="form-control" name= "j" value="">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Add less than 5kb image size
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">

          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <form id="form" action=""  method ="POST" >
              <input class="form-control" name="a" type="text" value="">
            </div>
          </div>
          <input type="submit">
            </form>

          
        </form>

      </div>
  </div>
</div>
<hr>


   <style>                     
body{margin-top:20px;margin-left: 400px}
.avatar{
width:200px;
height:200px;
}   
</style>