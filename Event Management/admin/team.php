




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
                        <h4 class="page-title">Add Team Member</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                <form class="form" method="POST" enctype="multipart/form-data">
                

                  <div class="form-group">
                    <label for="password-1">Name</label>
                  <input type="text" class="form-control" name="name">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Designation</label>
                  <input type="text" class="form-control" name="designation">
                  </div>


                  <div class="form-group">
                    <label for="password-1">Facebook</label>
                  <input type="text" class="form-control" name="facebook">
                  </div>

                   <div class="form-group">
                    <label for="password-1">Instagram</label>
                    <input type="text" class="form-control" name="instagram">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Gmail</label>
                    <input type="text" class="form-control" name="gmail">
                  </div>

                  <div class="form-group">
                    <label for="password-1">About</label>
                    <input type="text" class="form-control" name="about">
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
                  $name=$_POST['name'];
                  $designation=$_POST['designation'];
                  $facebook=$_POST['facebook'];
                  $instagram=$_POST['instagram'];
                  $gmail=$_POST['gmail'];
                  $about=$_POST['about'];
                 


                if ($image=="")
                   {
                    echo " image field is empty";
                  }
                  else if ($name=="")
                   {
                    echo " name field is empty";
                  }
                  else if ($designation=="")
                   {
                    echo " designation field is empty";
                  }
                  else if ($facebook=="")
                   {
                    echo " facebook field is empty";
                  }
                  else if ($instagram=="")
                   {
                    echo " instagram field is empty";
                  }
                  else if ($gmail=="")
                   {
                    echo " gmail field is empty";
                  }
                  else if ($about=="")
                   {
                    echo " about field is empty";
                  }

                  else{

                  $query="INSERT INTO `team`(`name`,`designation`,`facebook`,`instagram`,`gmail`,`about`,`image`) VALUES ('$name','$designation','$facebook','$instagram','$gmail','$about','$imagepath')";
                  
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
