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
$query="SELECT FROM `eventbooking` WHERE  id=$id";
$run=mysqli_query($connect,$query);
if (!$run) {
	echo "Operation not complete";
}
else{
    $id=$_GET['id'];
$query="DELETE FROM `eventbooking` WHERE  id=$id";
$run=mysqli_query($connect,$query);
	header("Location:eventbooking-view.php?msg=1");
}

?>