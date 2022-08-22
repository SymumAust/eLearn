<?php
  
  $servername = "127.0.0.1:3307";
  $username = "root";
  $password = "";
  $databasename = "t_database";
  
  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // SQL QUERY
   ?>
  
