<!DOCTYPE html>
<?php
    include("connection.php");
?>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EventSphere</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>
    <!-- Page Preloder -->
   <!--  <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <?php
	include("header.php");
	?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Event Schedule</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>Our Schedule</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Schedule Table Section Begin -->
    <section class="schedule-table-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Marketing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Technology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Conference</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">Event</a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="schedule-table-content">
                                    <table><?php 
                      $query="SELECT * from `m-schedule` WHERE 1";
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
                                        <thead>
                                            <tr>
                                                <th><strong>Time</strong></th>
                                                <th>
                                                    <strong>Day 1</strong>
                                                    <span><?php echo $row['date1'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 2</strong>
                                                    <span><?php echo $row['date2'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 3</strong>
                                                    <span><?php echo $row['date3'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 4</strong>
                                                    <span><?php echo $row['date4'] ?></span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="event-time"><?php echo $row['1time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event1'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['2time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event2'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['3time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event3'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['4time'] ?>AM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event4'] ?></h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php

                         }
                      }
                       ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="schedule-table-content">
                                    <table><?php 
                      $query="SELECT * from `b-schedule` WHERE 1";
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
                                        <thead>
                                            <tr>
                                                <th><strong>Time</strong></th>
                                                <th>
                                                    <strong>Day 1</strong>
                                                    <span><?php echo $row['date1'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 2</strong>
                                                    <span><?php echo $row['date2'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 3</strong>
                                                    <span><?php echo $row['date3'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 4</strong>
                                                    <span><?php echo $row['date4'] ?></span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="event-time"><?php echo $row['1time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event1'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['2time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event2'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['3time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event3'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['4time'] ?>AM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event4'] ?></h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php

                         }
                      }
                       ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="schedule-table-content">
                                    <table><?php 
                      $query="SELECT * from `t-schedule` WHERE 1";
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
                                        <thead>
                                            <tr>
                                                <th><strong>Time</strong></th>
                                                <th>
                                                    <strong>Day 1</strong>
                                                    <span><?php echo $row['date1'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 2</strong>
                                                    <span><?php echo $row['date2'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 3</strong>
                                                    <span><?php echo $row['date3'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 4</strong>
                                                    <span><?php echo $row['date4'] ?></span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="event-time"><?php echo $row['1time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event1'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['2time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event2'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['3time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event3'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['4time'] ?>AM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event4'] ?></h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php

                         }
                      }
                       ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="schedule-table-content">
                                    <table><?php 
                      $query="SELECT * from `c-schedule` WHERE 1";
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
                                        <thead>
                                            <tr>
                                                <th><strong>Time</strong></th>
                                                <th>
                                                    <strong>Day 1</strong>
                                                    <span><?php echo $row['date1'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 2</strong>
                                                    <span><?php echo $row['date2'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 3</strong>
                                                    <span><?php echo $row['date3'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 4</strong>
                                                    <span><?php echo $row['date4'] ?></span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="event-time"><?php echo $row['1time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event1'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['2time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event2'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['3time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event3'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['4time'] ?>AM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event4'] ?></h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php

                         }
                      }
                       ?>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-5" role="tabpanel">
                                <div class="schedule-table-content">
                                    <table><?php 
                      $query="SELECT * from `e-schedule` WHERE 1";
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
                                        <thead>
                                            <tr>
                                                <th><strong>Time</strong></th>
                                                <th>
                                                    <strong>Day 1</strong>
                                                    <span><?php echo $row['date1'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 2</strong>
                                                    <span><?php echo $row['date2'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 3</strong>
                                                    <span><?php echo $row['date3'] ?></span>
                                                </th>
                                                <th>
                                                    <strong>Day 4</strong>
                                                    <span><?php echo $row['date4'] ?></span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="event-time"><?php echo $row['1time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event1'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event1'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['2time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event2'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event2'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['3time'] ?>PM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event3'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event3'] ?></h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="event-time"><?php echo $row['4time'] ?>AM</td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d1event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d2event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d3event4'] ?></h5>
                                                </td>
                                                <td class="break hover-bg">
                                                    <h5><?php echo $row['d4event4'] ?></h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php

                         }
                      }
                       ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule Table Section End -->

    <!-- Newslatter Section Begin -->

    <!-- Newslatter Section End -->

    <!-- Contact Section Begin -->
    
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <?php
	include("footer.php");
	?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script>$(document).ready(function () {
      $('.a').DataTable();
  });</script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>