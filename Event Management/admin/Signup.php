
<!DOCTYPE html>
<html lang="en">


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
                    <form  method="POST"  class="form-signin">
						<div class="account-logo">
                           <img src="images/f-logo.png" style="width: 20%;" alt="">
                        </div>
             <div class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus="" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" autofocus="" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        
                        <div class="form-group text-center">
                          <a href="Signup.php"><button type="submit" class="btn  account-btn" name="signup" style="background-image: linear-gradient(120deg, #ee8425 0%, #f9488b 100%), linear-gradient(120deg, #ee8425 0%, #f9488b 100%);color: white">Submit</button></a>  
                        </div>


                        
                    </form>
 <?php
                include 'connection.php';
if(isset($_POST['signup'])){

    $name=$_POST['name'];
                  $email=$_POST['email'];
                  $password=md5($_POST['password']);
                  


                  

                  $query="INSERT INTO `signup`(`email`, `password` ,`name`) VALUES ('$email','$password','$name')";
                 
                  $result=mysqli_query($connect,$query);
                  if (!$result) {
                    echo "Data Not Inserted";
                  }
                  else
                  {
                    echo "Data Inserted";
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