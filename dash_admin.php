



<?php 	include 'dbConnection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
   
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>eLearn</title>
	<meta name="description" content="">

	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="style.css">





<!-- icon -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="shortcut icon" href="images/logo.png" alt="logo" width="30" height="45" style="padding-bottom: 12px;" class=""><b style="font-size: 30px; color: #7bb2e3">
		<!-- NavBar -->
		<span id="login"></span>


	</head>
	<body style=>
<div class="col pt-5 mt-5" style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover;">

	<div class=" col pt-5 mt-5">

	

		<a href="course_admin.php"><button class="btn btn-primary">Add Course</button> </a> 
		<a href="addLesson.php"><button class="btn btn-danger">Add Lesson</button> </a> 
	
		
		 

</div>

<h1 class="pt-5 mt-5">Message Details</h1>


<?php 	


include 'dbConnection.php';

$sql = "SELECT Name, Email, Subject, Message FROM contact_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class = 'pt-5 mt-5'><tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Subject"]. "</td><td>". $row['Message']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



 ?>


<h1 class="pt-5 mt-5">User Table</h1>

 <?php 	




$sql = "SELECT id, username, email FROM user_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class = 'pt-5 mt-5'><tr><th>id</th><th>Name</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


 ?>
 

 




		
<h1 class="pt-5 mt-5">Payment Details</h1>

<?php
$sql = "SELECT m_id, email, price FROM m_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class = 'pt-5 mt-5'><tr><th>ID</th><th>Email</th><th>Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["m_id"]. "</td><td>" . $row["email"]. "</td><td>" . $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
     <style>
        table {
        	color:  darkred;
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










</div>
	

<?php include 'navbar1.php' ?>
</br>


<link rel="stylesheet" type="text/css" href="footer.css">
			


	</body>
	</html>


