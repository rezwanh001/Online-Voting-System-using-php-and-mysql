<?php
  require_once('connection.php');

  session_start();
  
  if(empty($_SESSION['member_id'])){
    header("location:access-denied.php");
  }
?>

<?php
    
    $positions= $mysqli->query("SELECT * FROM tbPositions")
    or die("There are no records to display ... \n" . mysqli_error()); 
  ?>
  <?php
    
     if (isset($_POST['Submit']))
     {
       
       $position = addslashes( $_POST['position'] ); 
       
       
       $result = $mysqli->query("SELECT * FROM tbCandidates WHERE candidate_position='$position'")
       or die(" There are no records at the moment ... \n"); 
     
     }
     else
     // do something
  
?>
