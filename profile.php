<?php

  include 'dp.php';

  $email=$_POST['email'];
  $result=mysqli_query($conn,"SELECT * FROM task3 WHERE email = '$email'");
  if ($result->num_rows == 0 ) {
      $_SESSION['message'] = "user is not exist please log in with valid one or sign up";

      if (isset($_SESSION["message"]) && !empty($_SESSION["message"])) {
          $msg = $_SESSION["message"];
          echo "<div class='msgbox'>" . $msg . "</div>";
          unset($_SESSION['message']);

          header('location: error.php');

        }



  }

  else {
    $user = $result->fetch_assoc();



    foreach ($user as $key => $value) {

    if (password_verify($_POST['password'] ,$user['password'])) {
      echo '<DOCUMENT html>
      <html>
          <head>
              <meta charset="UTF-8">
              <link rel="stylesheet" type="text/css" href="../css/profile.css">
          </head>
          <body>
               <header>
                   <div class="header">
                       <div class="contact">
                          <img src="../images/email.png"><a href="mailto:shrouke270@gmail.com">shrouke270@gmail.com</a>
                          <img src="../images/phone.png"><span>+212 6 68 28 65 90</span>
                       </div>
                       <div class="social">
                           <ul>
                               <li><a href="#"><img src="../images/facebook.png"></a></li>
                               <li><a href="#"><img src="../images/google+.png"></a></li>
                               <li><a href="#"><img src="../images/youtube.png"></a></li>
                               <li><a href="#"><img src="../images/twitter.png"></a></li>
                           </ul>
                       </div>
                   </div>
              </header>
              <div class="content">
                  <div class="photo">
                      <img src="../images/art.png">
                  </div>
                  <div class="text">
                      <h3>Hello, Gyus!</h3>
                  </div>
                  <div class="info">
                      <p>
                      Welcome to our unique website. Our goal is to
                      help a visitor to reach the goal for which he
                      or she has registered for this site.We are pleased
                      to be part of our website and wish to offer you
                      everything unique and unique.
                      </p>
                  </div>

              </div>
              <footer>
                  <div>
                      <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">portfolio</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">About us</a></li>
                      </ul>
                  </div>
                 <!-- <div class="copyright">
                      <p>All rights Reserved <a href="#">shrouke270</a></p>
                  </div>-->
              </footer>
             <!-- <nav class="menu">
                  <ul>
                      <li><a href="#">Home</a></li>
                       <li><a href="#">Feedback</a></li>
                       <li><a href="#">Contact</a></li>
                       <li><a href="#">About</a></li>
                  </ul>
              </nav>
             -->

          </body>
      </html>
';

    }

echo "not real password";

  }
}




 ?>
