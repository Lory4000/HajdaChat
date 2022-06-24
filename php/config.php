<?php
/*
  $hostname = "localhost";
  $username = "id18362748_lorenzothebest";
  $password = "ipRV}ZZ=y!C7_Z&8";
  $dbname = "id18362748_chatapp";
*/
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
