

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
               
                    
                        <h4 class="page-title">Bussiness Event Schedule</h4>
                        <?php
                      $query="SELECT *from `b-schedule` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                            $id=$row['id'];
                            $time1=$row['1time'];
                            $time2=$row['2time'];
                  $time3=$row['3time'];
                  $time4=$row['4time'];
                  $date1=$row['date1'];
                  $date2=$row['date2'];
                  $date3=$row['date3'];
                  $date4=$row['date4'];
                  $d1event1=$row['d1event1'];
                  $d1event2=$row['d1event2'];
                  $d1event3=$row['d1event3'];
                  $d1event4=$row['d1event4'];
                  $d2event1=$row['d2event1'];
                  $d2event2=$row['d2event2'];
                  $d2event3=$row['d2event3'];
                  $d2event4=$row['d2event4'];
                  $d3event1=$row['d3event1'];
                  $d3event2=$row['d3event2'];
                  $d3event3=$row['d3event3'];
                  $d3event4=$row['d3event4'];
                  $d4event1=$row['d4event1'];
                  $d4event2=$row['d4event2'];
                  $d4event3=$row['d4event3'];
                  $d4event4=$row['d4event4'];

                      ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">

                        <thead>
                         <tr>
                          <th><center>id</center></th>
                          <th><center>ScheduleTime1</center></th>
                          <th><center>ScheduleTime2</center></th>
                          <th><center>ScheduleTime3</center></th>
                          <th><center>ScheduleTime4</center></th>
                          <th><center>ScheduleDate1</center></th>
                          <th><center>ScheduleDate2</center></th>
                          <th><center>ScheduleDate3</center></th>
                          <th><center>ScheduleDate4</center></th>
                          <th><center>EventSchedule1-D1</center></th>
                          <th><center>EventSchedule2-D1</center></th>
                          <th><center>EventSchedule3-D1</center></th>
                          <th><center>EventSchedule4-D1</center></th>
                          <th><center>EventSchedule1-D2</center></th>
                          <th><center>EventSchedule2-D2</center></th>
                          <th><center>EventSchedule3-D2</center></th>
                          <th><center>EventSchedule4-D2</center></th>
                          <th><center>EventSchedule1-D3</center></th>
                          <th><center>EventSchedule2-D3</center></th>
                          <th><center>EventSchedule3-D3</center></th>
                          <th><center>EventSchedule4-D3</center></th>
                          <th><center>EventSchedule1-D4</center></th>
                          <th><center>EventSchedule2-D4</center></th>
                          <th><center>EventSchedule3-D4</center></th>
                          <th><center>EventSchedule4-D4</center></th>
                         <th><center>Action</center></th>
                        </tr>
                      </thead>
                      <tbody >

                      <tr>
                        <td><center><?php echo "$id"; ?></center></td>
                        <td><center><?php echo "$time1"; ?></center></td>
                        <td><center><?php echo "$time2"; ?></center></td>
                        <td><center><?php echo "$time3"; ?></center></td>
                        <td><center><?php echo "$time4"; ?></center></td>
                        <td><center><?php echo "$date1"; ?></td></center>
                        <td><center><?php echo "$date2"; ?></td></center>
                        <td><center><?php echo "$date3"; ?></center></td>
                        <td><center><?php echo "$date4"; ?></center></td>
                        <td><center><?php echo "$d1event1"; ?></center></td>
                        <td><center><?php echo "$d1event2"; ?></center></td>
                        <td><center><?php echo "$d1event3"; ?></td></center>
                        <td><center><?php echo "$d1event4"; ?></td></center>
                        <td><center><?php echo "$d2event1"; ?></center></td>
                        <td><center><?php echo "$d2event2"; ?></center></td>
                        <td><center><?php echo "$d2event3"; ?></center></td>
                        <td><center><?php echo "$d2event4"; ?></center></td>
                        <td><center><?php echo "$d3event1"; ?></td></center>
                        <td><center><?php echo "$d3event2"; ?></td></center>
                        <td><center><?php echo "$d3event3"; ?></center></td>
                        <td><center><?php echo "$d3event4"; ?></center></td>
                        <td><center><?php echo "$d4event1"; ?></center></td>
                        <td><center><?php echo "$d4event2"; ?></center></td>
                        <td><center><?php echo "$d4event3"; ?></td></center>
                        <td><center><?php echo "$d4event4"; ?></td></center>

                        <td><center><a href="b-event-schedule-edit.php?id=<?php  echo $id ?>"><input type="submit" class="btn btn-sm" value="Edit" name="" style="background-image: linear-gradient(120deg, #2547ee 0%, #e7e9e5 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white;"></a>
                          <a href="b-event-schedule-del.php?id=<?php echo $id ?>"><input type="submit" class="btn  btn-sm" value="Delete" name="" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white"></a></center></td>
                      </tr>

                      </tbody></table>


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