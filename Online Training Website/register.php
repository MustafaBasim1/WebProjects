<?php

include 'config.php';

if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select_users) > 0) {
      $message[] = '<h2>user already exist!</h2>';
   } else {
      if ($pass != $cpass) {
         $message[] = '<h2>confirm password not matched!</h2>';
      } else {
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = '<h2>registered successfully!</h2>';
         header('location:login.php');
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   <link rel="shortcut icon" href="images/png-clipart-functional-reactive-programming-functional-programming-reactive-extensions-rxjs-geography-lesson-plans-clouds-purple-violet.png" type="image/x-icon">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


   <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

      body {
         font-family: 'Poppins', sans-serif;
         background-color: #6f42c1;


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

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background:#6f42c1;">
               <div class="featured-image mb-3">
                  <img src="images/coding-blue.svg" class="img-fluid" style="width: 250px;">
               </div>
               <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
               <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">
               <div class="row align-items-center">
                  <div class="header-text mb-4">
                     <h2>Hello,Again</h2>
                     <p>We are happy to have you back.</p>
                  </div>
                  <div class="input-group mb-3">
                     <input type="text" name="name" class="form-control form-control-lg bg-light fs-6" required placeholder="Fullname">
                  </div>
                  <div class="input-group mb-3">
                     <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" required placeholder="Email address">
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" required placeholder="Password">
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" name="cpassword" class="form-control form-control-lg bg-light fs-6" required placeholder=" Confirm Password">
                  </div>

                  <div class="input-group mb-3">
                     <select name="user_type" class="box">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                     </select>
                  </div>
                  <div class="input-group mb-3">
                     <input style="background-color:#6f42c1; color:white;" type="submit" class="btn btn-lg  w-100 fs-6" name="submit" value="register now" class="btn">
                  </div>
                  <div class="input-group mb-3">
                     <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Sign up with Google</small></button>
                  </div>
                  <div class="row">
                     <small>Already have account ? <a href="login.php"> Sign in</a></small>
                  </div>
               </div>
            </div>

         </div>
      </div>




   </form>












</body>

</html>