
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
                        <h4 class="page-title">Add Event Prices</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                <form class="form" method="POST" enctype="multipart/form-data">

                   

<h2>Basic Pass</h2>
                  <div class="form-group">
                    <label for="password-1">Price</label>
                  <input type="number" class="form-control" name="bprice">
                  </div>
                  <div class="form-group">
                    <label for="password-1">service 1</label>
                  <input type="text" class="form-control" name="bservice1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 2</label>
                  <input type="text" class="form-control" name="bservice2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 3</label>
                  <input type="text" class="form-control" name="bservice3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 4</label>
                  <input type="text" class="form-control" name="bservice4">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Service 5</label>
                  <input type="text" class="form-control" name="bservice5">
                  </div>

<h2>Full Pass</h2>
                  <div class="form-group">
                    <label for="password-1">Price</label>
                  <input type="number" class="form-control" name="fprice">
                  </div>
                  <div class="form-group">
                    <label for="password-1">service 1</label>
                  <input type="text" class="form-control" name="fservice1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 2</label>
                  <input type="text" class="form-control" name="fservice2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 3</label>
                  <input type="text" class="form-control" name="fservice3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 4</label>
                  <input type="text" class="form-control" name="fservice4">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Service 5</label>
                  <input type="text" class="form-control" name="fservice5">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 6</label>
                  <input type="text" class="form-control" name="fservice6">
                  </div>
<h2>Group Pass</h2>
                  <div class="form-group">
                    <label for="password-1">Price</label>
                  <input type="number" class="form-control" name="gprice">
                  </div>
                  <div class="form-group">
                    <label for="password-1">service 1</label>
                  <input type="text" class="form-control" name="gservice1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 2</label>
                  <input type="text" class="form-control" name="gservice2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 3</label>
                  <input type="text" class="form-control" name="gservice3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 4</label>
                  <input type="text" class="form-control" name="gservice4">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Service 5</label>
                  <input type="text" class="form-control" name="gservice5">
                  </div>                 
                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" name="submit" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white">Submit</button>
                  </div>
                </form>

              <?php
                include 'connection.php';

if(isset($_POST['submit']))
{
                  $bprice=$_POST['bprice'];
                  $bservice1=$_POST['bservice1'];
                  $bservice2=$_POST['bservice2'];
                  $bservice3=$_POST['bservice3'];
                  $bservice4=$_POST['bservice4'];
                  $bservice5=$_POST['bservice5'];
                  $fprice=$_POST['fprice'];
                  $fservice1=$_POST['fservice1'];
                  $fservice2=$_POST['fservice2'];
                  $fservice3=$_POST['fservice3'];
                  $fservice4=$_POST['fservice4'];
                  $fservice5=$_POST['fservice5'];
                  $fservice6=$_POST['fservice6'];
                  $gprice=$_POST['gprice'];
                  $gservice1=$_POST['gservice1'];
                  $gservice2=$_POST['gservice2'];
                  $gservice3=$_POST['gservice3'];
                  $gservice4=$_POST['gservice4'];
                  $gservice5=$_POST['gservice5'];



                if ($bprice=="")
                   {
                    echo " bprice field is empty";
                  }
                  else if
                  ($bservice1=="")
                  {
                   echo " bservice1 field is empty";
                 }
                 else if
                  ($bservice2=="")
                  {
                   echo " bservice2 field is empty";
                 }
                 else if
                  ($bservice3=="")
                  {
                   echo " bservice3 field is empty";
                 }
                 else if
                  ($bservice4=="")
                  {
                   echo " bservice4 field is empty";
                 }
                 else if
                  ($bservice5=="")
                  {
                   echo " bservice5 field is empty";
                 }
                 else if ($fprice=="")
                   {
                    echo " fprice field is empty";
                  }
                  else if
                  ($fservice1=="")
                  {
                   echo " fservice1 field is empty";
                 }
                 else if
                  ($fservice2=="")
                  {
                   echo " fservice2 field is empty";
                 }
                 else if
                  ($fservice3=="")
                  {
                   echo " fservice3 field is empty";
                 }
                 else if
                  ($fservice4=="")
                  {
                   echo " fservice4 field is empty";
                 }
                 else if
                  ($fservice5=="")
                  {
                   echo " fservice5 field is empty";
                 }
                 else if
                  ($fservice6=="")
                  {
                   echo " fservice6 field is empty";
                 }
                 else if ($gprice=="")
                   {
                    echo " gprice field is empty";
                  }
                  else if
                  ($gservice1=="")
                  {
                   echo " gservice1 field is empty";
                 }
                 else if
                  ($gservice2=="")
                  {
                   echo " gservice2 field is empty";
                 }
                 else if
                  ($gservice3=="")
                  {
                   echo " gservice3 field is empty";
                 }
                 else if
                  ($gservice4=="")
                  {
                   echo " gservice4 field is empty";
                 }
                 else if
                  ($gservice5=="")
                  {
                   echo " gservice5 field is empty";
                 }

                  else{

                  $query="INSERT INTO `pricing`(`bprice`,`bservice1`,`bservice2`,`bservice3`,`bservice4`,`bservice5`,`fprice`,`fservice1`,`fservice2`,`fservice3`,`fservice4`,`fservice5`,`fservice6`,`gprice`,`gservice1`,`gservice2`,`gservice3`,`gservice4`,`gservice5`) VALUES ('$bprice','$bservice1','$bservice2','$bservice3','$bservice4','$bservice5','$fprice','$fservice1','$fservice2','$fservice3','$fservice4','$fservice5','$fservice6','$gprice','$gservice1','$gservice2','$gservice3','$gservice4','$gservice5')";
                  
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
