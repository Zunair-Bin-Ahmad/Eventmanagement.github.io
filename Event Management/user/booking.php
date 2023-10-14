
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
    <div class="comment-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Booking Form</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <form class="form" method="POST" enctype="multipart/form-data">
            

                  <div class="form-group">
                    <label for="password-1">Name</label>
                  <input type="text" class="form-control" name="name">
                  </div>
          <div class="form-group">
                    <label for="password-1">Catagory</label>
                  <select class="form-select col-lg-12 input is-large py-2"  name="event" id="event" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <?php
                    include 'connection.php';
 
                      $query="SELECT *from `catagory` WHERE 1";
                      $run=mysqli_query($connect,$query);
                      if (mysqli_num_rows($run)>0) {
                        while($row=mysqli_fetch_array($run))
                        {

                          $id=$row['id'];
                           $name=$row['name'];
           
                      ?>

                    <option value="<?php echo $row['name']; ?>" ><?php echo $row['name']; ?></option>

                    <?php

                         }
                      }
                       ?>
                  </select>
                  </div>
 

                  <div class="form-group">
                    <label for="password-1">Address</label>
                    <input type="text" class="form-control" name="address">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Phone</label>
                    <input type="text" class="form-control" name="phone">
                  </div>

                  <div class="form-group">
                    <label for="password-1">Email</label>
                    <input type="text" class="form-control" name="email">
                  </div>


                  
                  <div class="form-group">
                   <button class="btn  btn-block" type="submit" name="submit" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white">Submit</button>
                  </div>
                </form>

              <?php
                include 'connection.php';

if(isset($_POST['submit']))
{
                 

                  $name=$_POST['name'];
                  $address=$_POST['address'];

                  $email=$_POST['email'];
                  $event=$_POST['event'];

                  $phone=$_POST['phone'];
                  


                if ($name=="")
                   {
                    echo " name field is empty";
                  }


                  else if ($email=="")
                   {
                    
                    echo "email field is empty";
                  }
                  else if ($event=="")
                   {
                    echo "event field is empty";
                  }
                  else if ($address=="")
                   {
                    echo "address field is empty";
                  }
                  else if ($phone=="")
                   {
                    echo "phone field is empty";
                  }

                 




                 
                  else{

                  $query="INSERT INTO `eventbooking`(`name`,`address`,`phone`,`email`,`event`) VALUES ('$name','$address','$phone','$email','$event')";
                  
                  $result=mysqli_query($connect,$query);
                  if (!$result) {
                    echo "Data Not Inserted";
                  }
                  else
                  {
                    echo "<div class='alert alert-success'>Event Booking Completed</div>";
                  }

                }

                  }
                ?>

                </div>
            </div>
        </div>
    </div>
</body></html>