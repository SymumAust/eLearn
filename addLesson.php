



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
	<body>
<div  style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover;">
<div class="container-fluid col-md-6 pt-5 mt-5" style="text-align: center; justify-content: center;" >

	

		<h1 style="color: darkred; text-decoration: overline;">Add Lesson</h1>
		<form method="post">
<label style=" color: darkred;"> </label><input type="text" name="id" class="col" style="margin-bottom: 15px; padding: 5px; border-style: solid; border-color: blue;" placeholder=" ID"></br>
</br>

	<label>Add File:	<input style="color: darkred; margin-bottom: 25px;" type="file" name="Lession_details"></label>
	</br>
	
		<label style=" color: darkred;"> </label><input type="text" name="Lesson_name" class="col" style="margin-bottom: 15px; padding: 5px; border-style: solid; border-color: blue;" placeholder="Lesson Name"></br>
		
		

	</br>

	<input type="submit" value="Add" class="btn" name="Add" placeholder="Add" style="font-size: 15px;">
	<input class=" btn btn-danger" type="submit" value="Delete" class="btn" name="Delete" placeholder="Delete" style="font-size: 15px;"></br>
	</form>

	<label style="color: darkred;">

<?php
    include('dbConnection.php');


    if(isset($_POST['Delete'])){
    	$id = $_POST['id'];
    	$result = mysqli_query($conn, "
   DELETE FROM `lesson` WHERE `lesson`.`lesson_id` = $id;");
    	if($result > 0){
                        		
                        		echo "Lesson Successfully Deleted";

             }
             else{
             	echo "Fails Deleted";

             }


    }



  

		if(isset($_POST["Add"]))
		{
			$id = $_POST['id'];
			
			$lesson_name = $_POST['Lesson_name'];
			$Course_No = $_POST['id'];
			$Lession_details = $_POST['Lession_details'];
		

				$result = mysqli_query($conn, "INSERT INTO `lesson` (`lesson_name`, `lession_details`,`c_id` ) VALUES ('$lesson_name', '$Lession_details','$id')");


				if($result > 0){
                        		
                        		echo "Lesson Successfully Added";

             }
             else{
             	echo "Fails Added";

             }

         }
             




       

?>		


	</label>



</br>


<link rel="stylesheet" type="text/css" href="footer.css">
</div></div>
<?php include 'navbar1.php' ?>

	<?php include 'footer.php' ?>
			


	</body>
	</html>


