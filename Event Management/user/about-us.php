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
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet">
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
                        <h2>About Us</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about-section spad">
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
    <!-- About Section End -->

  

    <!-- Testimonial Section Begin --> <?php
    include("connection.php");
?>
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Reviews</h2>
                        <p>Our customers are our biggest supporters. What do they think of us?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="testimonial-slider owl-carousel">

                           <?php 
                      $query="SELECT * from `comment` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                          $id=$row['id'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $review=$row['review'];
                            ?> 
                            <div class="col-lg-6">
                                <div class="testimonial-item">
                                    <div class="ti-author">
                                        <div class="ta-text">
                                            <h5><?php echo $row['name'] ?></h5>
                                            <span><?php echo $row['email'] ?></span>
                                        </div>
                                    </div>
                                    <p><?php echo $row['review'] ?></p>
                                </div>
                            </div>
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
    </section>
    <!-- Testimonial Section End -->

    
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