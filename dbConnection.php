<?php 


    $serverName = "127.0.0.1:3307";
    $userName = "root";
    $password = "";
    $database = "t_database";



    $conn = mysqli_connect($serverName, $userName, $password, $database);

      if(!$conn){
        die("Sorry: ".mysqli_connect_error());
    }
    else{

    echo "";
}





?>