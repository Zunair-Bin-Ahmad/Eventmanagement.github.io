


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
                        <h4 class="page-title">Add Event Time</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                <form class="form" method="POST" enctype="multipart/form-data">

                   


                  <div class="form-group">
                    <label for="password-1">Heading</label>
                  <input type="text" class="form-control" name="heading">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Days</label>
                  <input type="number" class="form-control" name="days">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Hours</label>
                  <input type="number" class="form-control" name="hours">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Minutes</label>
                  <input type="number" class="form-control" name="minutes">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Sec</label>
                  <input type="number" class="form-control" name="sec">
                  </div>
                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" name="submit" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white">Submit</button>
                  </div>
                </form>

              <?php
                include 'connection.php';

if(isset($_POST['submit']))
{
                  $days=$_POST['days'];
                  $hours=$_POST['hours'];
                  $minutes=$_POST['minutes'];
                  $sec=$_POST['sec'];
                  $heading=$_POST['heading'];



                if ($days=="")
                   {
                    echo " days field is empty";
                  }
                  else if
                  ($hours=="")
                  {
                   echo " hours field is empty";
                 }
                 else if
                  ($minutes=="")
                  {
                   echo " minutes field is empty";
                 }
                 else if
                  ($sec=="")
                  {
                   echo " sec field is empty";
                 }
                 else if
                  ($heading=="")
                  {
                   echo " heading field is empty";
                 }
                  else{

                  $query="INSERT INTO `eventtime`(`heading`,`days`,`hours`,`minutes`,`sec`) VALUES ('$heading','$days','$hours','$minutes','$sec')";
                  
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
