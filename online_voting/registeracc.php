
<!DOCTYPE html>

<html>
<head>
<title>online voting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link href="css/user_styles.css" rel="stylesheet" type="text/css" /> -->
<script language="JavaScript" src="js/user.js">
</script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
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
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">ONLINE VOTING</a></h1>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/background1.jpg');">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <h2 class="font-x3 uppercase btmspace-80 underlined"> Online <a href="#">Voting</a></h2>
    <ul class="nospace group">
      <li class="one_half">
        <blockquote>


<div  >
  <?php
  	require('connection.php');
  	//Process
  	if (isset($_POST['submit']))
  	{

  		$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
  		$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
  		$myEmail = $_POST['email'];
  		$myPassword = $_POST['password'];
  		$myVoterid = $_POST['voter_id'];

  		$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

  		$sql = $mysqli->query( "INSERT INTO tbMembers(first_name, last_name, email, voter_id, password) VALUES ('$myFirstName','$myLastName', '$myEmail','$myVoterid', '$newpass')" )
  		        or die( mysqli_error() );


  	die( "You have registered for an account.<br><br>Go to <a href=\"login.php\">Login</a>" );
  	}

  	echo "<center><h3>Register an account by filling in the needed information below:</h3></center>";
  	
  ?>
</div> 
		<table style="background-color:powderblue;" width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="registeracc.php" onSubmit="return registerValidate(this)">
<td>
<table style="background-color:powderblue;" width="100%" border="0" cellpadding="3" cellspacing="1" >
	<tr>
	<td style="color:#000000"; width="120" >First Name</td>
	<td style="color:#000000"; width="6">:</td>
	<td style="color:#000000"; width="294"><input name="firstname" type="text" ></td>
	</tr>

	<tr>
	<td style="color:#000000"; width="120" >Last Name</td>
	<td style="color:#000000"; width="6">:</td>
	<td style="color:#000000"; width="294"><input name="lastname" type="text" ></td>
	</tr>

	<tr>
	<td style="color:#000000"; width="150" >Email</td>
	<td style="color:#000000"; width="6">:</td>
	<td style="color:#000000"; width="294"><input name="email" type="text" ></td>
	</tr>

	<tr>
	<td style="color:#000000"; width="120" >Voter Id</td>
	<td style="color:#000000"; width="6">:</td>
	<td style="color:#000000"; width="294"><input name="voter_id" type="text" ></td>
	</tr>

	<tr>
	<td style="color:#000000"; >Password</td>
	<td style="color:#000000"; >:</td>
	<td style="color:#000000"; ><input name="password" type="password" ></td>
	</tr>

	<tr>
	<td style="color:#000000"; >Confirm Password</td>
	<td style="color:#000000"; >:</td>
	<td style="color:#000000"; ><input name="ConfirmPassword" type="password" ></td>
	</tr>

	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td style="color:#000000";><input type="submit" name="submit" value="Register Account"></td>
	</tr>

</table>
</td>
</form>
</tr>
</table>

<center>
<br>Already have an account? <a href="login.php"><b>Login Here</b></a>
</center>



        </blockquote>
      
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
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


    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Md. Rezwanul Haque</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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

