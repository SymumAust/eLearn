<?php
include 'dbConnection.php';?>
<?php include 'allc.php';?>
<?php


require_once 'class2.php';





$course = array();






//variables


//sql

$sqlx = "SELECT * FROM lesson where c_id = '$temp'";


$resultx = mysqli_query($conn, $sqlx);





$i3 = 0;





while ($row = mysqli_fetch_array($resultx)) {
        $course[$i3] = new cd();
        $course[$i3]->lesson_id = $row['lesson_id'];
        $course[$i3]->lesson_details = $row['lesson_details'];
        $course[$i3]->lesson_name = $row['lesson_name'];
        $course[$i3]->c_id = $row['c_id'];
     
       
    

        $i3++;
}

?>