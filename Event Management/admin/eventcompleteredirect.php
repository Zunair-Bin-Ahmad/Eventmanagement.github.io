<?php
                include 'connection.php';

if(isset($_POST['submit']))
{
                 

                  $name=$_POST['name'];
                  $address=$_POST['address'];

                  $email=$_POST['email'];
                  $event=$_POST['event'];

                  $phone=$_POST['phone'];
                  


                if ($name=="")
                   {
                    echo " name field is empty";
                  }


                  else if ($email=="")
                   {
                    
                    echo "email field is empty";
                  }
                  else if ($event=="")
                   {
                    echo "event field is empty";
                  }
                  else if ($address=="")
                   {
                    echo "address field is empty";
                  }
                  else if ($phone=="")
                   {
                    echo "phone field is empty";
                  }

                 




                 
                  else{

                  $query="INSERT INTO `eventcomplete`(`name`,`address`,`phone`,`email`,`event`) VALUES ('$name','$address','$phone','$email','$event')";
                  
                  $result=mysqli_query($connect,$query);
                  if (!$result) {
                    echo "Data Not Inserted";
                  }
                  else
                  {
                    $id=$_GET['id'];
$query="DELETE FROM `eventbooking` WHERE  id=$id";
$run=mysqli_query($connect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:eventbooking-view.php?msg=1");
}
                  }

                }

                  }
                ?>