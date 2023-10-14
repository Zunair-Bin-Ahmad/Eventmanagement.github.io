

<?php



session_start();

if (!isset($_SESSION['id'])) 
{
header("Location:index.php");
}

 ?>


<?php
                include 'connection.php';
                ?>
                <?php $msg='';
if (isset($_GET['msg'])) {
  $msg=$_GET['msg'];
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- leave-type24:06-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>EventSphere Admin panel</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
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

                        <h4 class="page-title">View About us</h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                        <thead>
                         <tr>
                          <th><center>id</center></th>
                          <th><center>Image</center></th>
                          <th><center>Name</center></th>
                         <th><center>Designation</center></th>
                         <th><center>Facebook</center></th>
                         <th><center>Instagram</center></th>
                         <th><center>Gmail</center></th>
                         <th><center>About</center></th>

                         <th><center>Action</center></th>
                        </tr>
                      </thead>
                       <?php 
                      $query="SELECT *from `team` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {

                          $id=$row['id'];
                          $image=$row['image'];
                          $name=$row['name'];
                          $designation=$row['designation'];
                          $facebook=$row['facebook'];
                          $instagram=$row['instagram'];
                          $gmail=$row['gmail'];
                          $about=$row['about'];

                      ?>
                      <tbody >

                      <tr>
                        <td><center><?php echo "$id"; ?></center></td>
                          <td><center><img src="../admin/<?php echo $row['image']?>" style=" height: 50%; width:100%" ></center></td>
                        <td><center><?php echo "$name"; ?></center></td>
                        <td><center><?php echo "$designation"; ?></center></td>
                        <td><center><?php echo "$facebook"; ?></center></td>
                        <td><center><?php echo "$instagram"; ?></center></td>
                        <td><center><?php echo "$gmail"; ?></center></td>
                        <td><center><?php echo "$about"; ?></center></td>

                        <td><center><a href="team-edit.php?id=<?php  echo $id ?>"><input type="submit" class="btn btn-sm" value="Edit" name="" style="background-image: linear-gradient(120deg, #2547ee 0%, #e7e9e5 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white;"></a>
                          <a href="team-del.php?id=<?php echo $id ?>"><input type="submit" class="btn  btn-sm" value="Delete" name="" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white"></a></center></td>
                      </tr>
                     </tbody><?php

                         }
                      }
                       ?>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
             <?php
            if ($msg=='') {
                    
                  }
                  else{
                      echo "<div class='alert alert-success'>Data Deleted <b>Successfully</b></div>";
                  }  
                   ?>
        </div></div>
    
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- leave-type24:06-->
</html>