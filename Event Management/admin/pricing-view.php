

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
               
                    
                        <h4 class="page-title">View Event Time</h4>
                        <?php
                      $query="SELECT *from `pricing` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                            $id=$row['id'];
                            $bprice=$row['bprice'];
                            $bservice1=$row['bservice1'];
                            $bservice2=$row['bservice2'];
                            $bservice3=$row['bservice3'];
                            $bservice4=$row['bservice4'];
                            $bservice5=$row['bservice5'];
                            $fprice=$row['fprice'];
                            $fservice1=$row['fservice1'];
                            $fservice2=$row['fservice2'];
                            $fservice3=$row['fservice3'];
                            $fservice4=$row['fservice4'];
                            $fservice5=$row['fservice5'];
                            $fservice6=$row['fservice6'];
                            $gprice=$row['gprice'];
                            $gservice1=$row['gservice1'];
                            $gservice2=$row['gservice2'];
                            $gservice3=$row['gservice3'];
                            $gservice4=$row['gservice4'];
                            $gservice5=$row['gservice5'];

                      ?>
                      <h3>Basic Pass</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">

                        <thead>
                         <tr>
                          <th><center>id</center></th>
                          <th><center>Price</center></th>
                          <th><center>Service1</center></th>
                          <th><center>Service2</center></th>
                          <th><center>Service3</center></th>
                         <th><center>Service4</center></th>
                         <th><center>Service5</center></th>
                         <th><center>Action</center></th>
                        </tr>
                      </thead>
                      <tbody >

                      <tr>
                        <td><center><?php echo "$id"; ?></center></td>
                        <td><center><?php echo "$bprice"; ?></center></td>
                        <td><center><?php echo "$bservice1"; ?></center></td>

                        <td><center><?php echo "$bservice2"; ?></center></td>
                        <td><center><?php echo "$bservice3"; ?></center></td>
                        <td><center><?php echo "$bservice4"; ?></td></center>
                        <td><center><?php echo "$bservice5"; ?></td></center>

                        <td><center><a href="pricing-edit.php?id=<?php  echo $id ?>"><input type="submit" class="btn btn-sm" value="Edit" name="" style="background-image: linear-gradient(120deg, #2547ee 0%, #e7e9e5 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white;"></a>
                          <a href="pricing-del.php?id=<?php echo $id ?>"><input type="submit" class="btn  btn-sm" value="Delete" name="" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white"></a></center></td>
                      </tr>

                      </tbody></table>
<h3>Full Pass</h3>

                      <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">

                        <thead>
                         <tr>
                          <th><center>id</center></th>
                          <th><center>Price</center></th>
                          <th><center>Service1</center></th>
                          <th><center>Service2</center></th>
                          <th><center>Service3</center></th>
                         <th><center>Service4</center></th>
                         <th><center>Service5</center></th>
                         <th><center>Service6</center></th>
                         <th><center>Action</center></th>
                        </tr>
                      </thead>
                      <tbody >

                      <tr>
                      <td><center><?php echo "$id"; ?></center></td>
                        <td><center><?php echo "$fprice"; ?></center></td>
                        <td><center><?php echo "$fservice1"; ?></center></td>

                        <td><center><?php echo "$fservice2"; ?></center></td>
                        <td><center><?php echo "$fservice3"; ?></center></td>
                        <td><center><?php echo "$fservice4"; ?></td></center>
                        <td><center><?php echo "$fservice5"; ?></td></center>
                        <td><center><?php echo "$fservice6"; ?></td></center>

                        <td><center><a href="pricing-edit.php?id=<?php  echo $id ?>"><input type="submit" class="btn btn-sm" value="Edit" name="" style="background-image: linear-gradient(120deg, #2547ee 0%, #e7e9e5 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white;"></a>
                          <a href="pricing-del.php?id=<?php echo $id ?>"><input type="submit" class="btn  btn-sm" value="Delete" name="" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white"></a></center></td>
                      </tr>

                      </tbody></table>

<h3>Group Pass</h3>
                      <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">

                        <thead>
                         <tr>
                          <th><center>id</center></th>
                          <th><center>Price</center></th>
                          <th><center>Service1</center></th>
                          <th><center>Service2</center></th>
                          <th><center>Service3</center></th>
                         <th><center>Service4</center></th>
                         <th><center>Service5</center></th>
                         <th><center>Action</center></th>
                        </tr>
                      </thead>
                      <tbody >

                      <tr>
                      <td><center><?php echo "$id"; ?></center></td>
                        <td><center><?php echo "$gprice"; ?></center></td>
                        <td><center><?php echo "$gservice1"; ?></center></td>
                        <td><center><?php echo "$gservice2"; ?></center></td>
                        <td><center><?php echo "$gservice3"; ?></center></td>
                        <td><center><?php echo "$gservice4"; ?></td></center>
                        <td><center><?php echo "$gservice5"; ?></td></center>

                        <td><center><a href="pricing-edit.php?id=<?php  echo $id ?>"><input type="submit" class="btn btn-sm" value="Edit" name="" style="background-image: linear-gradient(120deg, #2547ee 0%, #e7e9e5 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white;"></a>
                          <a href="pricing-del.php?id=<?php echo $id ?>"><input type="submit" class="btn  btn-sm" value="Delete" name="" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white"></a></center></td>
                      </tr>

                      </tbody></table>
                      <tr>

                      <?php

                         }
                      }
                       ?>
                     </tbody>
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