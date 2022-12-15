<?php
  session_start();
  include 'config.php';

  function search_user(){

        global $conn;

        if(isset($_GET['search_btn'])){

          $search_query=htmlentities($_GET['search_query']);
          $get_user="select * from `user` where name like '%$search_query%'";
        }

        else{


         $get_user="select * from `user` order by name DESC LIMIT 3";



        }
        $run_user=mysqli_query($conn,$get_user);

        while($row_user=mysqli_fetch_array($run_user)){
         
            $user_name=$row_user['name'];
            $img=$row_user['image'];

            echo"
               <div class='card'>
               <img src='../$img'> 
           
               <h1>$user_name</h1>
               <form>
                     <p> <button name=''>Add Friend</button></p>
               </form>






               </div><br><br>
                  



            ";






        }


  }
    #if(!isset($_SESSION['email'])){
  #header("location: index.php");
    #}


  ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style >
   body{

      overflow-x:hidden;


   } 
.card{

box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
max-width: 400px;
margin: auto;
text-align: center;
font-family: arial;


}
.card img{
  height: 200px;
}
















  </style>
</head>
<body>

      <nav class="">
        
          <a href="#">
            <?php

                  #$user=$_SESSION['email'];
                  $get_user="select * from `user`";
                  $run_user=mysqli_query($conn,$get_user);
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





  <?php search_user(); ?>

</body>
</html>
