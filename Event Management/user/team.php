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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
                        <h2>Our Team Members</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>Our Team Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Speaker Section Begin -->
    <section class="speaker-section spad">
        <div class="container">
            <div class="row">
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
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="../admin/<?php echo $row['image']?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo $row['name']?></h4>
                                        <span><?php echo $row['designation']?></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="<?php echo $row['facebook']?>"><i class="fa fa-facebook"></i></a>
                                        <a href="<?php echo $row['instagram']?>"><i class="fa fa-twitter"></i></a>
                                        <a href="<?php echo $row['gmail']?>"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <p><?php echo $row['about']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php

                         }
                      }
                       ?>
            </div>
        </div>
    </section>
    <!-- Speaker Section End -->

    

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