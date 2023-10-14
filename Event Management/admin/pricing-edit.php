
<?php



session_start();

if (!isset($_SESSION['id'])) 
{
header("Location:index.php");
}

 ?>



<?php
 include("connection.php");
?>

<?php
$msg='';
$id=$_GET['id'];
if (isset($_POST['submit'])) {
  include("connection.php");
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

     $query="UPDATE `eventtime` SET `bprice`='$bprice',`bservice1`='$bservice1',`bservice2`='$bservice2',`bservice3`='$bservice3',`bservice4`='$bservice4',`bservice5`='$bservice5',`fprice`='$fprice',`fservice1`='$fservice1',`fservice2`='$fservice2',`fservice3`='$fservice3',`fservice4`='$fservice4',`fservice5`='$fservice5',`fservice6`='$fservice6',`gprice`='$gprice',`gservice1`='$gservice1',`gservice2`='$gservice2',`gservice3`='$gservice3',`gservice4`='$gservice4',`gservice5`='$gservice5' WHERE id='$id'";
    $run=mysqli_query($connect,$query);
    if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
       header("Location:pricing-view.php");
    }
  
 
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
                        <h4 class="page-title">Edit Event Prices</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">

                        <?php 
                      $query="SELECT *from `pricing` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {

                      ?>


                    <form class="form" method="POST" enctype="multipart/form-data">

                    <h2>Basic Pass</h2>
                  <div class="form-group">
                    <label for="password-1">Price</label>
                  <input type="number" class="form-control"  value="<?php echo $row['bprice'] ?>" name="bprice">
                  </div>
                  <div class="form-group">
                    <label for="password-1">service 1</label>
                  <input type="text" class="form-control" value="<?php echo $row['bservice1'] ?>" name="bservice1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 2</label>
                  <input type="text" class="form-control" value="<?php echo $row['bservice2'] ?>" name="bservice2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 3</label>
                  <input type="text" class="form-control" value="<?php echo $row['bservice3'] ?>" name="bservice3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 4</label>
                  <input type="text" class="form-control" value="<?php echo $row['bservice4'] ?>" name="bservice4">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Service 5</label>
                  <input type="text" class="form-control" value="<?php echo $row['bservice5'] ?>" name="bservice5">
                  </div>

<h2>Full Pass</h2>
                  <div class="form-group">
                    <label for="password-1">Price</label>
                  <input type="number" class="form-control" value="<?php echo $row['fprice'] ?>" name="fprice">
                  </div>
                  <div class="form-group">
                    <label for="password-1">service 1</label>
                  <input type="text" class="form-control" value="<?php echo $row['fservice1'] ?>" name="fservice1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 2</label>
                  <input type="text" class="form-control" value="<?php echo $row['fservice2'] ?>" name="fservice2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 3</label>
                  <input type="text" class="form-control" value="<?php echo $row['fservice2'] ?>" name="fservice3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 4</label>
                  <input type="text" class="form-control" value="<?php echo $row['fservice4'] ?>" name="fservice4">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Service 5</label>
                  <input type="text" class="form-control" value="<?php echo $row['fservice5'] ?>" name="fservice5">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 6</label>
                  <input type="text" class="form-control" value="<?php echo $row['fservice6'] ?>" name="fservice6">
                  </div>
<h2>Group Pass</h2>
                  <div class="form-group">
                    <label for="password-1">Price</label>
                  <input type="number" class="form-control" value="<?php echo $row['gprice'] ?>" name="gprice">
                  </div>
                  <div class="form-group">
                    <label for="password-1">service 1</label>
                  <input type="text" class="form-control" value="<?php echo $row['gservice1'] ?>" name="gservice1">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 2</label>
                  <input type="text" class="form-control" value="<?php echo $row['gservice2'] ?>" name="gservice2">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 3</label>
                  <input type="text" class="form-control" value="<?php echo $row['gservice3'] ?>" name="gservice3">
                  </div>
                  <div class="form-group">
                    <label for="password-1">Service 4</label>
                  <input type="text" class="form-control" value="<?php echo $row['gservice4'] ?>" name="gservice4">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Service 5</label>
                  <input type="text" class="form-control" value="<?php echo $row['gservice5'] ?>" name="gservice5">
                  </div>
                  <div class="form-group">
                    <button class="btn  btn-block" type="submit" name="submit" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white">Submit</button>
                  </div>
</form>

                       <?php

                         }
                      }
                       ?>
  

              </div>
            </div>
          </div>
         
        </div>
      </div>
        
                    </div>
                </div>
            </div>
			</div></div>
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
