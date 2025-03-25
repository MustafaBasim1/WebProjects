<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select_users) > 0) {

      $row = mysqli_fetch_assoc($select_users);

      if ($row['user_type'] == 'admin') {

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');
      } elseif ($row['user_type'] == 'user') {

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');
      }
   } else {
      $message[] = '<h2>incorrect email or password!</h2>';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   <link rel="shortcut icon" href="images/png-clipart-functional-reactive-programming-functional-programming-reactive-extensions-rxjs-geography-lesson-plans-clouds-purple-violet.png" type="image/x-icon">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



   <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

      body {
         font-family: 'Poppins', sans-serif;
         background: #ececec;
      }

      /*------------ Login container ------------*/

      .box-area {
         width: 930px;
      }

      /*------------ Right box ------------*/

      .right-box {
         padding: 40px 30px 40px 40px;
      }

      /*------------ Custom Placeholder ------------*/

      ::placeholder {
         font-size: 16px;
      }

      .rounded-4 {
         border-radius: 20px;
      }

      .rounded-5 {
         border-radius: 30px;
      }


      /*------------ For small screens------------*/

      @media only screen and (max-width: 768px) {

         .box-area {
            margin: 0 10px;

         }

         .left-box {
            height: 100px;
            overflow: hidden;
         }

         .right-box {
            padding: 20px;
         }

      }


      body {

         background-color: #6f42c1;
      }
   </style>


</head>






<body>

   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }
   ?>


   <form action="" method="post">

      <!----------------------- Main Container -------------------------->

      <div class="container d-flex justify-content-center align-items-center min-vh-100">

         <!----------------------- Login Container -------------------------->

         <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #6f42c1;">
               <div class="featured-image mb-3">
                  <img src="images/png-clipart-functional-reactive-programming-functional-programming-reactive-extensions-rxjs-geography-lesson-plans-clouds-purple-violet.png" class="img-fluid" style="width: 250px;">
               </div>
               <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
               <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
               <div class="row align-items-center">
                  <div class="header-text mb-4">
                     <h2>Hello</h2>
                     <p>We are happy to have you in our website.</p>
                  </div>
                  <div class="input-group mb-3">
                     <input type="email" class="form-control form-control-lg bg-light fs-6" name="email" placeholder="enter your email" required>
                  </div>
                  <div class="input-group mb-1">
                     <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="enter your password" required>
                  </div>
                  <div class="input-group mb-5 d-flex justify-content-between">
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                     </div>
                     <div class="forgot">
                        <small><a href="#">Forgot Password?</a></small>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input style="background-color:#6f42c1; color:white; " class="btn btn-lg  w-100 fs-6" type="submit" name="submit" value="login now" class="btn">
                  </div>
                  <div class="input-group mb-3">
                     <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                  </div>
                  <div class="row">
                     <small>Don't have account? <a href="register.php">Sign Up</a></small>
                  </div>
               </div>
            </div>

         </div>
      </div>




   </form>

























</body>

</html>