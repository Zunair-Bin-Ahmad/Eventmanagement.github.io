
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
                        <h4 class="page-title">Add Event Schedule</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                <form class="form" method="POST" enctype="multipart/form-data">

                   

<h2>Marketing Event Time Schedule</h2>
                  <div class="form-group">
                    <label for="password-1">1st Time</label>
                  <input type="time" class="form-control" name="1time">
                  </div>
                  <div class="form-group">
                    <label for="password-1">2st Time</label>
                  <input type="time" class="form-control" name="2time">
                  </div>
                  <div class="form-group">
                    <label for="password-1">3st Time</label>
                  <input type="time" class="form-control" name="3time">
                  </div>
                  <div class="form-group">
                    <label for="password-1">4st Time</label>
                  <input type="time" class="form-control" name="4time">
                  </div>
<h2>Day 1</h2>
                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="date" class="form-control" name="date1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 1</label>
                  <input type="text" class="form-control" name="d1event1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 2</label>
                  <input type="text" class="form-control" name="d1event2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 3</label>
                  <input type="text" class="form-control" name="d1event3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 4</label>
                  <input type="text" class="form-control" name="d1event4">
                  </div>
 <h2>Day 2</h2>
                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="date" class="form-control" name="date2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 1</label>
                  <input type="text" class="form-control" name="d2event1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 2</label>
                  <input type="text" class="form-control" name="d2event2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 3</label>
                  <input type="text" class="form-control" name="d2event3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 4</label>
                  <input type="text" class="form-control" name="d2event4">
                  </div>
                  
<h2>Day 3</h2>
                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="date" class="form-control" name="date3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 1</label>
                  <input type="text" class="form-control" name="d3event1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 2</label>
                  <input type="text" class="form-control" name="d3event2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 3</label>
                  <input type="text" class="form-control" name="d3event3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 4</label>
                  <input type="text" class="form-control" name="d3event4">
                  </div>
<h2>Day 4</h2>
                  <div class="form-group">
                    <label for="password-1">Date</label>
                  <input type="date" class="form-control" name="date4">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 1</label>
                  <input type="text" class="form-control" name="d4event1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 2</label>
                  <input type="text" class="form-control" name="d4event2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 3</label>
                  <input type="text" class="form-control" name="d4event3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Event 4</label>
                  <input type="text" class="form-control" name="d4event4">
                  </div>                 
                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" name="submit" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white">Submit</button>
                  </div>
                </form>

              <?php
                include 'connection.php';

if(isset($_POST['submit']))
{
                  $time1=$_POST['1time'];
                  $time2=$_POST['2time'];
                  $time3=$_POST['3time'];
                  $time4=$_POST['4time'];
                  $date1=$_POST['date1'];
                  $date2=$_POST['date2'];
                  $date3=$_POST['date3'];
                  $date4=$_POST['date4'];
                  $d1event1=$_POST['d1event1'];
                  $d1event2=$_POST['d1event2'];
                  $d1event3=$_POST['d1event3'];
                  $d1event4=$_POST['d1event4'];
                  $d2event1=$_POST['d2event1'];
                  $d2event2=$_POST['d2event2'];
                  $d2event3=$_POST['d2event3'];
                  $d2event4=$_POST['d2event4'];
                  $d3event1=$_POST['d3event1'];
                  $d3event2=$_POST['d3event2'];
                  $d3event3=$_POST['d3event3'];
                  $d3event4=$_POST['d3event4'];
                  $d4event1=$_POST['d4event1'];
                  $d4event2=$_POST['d4event2'];
                  $d4event3=$_POST['d4event3'];
                  $d4event4=$_POST['d4event4'];



                if ($time1=="")
                   {
                    echo " time1 field is empty";
                  }
                  else if
                  ($time2=="")
                  {
                   echo " time2 field is empty";
                 }
                 else if
                  ($time3=="")
                  {
                   echo " time3 field is empty";
                 }
                 else if
                  ($time4=="")
                  {
                   echo " time4 field is empty";
                 }
                 else if
                  ($date1=="")
                  {
                   echo " date1 field is empty";
                 }
                 else if
                  ($date2=="")
                  {
                   echo " date2 field is empty";
                 }
                 else if ($date3=="")
                   {
                    echo " date3 field is empty";
                  }
                  else if
                  ($date4=="")
                  {
                   echo " date4 field is empty";
                 }
                 else if
                  ($d1event1=="")
                  {
                   echo " d1event1 field is empty";
                 }
                 else if
                  ($d1event2=="")
                  {
                   echo " d1event2 field is empty";
                 }
                 else if
                  ($d1event3=="")
                  {
                   echo " d1event3 field is empty";
                 }
                 else if
                  ($d1event4=="")
                  {
                   echo " d1event4 field is empty";
                 }
                 else if
                  ($d2event1=="")
                  {
                   echo " d2event1 field is empty";
                 }
                 else if ($d2event2=="")
                   {
                    echo " d2event2 field is empty";
                  }
                  else if
                  ($d2event3=="")
                  {
                   echo " d2event3 field is empty";
                 }
                 else if
                  ($d2event4=="")
                  {
                   echo " d2event4 field is empty";
                 }
                 else if
                  ($d3event1=="")
                  {
                   echo " d3event1 field is empty";
                 }
                 else if
                  ($d3event2=="")
                  {
                   echo " d3event2 field is empty";
                 }
                 else if
                  ($d3event3=="")
                  {
                   echo " d3event3 field is empty";
                 }

                 else if
                  ($d3event4=="")
                  {
                   echo " d3event4 field is empty";
                 }
                 else if
                  ($d4event1=="")
                  {
                   echo " d4event1 field is empty";
                 }
                 else if
                  ($d4event2=="")
                  {
                   echo " d4event2 field is empty";
                 }
                 else if
                  ($d4event3=="")
                  {
                   echo " d4event3 field is empty";
                 }
                 else if
                  ($d4event4=="")
                  {
                   echo " d4event4 field is empty";
                 }

                  else{

                  $query="INSERT INTO `b-schedule`(`1time`,`2time`,`3time`,`4time`,`date1`,`date2`,`date3`,`date4`,`d1event1`,`d1event2`,`d1event3`,`d1event4`,`d2event1`,`d2event2`,`d2event3`,`d2event4`,`d3event1`,`d3event2`,`d3event3`,`d3event4`,`d4event1`,`d4event2`,`d4event3`,`d4event4`) VALUES ('$time1','$time2','$time3','$time4','$date1','$date2','$date3','$date4','$d1event1','$d1event2','$d1event3','$d1event4','$d2event1','$d2event2','$d2event3','$d2event4','$d3event1','$d3event2','$d3event3','$d3event4','$d4event1','$d4event2','$d4event3','$d4event4')";

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
