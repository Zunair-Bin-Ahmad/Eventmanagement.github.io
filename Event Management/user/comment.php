

    <!-- Comment Form Section Begin -->
    <div class="comment-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Leave A Comment</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <form class="comment-form" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea placeholder="Messages" name="review"></textarea>
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
                  $review=$_POST['review'];
                  



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
                  ($review=="")
                  {
                   echo " review field is empty";
                 }

                  else{

                  $query="INSERT INTO `comment`(`name`,`email`,`review`) VALUES ('$name','$email','$review')";
                  
                  $result=mysqli_query($connect,$query);
                  if (!$result) {
                    echo "";
                  }
                  else
                  {
                    echo "";
                  }

                }

                  } 
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Comment Form Section End -->

    