

<?php
include 'dbConnection.php';

require_once 'class.php';


$products = array();






//variables


//sql

$sqlx = "SELECT * FROM course_table";


$resultx = mysqli_query($conn, $sqlx);





$i = 0;





while ($row = mysqli_fetch_array($resultx)) {
        $products[$i] = new pt();
        $products[$i]->id = $row['c_id'];
        $products[$i]->imageFile = $row['imageFile'];
        $products[$i]->title = $row['title'];
        $products[$i]->details = $row['details'];
        $products[$i]->price = $row['price'];
       
    

        $i++;
}

?>