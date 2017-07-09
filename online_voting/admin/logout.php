<?php
  session_start();
  
  if( isset($_COOKIE['$email']) and isset($_COOKIE['$pass'])){
      setcookie('$email',' ',time()-30*24*60*60);
      setcookie('$pass',' ',time()-30*24*60*60);
      $nam=$_COOKIE['$email'];
      $pas=$_COOKIE['$pass'];
      $_SESSION['nam'] = $nam;
      $_SESSION['pas'] = $pas;
      header("location: index.php");
      exit;
  }
  else
  {
    header("location: index.php");
    exit;
  }
?>