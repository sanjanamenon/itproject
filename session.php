<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['user_sess'];
   $query ="select idnum from login where idnum=\"$user_check\"";
   $result = mysqli_query($conn,$query) or die('Error executing query'.mysqli_error($conn));
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
   $login_session = $row['idnum'];
   
   if(!isset($_SESSION['user_sess'])){
      header("location:index.php");
   }
?>
