

<?php
session_start();

include 'dbConnection.php';

require_once 'class.php';





$less = array();






//variables



//sql
$aa = $_SESSION['em'];

$sqlx = "SELECT distinct l.lesson_name, l.lession_details FROM lesson l inner join  m_table m on m.m_id= l.c_id  inner join  user_table u on u.email = m.email where m.email = '$aa'";


$resultx = mysqli_query($conn, $sqlx);





$i = 0;





while ($row = mysqli_fetch_array($resultx)) {



        $less[$i] = new lesson();
        $less[$i]->lesson_name = $row['lesson_name'];
        $less[$i]->lession_details = $row['lession_details'];


       
   


    

        $i++;
        


}


$i--;
<<<<<<< HEAD
$_SESSION['ac']=  $less[0]->lession_details;

=======
>>>>>>> parent of c3d91e4 (DONE)


?>