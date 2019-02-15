<?php


    include 'dp.php';

    if (isset($_POST['sign_up'])) {
      $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname'];
      $phone= $_POST['phone'];
      $email= $_POST['email'];
      $password= $_POST['password'];


      if(empty($firstname) || !preg_match("/^[a-zA-Z ]*$/",$firstname)){
        echo '<script language="javascript">
       alert("un valid name put valid one")
        </script>';

       }

       elseif (empty($lastname) || !preg_match("/^[a-zA-Z ]*$/",$lastname)) {
         echo '<script language="javascript">
        alert("un valid name put valid one")
         </script>';
       }

       elseif(empty($phone))
       {
         echo '<script language="javascript">
        alert("un valid phoneNumber put valid one")
         </script>';

       }

       elseif(empty($email)||!filter_var($email,FILTER_VALIDATE_EMAIL))
       {
         echo '<script language="javascript">
        alert("un valid Email put valid one")
         </script>';
       }
       elseif(empty($password))
       {
         echo '<script language="javascript">
        alert("un valid Email put valid one")
         </script>';
       }

      else {
        $sql="INSERT INTO task3 (firstname,lastname,phone,email,password)
        VALUES('$firstname','$lastname','$phone','$email','$password')";

        mysqli_query($conn,$sql);
        header('location:sign%20in3.php');

      }





    }



    else {
      echo '<!DOCTYPE html>
      <html>
          <head>

              <meta charset="utf-8">
              <title>task1</title>
              <link rel="stylesheet" href="../css/sign%20up.css"type="text/css"> <!--   (cssبhtml) ربط -->
             <!--<meta name="viewport" content="width=device-width ,initial-scale=1.0,user-scalable=no">-->

          </head>
          <body>
              <div class="sign">
                  <form class="f" action="sign%20up3.php" method="post">
                      <h2>Register</h2>
                      <p>FirstName</p>
                      <input type="text" placeholder="Enter first name" name="firstname">
                      <p>LastName</p>
                      <input type="text" placeholder="Enter last name" name="lastname">
                      <p>PhoneNumber</p>
                      <input type="text" placeholder="Enter phone number" name="phone">
                      <p>Email</p>
                      <input type="email" placeholder="Enter your email" name="email">
                      <p>Password</p>
                      <input type="password" placeholder="Enter your password" name="password">
                      <input type="submit" value="sign up" class="btn" name="sign_up">

                  </form>
                  <a href="sign%20in3.html"><button class="log">login</button></a>

              </div>
                  <p class="last">@ 2018 Course Registration Form.All Rights Reserved</p>

          </body>
      </html>';


    }

 ?>
