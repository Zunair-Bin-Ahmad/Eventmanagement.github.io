<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
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
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form  method="POST" action="<?php $_SERVER['PHP_SELF'];?>" class="form-signin">
						<div class="account-logo">
                            <img src="images/f-logo.png" style="width: 30%;" alt="">
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" autofocus="" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        
                        <div class="form-group text-center">
                            <button type="submit" class="btn  account-btn" name="submit" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white">Login</button>
                        </div>

                         <div class="form-group text-center">
                            <a href="Signup.php"><button type="button" class="btn  account-btn" name="signup" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white">Signup</button></a> 
                        </div>
                        
                    </form>
 <?php
            if(isset($_POST['submit']))
            {
              include 'connection.php';
              
              $email=$_POST['email'];
              $password=md5($_POST['password']);
              $query="SELECT * FROM `signup` WHERE email='".$email."' and password='".$password."'";
              $run=mysqli_query($connect,$query);
              // var_dump($run);
              // die;
              if (mysqli_num_rows($run)>0) {

                $_SESSION['id']=1;
                
                header("Location:eventtime.php");
                session_write_close();

              }
              else{
                echo "Invalid Login Details";
              } 
            }
           ?>
                   
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->
</html>