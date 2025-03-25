<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

if (isset($_POST['send'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message sent already!';
   } else {
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>



   <link rel="shortcut icon" href="images/png-clipart-functional-reactive-programming-functional-programming-reactive-extensions-rxjs-geography-lesson-plans-clouds-purple-violet.png" type="image/x-icon">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">


   <style>
      body::before {
         display: block;
         content: '';
         height: 60px;
      }



      @media (min-width: 768px) {
         .news-input {
            width: 50%;
         }
      }

      @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");




      .row {
         box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;

      }

      .col-md-7 {
         padding: 20px;
      }

      .col-md-5 {
         background: #6f42c1;
         padding: 20px;
         color: white;

      }

      .form-control {
         height: 52px;
         background: #fff;
         color: #000;
         font-size: 14px;
         border-radius: 2px;
         -webkit-box-shadow: none !important;
         box-shadow: none !important;
         border: 1px solid rgba(0, 0, 0, 0.1);
      }

      .bi {
         font-size: 20px;
      }

      .d-flex p {
         font-size: 18px;
         padding-left: 10px;
         font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
   </style>

</head>

<body>

   <?php include 'header.php'; ?>

   
   <div class="heading">
      <h3>contact us</h3>
   </div>


   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

   <form action="" method="post">

      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <h4>Get in touch</h4>
               <br>
               <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter your name">
               </div>
               <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email">
               </div>
               <div class="mb-3">
                  <label for="formGroupExampleInput2" class="form-label">Contact Number</label>
                  <input type="text" name="number" class="form-control" id="formGroupExampleInput2" placeholder="Enter your number">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>
               <input type="submit" value="send message" name="send" class="btn btn-primary">

            </div>
            <div class="col-md-5 ">
               <h4>Contact us</h4>
               <hr>
               <div class="mt-4">
                  <div class="d-flex">
                     <i class="bi bi-geo-alt-fill"></i>
                     <p>Address: 198 West 100th Street, Suite 721 Erbil IQ 10016</p>
                  </div>
                  <hr>
                  <div class="d-flex">
                     <i class="bi bi-telephone-fill"></i>
                     <p>Contact :- 8888888888</p>
                  </div>
                  <hr>
                  <div class="d-flex">
                     <i class="bi bi-envelope-fill"></i>
                     <p>Email:- Contact@gmail.com</p>
                  </div>
                  <hr>
                  <div class="d-flex">
                     <i class="bi bi-browser-chrome"></i>
                     <p>Website: www.contact.com</p>
                  </div>
                  <hr>
               </div>
            </div>
         </div>
      </div>
   </form>


   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>


   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>