<?php
include 'config.php';

session_start();

$uname=$_SESSION['Glousername'];
$msg=$_POST['sms'];
$moviename=$_POST['moviename'];
date_default_timezone_set('Asia/Kolkata');
$ts=date('y-m-d h:ia');

     $sql = "INSERT INTO `chats`(`uname`, `msg`,`dt`,`moviename`) VALUES ('$uname','$msg','$ts','$moviename')";
  
    if(mysqli_query($conn, $sql)){
        echo "YES";
    } 
?>