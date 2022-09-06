

<?php

session_start();
include 'dbConnection.php';

require_once 'class.php';





$user = array();






//variables


//sql
$aa =$_SESSION['em'];

$sqlx = "SELECT * FROM user_table where email = '$aa'";


$resultx = mysqli_query($conn, $sqlx);





$i = 0;





while ($row = mysqli_fetch_array($resultx)) {
        $user[$i] = new ss();
        $user[$i]->id = $row['id'];
        $user[$i]->username = $row['username'];
        $user[$i]->password = $row['password'];
        $user[$i]->email = $row['email'];
        $user[$i]->Status = $row['Status'];
       
       $user[$i]->imageUser = $row['imageUser'];


        $i++;
}
$i--;




?>