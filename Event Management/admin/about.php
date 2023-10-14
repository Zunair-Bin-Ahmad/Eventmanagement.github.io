




<?php



session_start();

if (!isset($_SESSION['id'])) 
{
header("Location:index.php");
}

 ?>




    <!DOCTYPE html>
<html lang="en">


<!-- add-appointment24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>EventSphere Admin panel</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
   
    <div class="main-wrapper">
        <?php include('include/TOPBAR.php'); ?>
       <?php include('include/SIDEBAR.php'); ?> 

     
       <div class="page-wrapper"> 
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2"> 
                        <h4 class="page-title">Add About us</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                <form class="form" method="POST" enctype="multipart/form-data">
                

                  <div class="form-group">
                    <label for="password-1">About Head</label>
                  <input type="text" class="form-control" name="heading">
                  </div>

                   <div class="form-group">
                    <label for="password-1">About Description</label>
                  <input type="text" class="form-control" name="description">
                  </div>


                  <div class="form-group">
                    <label for="password-1">Event Head</label>
                  <input type="text" class="form-control" name="eheading">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Event Description</label>
                  <textarea  class="form-control" name="edescription"></textarea>
                  </div>


                  <div class="form-group">
                    <label for="password-1">Upload Image </label>
                    <input type="file" class="form-control" name="image">
                  </div>

 
                  <div class="form-group">
                  <button class="btn  btn-block" type="submit" name="submit" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white">Submit</button>
                  </div>
                </form>

              <?php
                include 'connection.php';

if(isset($_POST['submit']))
{
                  $image=$_FILES['image']['name'];
                  $imagepath="images/".$image;
                  move_uploaded_file($_FILES['image']['tmp_name'],$imagepath);
                  $heading=$_POST['heading'];
                  $eheading=$_POST['eheading'];
                  $description=$_POST['description'];
                  $edescription=$_POST['edescription'];
                 


                if ($image=="")
                   {
                    echo " image field is empty";
                  }
                  else if ($heading=="")
                   {
                    echo " heading field is empty";
                  }
                  else if ($eheading=="")
                   {
                    echo " eheading field is empty";
                  }
                  else if ($description=="")
                   {
                    echo " description field is empty";
                  }
                  else if ($edescription=="")
                   {
                    echo " edescription field is empty";
                  }

                  else{

                  $query="INSERT INTO `about`(`heading`,`description`,`image`,`eheading`,`edescription`) VALUES ('$heading','$description','$image','$eheading','$edescription')";
                  
                  $result=mysqli_query($connect,$query);
                  if (!$result) {
                    echo "Data Not Inserted";
                  }
                  else
                  {
                    echo "Data Inserted";
                  }

                }

                  } 
                ?>

              </div>
            </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
	<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
</body>


<!-- add-appointment24:07-->
</html>
