

<?php
include 'dbConnection.php';

require_once 'class2.php';





$products2 = array();






//variables


//sql

$sqlx = "SELECT * FROM feedback";


$resultx = mysqli_query($conn, $sqlx);





$i2 = 0;





while ($row = mysqli_fetch_array($resultx)) {
        $products2[$i2] = new pp();
        $products2[$i2]->id = $row['feedback_id'];
        $products2[$i2]->imageFile = $row['imageFile'];
        $products2[$i2]->name = $row['name'];
        $products2[$i2]->occupation = $row['occupation'];
        $products2[$i2]->details = $row['details'];

        
       
    

        $i2++;
}

?>