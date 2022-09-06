

<?php
include 'dbConnection.php';

require_once 'class.php';





$contact = array();






//variables


//sql

$sqlx = "SELECT * FROM contact_table";


$resultx = mysqli_query($conn, $sqlx);





$i = 0;





while ($row = mysqli_fetch_array($resultx)) {
        $contact[$i] = new contact();
        $contact[$i]->Name = $row['Name'];
        $contact[$i]->Email = $row['Email'];
        $contact[$i]->Subject = $row['Subject'];
        $contact[$i]->Message = $row['Message'];
        
       
    

        $i++;
}

?>