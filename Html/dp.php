<?php

  session_start();
  $dbServername ="localhost";
  $dbUsername ="root";
  $dbPassword ="";
  $dbName ="tasks";    //database name
  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

 ?>
