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
    <!-- Remember to include jQuery :) --> 

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
    <style type="text/css">
        .eabout
        {
            max-width: 100%;
            min-width: 100%;
            max-height: 11cm;
            min-height: 11cm;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    

    <!-- Header Section Begin -->
    <?php
	include("header.php");
	?>
    <!-- Header End -->

    <center><div id="ex1" class="modal mt-2">
  <p>Thanks for clicking. That felt good.</p>
  <a href="#" rel="modal:close">Close</a>
</div></center>

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-text">
                        <span>5 to 9 may 2019, mardavall hotel, New York</span>
                        <h2>Change Your Mind<br /> To Become Sucess</h2>
                        <a href="booking.php" class="primary-btn">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/hero-right.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Counter Section Begin -->
    <section class="counter-section bg-gradient">
        <?php 
                      $query="SELECT * from `eventtime` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                          $heading=$row['heading'];
                            $days=$row['days'];
                            $hours=$row['hours'];
                            $minutes=$row['minutes'];
                       
                      ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="counter-text">
                        <span>Conference Date</span>
                        <h3><?php echo $row['heading'] ?></h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cd-timer">
                        <div class="cd-item">
                            <span><?php echo $row['days'] ?></span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span><?php echo $row['hours'] ?></span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span><?php echo $row['minutes'] ?></span>
                            <p>Minutes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php

                         }
                      }
                       ?>
    </section>
    <!-- Counter Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about-section spad">
        <div class="container">
            <?php 
                      $query="SELECT * from `about` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                           $id=$row['id'];
                          $image=$row['image'];
                            $heading=$row['heading'];
                            $description=$row['description'];
                            $eheading=$row['eheading'];
                            $edescription=$row['edescription'];
                       
                      ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><?php echo $row['heading'] ?></h2>
                        <p class="f-para"><?php echo $row['description'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img class="eabout" src="../admin/<?php echo $row['image']?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h3><?php echo $row['eheading'] ?></h3>
                        <p><?php echo $row['edescription'] ?> </p>
                        
                    </div>
                </div>
            </div>  <?php

                         }
                      }
                       ?>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Team Member Section Begin -->
    <section class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Who’s speaking</h2>
                        <p>These are our communicators, you can see each person information</p>
                    </div>
                </div>
            </div>
        </div>
        <?php 
                      $query="SELECT * from `team` WHERE 1";
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
        <div class="member-item set-bg" data-setbg="../admin/<?php echo $row['image']?>">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="<?php echo $row['facebook']?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $row['instagram']?>"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $row['gmail']?>"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5><?php echo $row['name']?></h5>
                <span><?php echo $row['designation']?></span>
            </div>
        </div>
    <?php

                         }
                      }
                       ?>
    </section>
    <!-- Team Member Section End -->

    <!-- Schedule Section Begin -->
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
    <!-- Schedule Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section set-bg spad" data-setbg="img/pricing-bg.jpg">
        <div class="container">
             <?php 
                      $query="SELECT * from `pricing` WHERE 1";
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Ticket Pricing</h2>
                        <p>Get your event ticket plan</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>Basic Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span><?php echo $row['bprice'] ?></h2>
                        </div>
                        <ul>
                            <li><?php echo $row['bservice1'] ?></li>
                            <li><?php echo $row['bservice2'] ?></li>
                            <li><?php echo $row['bservice3'] ?></li>
                            <li><?php echo $row['bservice4'] ?></li>
                            <li><?php echo $row['bservice5'] ?></li>
                        </ul>
                        <a href="booking.php" class="price-btn">Book Now <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item top-rated">
                        <div class="tr-tag">
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Full Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span><?php echo $row['fprice'] ?></h2>
                        </div>
                        <ul>
                            <li><?php echo $row['fservice1'] ?></li>
                            <li><?php echo $row['fservice2'] ?></li>
                            <li><?php echo $row['fservice3'] ?></li>
                            <li><?php echo $row['fservice4'] ?></li>
                            <li><?php echo $row['fservice5'] ?></li>
                            <li><?php echo $row['fservice6'] ?></li>
                        </ul>
                        <a href="booking.php" class="price-btn">Book Now<span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>Group Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span><?php echo $row['gprice'] ?></h2>
                        </div>
                        <ul>
                            <li><?php echo $row['gservice1'] ?></li>
                            <li><?php echo $row['gservice2'] ?></li>
                            <li><?php echo $row['gservice3'] ?></li>
                            <li><?php echo $row['gservice4'] ?></li>
                            <li><?php echo $row['gservice5'] ?></li>
                        </ul>
                        <a href="booking.php" class="price-btn">Book Now <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div> <?php

                         }
                      }
                       ?>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- latest BLog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest News</h2>
                        <p>Do not miss anything topic abput the event</p>
                    </div>
                </div>
            </div>
                    <div class="row">
                         <?php 
                      $query="SELECT * from `blog` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                           $id=$row['id'];
                          $image=$row['image'];
                          $heading=$row['heading'];
                          $type=$row['type'];
                          $date=$row['date'];
                       
                      ?>
                <div class="col-lg-3">
                    
                      
                       
                            <div class="blog-item set-bg" data-setbg="../admin/images/<?php echo $row['image']?>">
                                <div class="bi-tag bg-gradient"><?php echo $row['type']?></div>
                                <div class="bi-text">
                                    <h5 class="text-white fs-2"><?php echo $row['heading']?></h5>
                                    <span><i class="fa fa-clock-o"></i> <?php echo $row['date']?></span>
                                </div>
                            </div> </div>
                         <?php

                         }
                      }
                       ?>
                    </div>
                    
            
        </div>
    </section>

    <!-- Button trigger modal -->

<!-- Modal -->

    <!-- latest BLog Section End -->
 <!-- Comment Section -->
<?php
    include("comment.php");
    ?> 
<!-- Comment Section -->
    <!-- Footer Section Begin -->
    <?php
	include("footer.php");
	?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>