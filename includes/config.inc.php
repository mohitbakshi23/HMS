<?php
  session_start();
  $servername = "127.0.0.1"; //change this  accordingly
  $dBUsername = "superuser";
  $dBPassword = "secret@123";
  $dBName = "hostel_management_system";
 // session_start();
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
