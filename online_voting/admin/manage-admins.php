
<?php
	session_start();
	require('../connection.php');
	//If your session isn't valid, it returns you to the login screen for protection
	if(empty($_SESSION['admin_id']) ){
	 	 header("location:access-denied.php");
	}
?> 


<!DOCTYPE html>

<html>
<head>
<title>online voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script language="JavaScript" src="js/admin.js">
</script>

</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    
    <div class="fl_left">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="https://uk.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="https://www.rss.com/"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +8801773254014</li>
        <li><i class="fa fa-envelope-o"></i> r.haque.249.rh@gmail.com </li>
      </ul>
    </div>
    
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
   
    <div id="logo" class="fl_left">
      <h1><a href="index.html">ONLINE VOTING</a></h1>
    </div>
   
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="manage-admins.php">Home</a></li>
        <li><a class="drop" href="#">Admin Panel Pages</a>
          <ul>
            <li><a href="manage-admins.php">Manage Admin</a></li>
            <li><a href="positions.php">Manage Positions</a></li>
            <li><a href="candidates.php">Manage Candidates</a></li>
            <li><a href="refresh.php">Results</a></li>
          </ul>
        </li>
        
        <li><a href="http://localhost/online_voting/index.php">Voter Panel</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
   
  </header>
</div>


<div id="container">




<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear"> 
    
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Online <a href="#">Voting</a></h2>
    <ul class="nospace group">
     

       <li class="one_third">

          <blockquote>

      <?php
				//If your session isn't valid, it returns you to the login screen for protection
				if(empty($_SESSION['admin_id'])){
				 	header("location:access-denied.php");
				}
				//Process
				if (isset($_POST['submit']))
				{

					$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
					$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
					$myEmail = $_POST['email'];
					$myPassword = $_POST['password'];

					$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

					$sql = mysql_query( "INSERT INTO tbAdministrators(first_name, last_name, email, password) VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass')" )
					        or die( mysql_error() );

					die( "A new administrator account has been created." );
				}
				//Process
				if (isset($_GET['id']) && isset($_POST['update']))
				{
					$myId = addslashes( $_GET['id']);
					$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
					$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
					$myEmail = $_POST['email'];
					$myPassword = $_POST['password'];

					$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

					$sql = mysql_query( "UPDATE tbAdministrators SET first_name='$myFirstName', last_name='$myLastName', email='$myEmail', password='$newpass' WHERE admin_id = '$myId'" )
					        or die( mysql_error() );

					die( "An administrator account has been updated." );
				}
			?>

</blockquote>

        
      </li> 

    </ul>
    
  </section>
</div>


<table align="center">
<tr>
<td>

<form action="manage-admins.php?id=<?php echo $_SESSION['admin_id']; ?>" method="post" onSubmit="return updateProfile(this)">
<table align="center">
<CAPTION><h4>UPDATE ACCOUNT</h4></CAPTION>
<tr><td>First Name:</td><td><input type="text"  font-weight:bold;" name="firstname" maxlength="15" value=""></td></tr>
<tr><td>Last Name:</td><td><input type="text" font-weight:bold;" name="lastname" maxlength="15" value=""></td></tr>
<tr><td>Email Address:</td><td><input type="text"  font-weight:bold;" name="email" maxlength="100" value=""></td></tr>
<tr><td>New Password:</td><td><input type="password"  font-weight:bold;" name="password" maxlength="15" value=""></td></tr>
<tr><td>Confirm New Password:</td><td><input type="password"  font-weight:bold;" name="ConfirmPassword" maxlength="15" value=""></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="update" value="Update Account"></td></tr>
</table>
</form>

</td>
<td>

<form action="manage-admins.php" method="post" onSubmit="return registerValidate(this)">
<table align="center">
<CAPTION><h4>CREATE ACCOUNT</h4></CAPTION>
<tr><td>First Name:</td><td><input type="text"  font-weight:bold;" name="firstname" maxlength="15" value=""></td></tr>
<tr><td>Last Name:</td><td><input type="text" font-weight:bold;" name="lastname" maxlength="15" value=""></td></tr>
<tr><td>Email Address:</td><td><input type="text"  font-weight:bold;" name="email" maxlength="100" value=""></td></tr>
<tr><td>Password:</td><td><input type="password" font-weight:bold;" name="password" maxlength="15" value=""></td></tr>
<tr><td>Confirm Password:</td><td><input type="password" font-weight:bold;" name="ConfirmPassword" maxlength="15" value=""></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Create Account"></td></tr>
</table>
</form>

</td>
</tr>
</table>

</div>



<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    
    <div class="one_third first">
      <h6 class="title">Address</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
         
          <p>
          Name        : Md. Rezwanul Haque <br>
          University  : KUET <br>
          Batch       : 2k14 <br>
          Dept        : CSE <br>
          </p>
          </address>
        </li>
      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Phone</h6>
      <ul class="nospace linklist contact">
       
        <li><i class="fa fa-phone"></i> +8801773254014<br>
          +8801521479574</li>


      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Email</h6>
      <ul class="nospace linklist contact">
        
        <li><i class="fa fa-envelope-o"></i> r.haque.249.rh@gmail.com </li>

      </ul>
    </div>



  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
   
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Md. Rezwanul Haque</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
