<?php

  $_SESSION["message"]= $_POST['$_SESSION["message"]'];


  if (isset($_SESSION["message"]) && !empty($_SESSION["message"])) {
      $msg = $_SESSION["message"];
      echo "<div class='msgbox'>" . $msg . "</div>";
      unset($_SESSION['message']);

      echo '<input type="submit" value="sign up" class="btn" name="sign_up">';
    }




 ?>
