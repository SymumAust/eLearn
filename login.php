




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
	<body style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover;">


		<!-- Login Panel -->
		<span id="">

		<div class="row col pt-5 mt-5  container-fluid ">

			<div class="wrapper fadeInDown">
				<div id="formContent" id="frm">
					<!-- Tabs Titles -->

					<!-- Icon -->
					<div class="fadeIn first">
						<img src="images/logo.png" style="padding-bottom: 10px; padding-top: 15px;" id="icon" alt="User Icon" />
					</div>
 
					<!-- Login Form -->
					<form  action="#" name="f1" onsubmit = "return validation()" method = "POST" name="loggin">
						<input   type="text" id="email_address" class="fadeIn second" name="email" placeholder="E-mail" required autofocus>
						<input  type="password" id="password" class="form-control" name="password"  placeholder="Password" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px; margin-left: 33px; "required>




						<input type="submit" id="btn" class="fadeIn fourth" name="loggin" value="Log In">
					</form>

					<!-- Remind Passowrd -->
					<div id="formFooter">
						<div><p style="font-size: 15px; color: darkred; font-weight: bold;">



   
<?php
    include('dbConnection.php');



  

		if(isset($_POST["loggin"])){



			if($_POST['email'] == 'admin')
			{
				$password = $_POST['password'];
				$sql2 = mysqli_query($conn, "SELECT * FROM user_table where password = '$password'");
				$count2 = mysqli_num_rows($sql2);

				if($count2 > 0){
                        		header('Location: admin/dash_admin.php');
                        		exit();

             }}




        $email = mysqli_real_escape_string($conn, trim($_POST['email']));

        $password = trim($_POST['password']);
        $sql = mysqli_query($conn, "SELECT * FROM user_table where email = '$email'");
        $count = mysqli_num_rows($sql);

            if($count > 0){
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
    
                if($fetch["Status"] == 0){
                    ?>
                    <?php  
                        echo "Please verify email account before login.";
                    ?>
                    <?php
                }else if(password_verify($password, $hashpassword)){
                    ?>
                    <script>
                        alert("login in successfully");

                    </script>
                        <?php  
                        	
                        	
                        		  header('Location: index.php');
                        	

                        ?>
                       

                    <?php
                    
                }else{
                    ?>
                   <?php  
                        echo  "email or password invalid, please try again.";
                    ?>
                    <?php
                }
            }
            else
            	echo "Create account before login!!!";
                
    }

?>



							
						</p></div>
						<a class="underlineHover" style="text-decoration: none; font-size: 15px" href="forget.php">Forgot Password?</a>
						<p class=""style="text-decoration: none; font-size: 15px">Doesn't have an account?  <a class="underlineHover" style="text-decoration: none; font-size: 15px" href="registration.php">Register Here.</a></p>
					</div>
			

				</div>
			</div>
			
		</div>
		
</span>




  <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  










	<!--
		<!-- Registration -->
		
	<!--	<div style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover;">

		<div class="row col pt-5  container-fluid ">
<span id="Register">

	</span>
			<div class="wrapper fadeInDown">
				<div id="formContent">
					<!-- Tabs Titles -->

					<!-- Icon -->
		<!--			<div class="fadeIn first">
						<img src="images/logo.png" style="padding-bottom: 10px; padding-top: 15px;" id="icon" alt="User Icon" />
					</div>

					<!-- Login Form -->
					<form>
			<!--			<input type="text" id="login" class="fadeIn second" name="login" placeholder="Username">
						<input type="text" id="" class="fadeIn third" name="E-mail" placeholder="E-mail">
						<input type="Password" id="" class="fadeIn third" name="Password" placeholder="Password" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px;">
						<input type="Password" id="" class="fadeIn third" name="Password" placeholder="Confirm Password" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px;">
						<input type="submit" class="fadeIn fourth" value="Register">
					</form>

					<!-- Remind Passowrd -->
	<!--				<div id="formFooter">
						<a class="underlineHover" style="text-decoration: none; font-size: 15px" href="#forget">Forgot Password?</a>
						<p class=""style="text-decoration: none; font-size: 15px">Already have an account?  <a class="underlineHover" style="text-decoration: none; font-size: 15px" href="#login">Login Here.</a></p>
					</div>

				</div>
			</div>
			
		</div>
	</div>



-->
		<!-- Forget -->

<!--

<span id="forget"></span>
<div style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover; padding-bottom: 20px;">
<div class="row col pt-5  container-fluid " >

			<div class="wrapper fadeInDown">
				<div id="formContent">
					<!-- Tabs Titles -->

					<!-- Icon -->
			<!--		<div class="fadeIn first">
						<img src="images/logo.png" style="padding-bottom: 10px; padding-top: 15px;" id="icon" alt="User Icon" />
					</div>
					<h5>Reset Your Password</h5>

					<!-- Login Form -->
				<!--	<form>
						<input type="text" id="login" class="fadeIn second" name="login" placeholder="E-mail" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px;">
						
						<input type="submit" class="fadeIn fourth" value="Submit">
					</form>
					<p style="font-size: 15px; font-weight: 300;">Enter your email address and we'll send you an email with instructions to reset your password.</p>

					<!-- Remind Passowrd -->
				<!--	<div id="formFooter">
						<a class="underlineHover" style="text-decoration: none; font-size: 15px" href="#">Log In?</a>
						<p class=""style="text-decoration: none; font-size: 15px">Doesn't have an account?  <a class="underlineHover" style="text-decoration: none; font-size: 15px" href="#Register">Register Here.</a></p>
					</div>

			

				</div>
			</div>
			
		</div>

	</div>
		
-->

<?php include 'navbar.php' ?>
<?php include 'footer.php' ?>

<link rel="stylesheet" type="text/css" href="footer.css">
			


	</body>
	</html>


