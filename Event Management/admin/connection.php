

<?php
$connect=mysqli_connect('localhost','root','','eventmanagment');
if (!$connect) {
	echo "Error is establishing the connection.";
}
else{
	echo "Database connected successfully";
}

?>