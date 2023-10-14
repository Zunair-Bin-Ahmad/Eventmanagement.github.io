<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM `add_faq,s` WHERE  id=$id";
$run=mysqli_query($connect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:View FAQ,s.php?msg=1");
}

?>