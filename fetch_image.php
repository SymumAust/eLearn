

<?php
include 'dbConnection.php';

require_once 'class.php';





$image = array();






//variables


//sql

$sqlx = "SELECT * FROM userimage";


$resultx = mysqli_query($conn, $sqlx);





$i = 0;





while ($row = mysqli_fetch_array($resultx)) {
        $image[$i] = new pt();
        $image[$i]->image = $row['image'];
       
       
    

        $i++;
}

?>