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

					$sql = $mysqli->query( "INSERT INTO tbAdministrators(first_name, last_name, email, password) VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass')" )
					        or die( mysqli_error() );

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

					$sql = $mysqli->query( "UPDATE tbAdministrators SET first_name='$myFirstName', last_name='$myLastName', email='$myEmail', password='$newpass' WHERE admin_id = '$myId'" )
					        or die( mysqli_error() );

					die( "An administrator account has been updated." );
				}
			?>
