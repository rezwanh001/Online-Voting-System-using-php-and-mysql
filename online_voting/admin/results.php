<?php
require('../connection.php');

session_start();
if(empty($_SESSION['admin_id'])){
 	header("location:access-denied.php");
}
?>
<html>
<head>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script language="javascript" src="js/jquery.timers-1.0.0.js"></script>
<script type="text/javascript">

$(document).ready(function(){
   var j = jQuery.noConflict();
	j(document).ready(function()
	{
		j(".refresh").everyTime(1000,function(i){
			j.ajax({
			  url: "refresh.php",
			  cache: false,
			  success: function(html){
				j(".refresh").html(html);
			  }
			})
		})
		
	});
   j('.refresh').css({color:"green"});
});
</script>
</head>
<body>
</body>
</html>