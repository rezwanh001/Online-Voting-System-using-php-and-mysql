<?php
      // session_start();
      // $myusername = $_SESSION['nam'] ;
      // $mypassword = $_SESSION['pas'] ;

    session_start();
    $myusername = isset($_SESSION['nam'])?$_SESSION['nam']:"" ;
    $mypassword = isset($_SESSION['pas'])?$_SESSION['pas']:"" ;
?>
<?php
      if(isset($_COOKIE['$email']) && $_COOKIE['$pass']){
          header("Location:admin.php");
          exit;
      }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

      <script language="JavaScript" src="js/admin.js">
  </script>

  
</head>

<body style="background-image:url('images/demo/backgrounds/bCY7Scu.png');">


  

<div class="pen-title">
  <h1>Admin Login Form</h1>
</div>

<div class="container" >
  <div class="card"></div>

  <div class="card">
    <h1 class="title">Login</h1>
    <form name="form1" action="checklogin.php" method="post" onsubmit="return loginValidate(this)">

      <div class="input-container">
        <input name="myusername" value="<?php echo $myusername  ?>" type="text" required="required"/>
        <label>Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input name="mypassword" value="<?php echo $mypassword ?>" type="password"  required="required"/>
        <label>Password</label>
        <div class="bar"></div>
      </div>

      <center><tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1"> <font color="blue">Remember Me</font></td></tr></center><br>

      <div class="button-container">

        <button name="Submit"><span>Login</span></button>

      </div>
      <br><br>
    <center>Return to <a href="http://localhost/online_voting/index.php">Voter Panel</a></center>

    </form>
  </div>
  
</div>


</body>
</html>




