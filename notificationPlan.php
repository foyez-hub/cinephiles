<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

.right-sidebar{
        background :blanchedalmond;
        flex-basis:25%;
        position: sticky;
        top: 70px;
        align-self: flex-start;
        padding: 20px;
        border-radius: 4px;
        color: #626262;

    }
    </style>
</head>
<div class="right-sidebar">
        <div class="sidebar-title">
            <h4> Winner list </h4>
        </div>


        <?php

 $sql="SELECT * FROM `winners` WHERE 1";
 $result1 = mysqli_query($conn, $sql);
 while ($row = mysqli_fetch_array($result1) ) 
 {   
      $name= $row['name'];
      $date= $row['date'];
      $img= $row['img'];
      $newStr = explode("-", $date);


     

     echo '<div class="list">
      <div class="date">
          <h3>'.$newStr[2].'</h3>
          <span>NOV</span>
      </div>
      <div class="peopleProfile">
         <div class="winner">

          <img src="profileimg/p1.jfif">

         </div>
         <h5 style="cursor:pointer;">'.$name.'</h5>
      </div>

  </div>';


 }

 ?>




       

      

      </div>
</html>