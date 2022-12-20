
<?php 

include 'config.php';

$likes=$_POST['uname'];

$sql = "SELECT * FROM `movie_info` WHERE 1";
$result1 = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result1) ) { 

   $name=$row['movie_name'];
   array_push($movies,$name);
   $var=$row['category'];
   $year=$row['release_year'];
   $gen=$row['genres'];

    
   if($var==$type  || strval($genra)==$gen ){
       
    array_push($movies,$name);

   }
  
   


    


}









  ?>
