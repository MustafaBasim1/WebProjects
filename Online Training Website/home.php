<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


   <link rel="shortcut icon" href="images/png-clipart-functional-reactive-programming-functional-programming-reactive-extensions-rxjs-geography-lesson-plans-clouds-purple-violet.png" type="image/x-icon">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <title>home</title>


   <style>
      /* Increase the size of the heading */
      h1 {
         font-size: 36px;
      }

      /* Increase the size of the card icons */
      .card .h1 {
         font-size: 48px;
      }

      /* Increase the size of the card titles */
      .card .card-title {
         font-size: 24px;
      }
   </style>

</head>

<body>

   <?php include 'header.php'; ?>


   <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
      <div class="container">
         <div class="d-sm-flex align-items-center justify-content-between">
            <div>
               <h1>Become a <span class="text-warning"> Web Developer </span></h1>
               <p class="lead my-4">
                  We focus on teaching our students the fundamentals of the latest
                  and greatest technologies to prepare them for their first dev role
               </p>
               <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">
                  Start The Enrollment
               </button>
            </div>
            <img class="img-fluid w-25 d-none d-sm-block mb-3" src="images/png-clipart-functional-reactive-programming-functional-programming-reactive-extensions-rxjs-geography-lesson-plans-clouds-purple-violet.png" alt="" />
         </div>
      </div>
   </section>



   <!-- Boxes -->
   <section class="p-5">
      <div class="container">
         <div class="row text-center g-4">
            <div class="col-md">
               <div class="card bg-dark text-light">
                  <div class="card-body text-center">
                     <div class="h1 mb-3">
                        <i class="bi bi-laptop"></i>
                     </div>
                     <h3 class="card-title mb-3">Virtual</h3>
                     <p class="card-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Iure, quas quidem possimus dolorum esse eligendi?
                     </p>
                     <a href="#" class="btn btn-primary">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-md">
               <div class="card bg-dark text-light">
                  <div class="card-body text-center">
                     <div class="h1 mb-3">
                        <i class="bi bi-person-square"></i>
                     </div>
                     <h3 class="card-title mb-3">Hybrid</h3>
                     <p class="card-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Iure, quas quidem possimus dolorum esse eligendi?
                     </p>
                     <a href="#" class="btn btn-primary">Read More</a>
                  </div>
               </div>
            </div>
            <div class="col-md">
               <div class="card bg-dark text-light">
                  <div class="card-body text-center">
                     <div class="h1 mb-3">
                        <i class="bi bi-people"></i>
                     </div>
                     <h3 class="card-title mb-3">In Person</h3>
                     <p class="card-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Iure, quas quidem possimus dolorum esse eligendi?
                     </p>
                     <a href="#" class="btn btn-primary">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Learn Sections -->
   <section id="learn" class="p-5">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <div class="col-md">
               <img src="images/fundamentals.svg" class="img-fluid" alt="" />
            </div>
            <div class="col-md p-5">
               <h2>Learn The Fundamentals</h2>
               <p class="lead">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Similique deleniti possimus magnam corporis ratione facere!
               </p>
               <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
                  reiciendis eius autem eveniet mollitia, at asperiores suscipit
                  quae similique laboriosam iste minus placeat odit velit quos,
                  nulla architecto amet voluptates?
               </p>
               <a href="#" class="btn btn-light mt-3">
                  <i class="bi bi-chevron-right"></i> Read More
               </a>
            </div>
         </div>
      </div>
   </section>

   <section id="learn" class="mb-3 p-5 bg-dark text-light">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
               <h2>Learn React</h2>
               <p class="lead">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Similique deleniti possimus magnam corporis ratione facere!
               </p>
               <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
                  reiciendis eius autem eveniet mollitia, at asperiores suscipit
                  quae similique laboriosam iste minus placeat odit velit quos,
                  nulla architecto amet voluptates?
               </p>
               <a href="#" class="btn btn-light mt-3">
                  <i class="bi bi-chevron-right"></i> Read More
               </a>
            </div>
            <div class="col-md">
               <img src="images/react.svg" class="img-fluid" alt="" />
            </div>
         </div>
      </div>
   </section>

   <br>
   <br>




   <section id="instructors" class="p-5" style="background-color: #6f42c1;">
      <div class="container">
         <h2 class="text-center text-white">Our Instructors</h2>
         <p class="lead text-center text-white mb-5">
            Our instructors all have 5+ years working as a web developer in the
            industry
         </p>
         <div class="row g-4">
            <div class="col-md-6 col-lg-3">
               <div class="card bg-light">
                  <div class="card-body text-center">
                     <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3" alt="" />
                     <h3 class="card-title mb-3">John Doe</h3>
                     <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                     </p>
                     <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                  </div>
               </div>
            </div>

            <div class="col-md-6 col-lg-3">
               <div class="card bg-light">
                  <div class="card-body text-center">
                     <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3" alt="" />
                     <h3 class="card-title mb-3">Jane Doe</h3>
                     <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                     </p>
                     <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                  </div>
               </div>
            </div>

            <div class="col-md-6 col-lg-3">
               <div class="card bg-light">
                  <div class="card-body text-center">
                     <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3" alt="" />
                     <h3 class="card-title mb-3">Steve Smith</h3>
                     <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                     </p>
                     <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                  </div>
               </div>
            </div>

            <div class="col-md-6 col-lg-3">
               <div class="card bg-light">
                  <div class="card-body text-center">
                     <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3" alt="" />
                     <h3 class="card-title mb-3">Sara Smith</h3>
                     <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Assumenda accusamus nobis sed cupiditate iusto? Quibusdam.
                     </p>
                     <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                     <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>





   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>