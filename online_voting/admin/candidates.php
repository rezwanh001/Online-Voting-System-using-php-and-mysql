ession_start();
    require('../connection.php');
    if(empty($_SESSION['admin_id'])){
      header("location:access-denied.php");
    } 
    $result= $mysqli->query("SELECT * FROM tbCandidates")
    or die("There are no records to display ... \n" . mysqli_error()); 
    if (mysqli_num_rows($result)<1){
        $result = null;
    }
?>

<?php
    $positions_retrieved= $mysqli->query("SELECT * FROM tbPositions")
    or die("There are no records to display ... \n" . mysqli_error()); 
?>

<?php
if (isset($_POST['Submit']))
{

    $newCandidateName = addslashes( $_POST['name'] ); //prevents types of SQL injection
    $newCandidatePosition = addslashes( $_POST['position'] ); //prevents types of SQL injection
    

    $sql = $mysqli->query( "INSERT INTO tbCandidates(candidate_name,candidate_position) VALUES ('$newCandidateName','$newCandidatePosition')" )
            or die("Could not insert candidate at the moment". mysqli_error() );

    // redirect back to candidates
     header("Location: candidates.php");
    }
?>

<?php
    // deleting sql query
    // check if the 'id' variable is set in URL
     if (isset($_GET['id']))
     {
     // get id value
     $id = $_GET['id'];
     
     // delete the entry
     $result =  $mysqli->query("DELETE FROM tbCandidates WHERE candidate_id='$id'")
     or die("The candidate does not exist ... \n"); 
     
     // redirect back to candidates
     header("Location: candidates.php");
     }
     else
     // do nothing   
?>
