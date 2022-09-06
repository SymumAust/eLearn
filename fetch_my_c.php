

<?php
session_start();
include 'dbConnection.php';

require_once 'class.php';





$m = array();






//variables


//sql

$aa = $_SESSION['em'];

$sqlx = "SELECT c.imageFile, c.title, c.details, c.price FROM course_table c join m_table m on c.c_id = m.m_id join user_table u on u.email = m.email where u.email='$aa'";


$resultx = mysqli_query($conn, $sqlx);





$i = 0;





while ($row = mysqli_fetch_array($resultx)) {
        $m[$i] = new pt();
        
        $m[$i]->imageFile = $row['imageFile'];
        $m[$i]->title = $row['title'];
        $m[$i]->details = $row['details'];
        $m[$i]->price = $row['price'];
       
    

        $i++;
}

?>