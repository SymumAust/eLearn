<?php 

<<<<<<< HEAD


$serverName = "localhost";
$userName = "root";
$password = "root";
$database = "tabtest";



$conn = mysqli_connect($serverName, $userName, $password, $database);

  if(!$conn){
    die("Sorry: ".mysqli_connect_error());
}
else{

echo "";
}?>
=======
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
>>>>>>> 7fa4a6cd2c3d4d4b9ad68cb0124d8af8122f9ed7
