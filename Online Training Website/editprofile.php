<?php
session_start();
include "config.php";

if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if required fields are not empty
    if (!empty($name) && !empty($email)) {
        $updateQuery = "UPDATE users SET name='$name', email='$email'";

        // Update password only if it's provided
        if (!empty($password)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password securely
            $updateQuery .= ", password='$hashedPassword'";
        }

        $updateQuery .= " WHERE id='$id'";

        $result = mysqli_query($conn, $updateQuery);

        if ($result) {
            // Profile updated successfully
            header('Location: login.php');
            exit();
        } else {
            // Error updating profile
            header('Location: editprofile.php?error=update');
            exit();
        }
    } else {
        // Required fields are empty
        header('Location: editprofile.php?error=empty');
        exit();
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
                        <img src="images/png-clipart-functional-reactive-programming-functional-programming-reactive-extensions-rxjs-geography-lesson-plans-clouds-purple-violet.png" class="img-fluid" style="width: 250px;">
                    </div>
                    <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                    <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
                </div>

                <!-------------------- ------ Right Box ---------------------------->

                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <h2>Edit profile</h2>
                            <p>please edit your profile well</p>
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
                            <input type="submit" style="background-color:#6f42c1; color:white; " class="btn btn-lg  w-100 fs-6" name="submit" value="UPDATE" class="btn">
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </form>












</body>

</html>