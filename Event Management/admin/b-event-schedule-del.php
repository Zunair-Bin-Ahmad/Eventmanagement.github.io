<?php



session_start();

if (!isset($_SESSION['id'])) 
{
header("Location:index.php");
}

 ?>

<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM `b-schedule` WHERE  id=$id";
$run=mysqli_query($connect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:b-event-schedule-view.php?msg=1");
}

?>