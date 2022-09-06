<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
include 'dbConnection.php';
include 'fetchUserDetails.php';

// SQL query to select data from database
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Data</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
    <section>
        <h1>User Data</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>e-mail</th>
                
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
              
                    $j = 0;

                    while ($j < $i) {
            echo '            
            
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                    <td>'. $user[$i]->id.'</td>
                <td>'.$user[$i]->username.'</td>
                <td>'.$user[$i]->email.'</td>
                
               
            </tr>'; ?>
            <?php
            $j++;
                }

            ?>
        </table>
    </section>
</body>

</html>
