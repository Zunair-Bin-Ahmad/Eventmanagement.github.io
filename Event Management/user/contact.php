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

    <!-- Contact Top Content Section Begin -->
    <section class="contact-content-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cc-text set-bg" data-setbg="img/contact-content-bg.jpg">
                        <div class="row">
                            <?php 
                      $query="SELECT * from `address` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {
                          $address=$row['address'];
                            $phone=$row['phone'];
                            $email=$row['email'];
                            $website=$row['website'];
                       
                      ?>
                            <div class="col-lg-8 offset-lg-2" style="text-align: center;">
                                <div class="section-title" style="text-align: center;">
                                    <h2>Location</h2>
                                    <p>Get directions to our event center</p>
                                </div>
                                <div class="cs-text">
                                    <div class="ct-address">
                                        <span>Address:</span>
                                        <p><?php echo $row['address'] ?></p>
                                    </div>
                                    <ul>
                                        <li>
                                            <span>Phone:</span>
                                            <?php echo $row['phone'] ?>
                                        </li>
                                        <li>
                                            <span>Email:</span>
                                            <?php echo $row['email'] ?>
                                        </li>
                                    </ul>
                                    <div class="ct-links">
                                        <span>Website:</span>
                                        <p><?php echo $row['website'] ?></p>
                                    </div>
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
    </section>
    <!-- Contact Top Content Section End -->

    <!-- Contact Form Section Begin -->
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Contact Us By Email!</h2>
                        <p>Fill out the form below to recieve a free and confidential intial consultation.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="comment-form contact-form"  method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" placeholder="Name" name="name">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Email" name="email">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Phone" name="phone">
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea placeholder="Messages" name="message"></textarea>
                                <button type="submit" name="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <?php
                include 'connection.php';

if(isset($_POST['submit']))
{
                  $name=$_POST['name'];
                  $email=$_POST['email'];
                  $phone=$_POST['phone'];
                  $message=$_POST['message'];

                if ($name=="")
                   {
                    echo " name field is empty";
                  }
                  else if
                  ($email=="")
                  {
                   echo " email field is empty";
                 }
                 else if
                  ($phone=="")
                  {
                   echo " phone field is empty";
                 }
                 else if
                  ($message=="")
                  {
                   echo " message field is empty";
                 }
                 
                  else{

                  $query="INSERT INTO `contactus`(`name`,`phone`,`email`,`message`) VALUES ('$name','$phone','$email','$message')";
                  
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
        </div>
    </section>
    <!-- Contact Form Section End -->

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