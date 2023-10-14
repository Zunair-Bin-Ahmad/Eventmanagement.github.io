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
$query="DELETE FROM `eventtime` WHERE  id=$id";
$run=mysqli_query($connect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:eventtime-view.php?msg=1");
}

?>