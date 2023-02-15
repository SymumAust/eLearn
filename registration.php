
   <?php session_start() ?>

 



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






  <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value; 
                var email=document.f1.email.value;  
                var cps=document.f1.cpass.value;  
                if(id.length=="" && ps.length=="" && email.length=="" && cps.length =="") {  
                    alert("User Name, Email and Passwords fields are empty");  
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
                    if(email.length==""){
                    	alert("Email is empty");
                    }
                    if(cps.length==""){
                    	alert("Confirm Password is empty");
                    }
                }                             
            }  
        </script>  










	
		<!-- Registration -->
		
		<div  style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover;"  >

		<div class="row col pt-5 mt-5 container-fluid ">
<span id="Register">

			<div class="wrapper fadeInDown">
				<div id="formContent">
					<!-- Tabs Titles -->

					<!-- Icon -->
					<div class="fadeIn first">
						<img src="images/logo.png" style="padding-bottom: 10px; padding-top: 15px;" id="icon" alt="User Icon" />
					</div>

					<!-- Login Form -->
					<form action="#" name="f1" onsubmit = "return validation()" method = "POST">
						<input type="text" id="user" class="fadeIn second" name="Name" placeholder="Username">
						<input type="text" id="email" class="fadeIn third" name="Email" placeholder="E-mail">
						<input type="Password" id="pass" class="fadeIn third" name="Password" placeholder="Password" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px;">
						<input type="Password" id="cpass" class="fadeIn third" name="Password1" placeholder="Confirm Password" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px;">
						<input type="submit" class="fadeIn fourth" value="Register" name="register">
					</form>

					<!-- Remind Passowrd -->
			<div id="formFooter">
				<div><p style="font-size: 17px; color: red; font-weight: bold;">


<?php 

    

   $serverName = "127.0.0.1:3307";
    $userName = "root";
    $password = "";
    $database = "t_database";

    $conn = mysqli_connect($serverName, $userName, $password, $database);

      if(!$conn){
        die("Sorry: ".mysqli_connect_error());
    }
    else{

    echo "";
		}







    if(isset($_POST["register"])){
    	$Name = $_REQUEST['Name'];
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $pass1 = $_POST['Password1'];

        if($password === $pass1){

  $check_query = mysqli_query($conn, "SELECT * FROM user_table where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                </script>
                <?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($conn, "INSERT INTO `user_table` (`username`, `password`,`email` ,`Status`) VALUES ('$Name', '$password_hash','$email', 0)");
               
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
					$_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='190204105@aust.edu';
                    $mail->Password='austedu0152155)';
    
                    $mail->setFrom('email account', 'OTP Verification');
                    $mail->addAddress($_POST["Email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>eLearn Community</b>
                    ";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('verification.php');
                                </script>
                                <?php
                            }
                }
            }
        }
        else {
	echo "Password not matched";
    // code...


    }

}
}






 ?>
</p></div>
						<a class="underlineHover" style="text-decoration: none; font-size: 15px" href="forget.php">Forgot Password?</a>
						<p class=""style="text-decoration: none; font-size: 15px">Already have an account?  <a class="underlineHover" style="text-decoration: none; font-size: 15px" href="login.php">Login Here.</a></p>
					</div>

				</div>
			</div>

	</span>
			
		</div>
			<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="login.css">


<?php include 'navbar.php' ?>
<?php include 'footer.php' ?>
	</div>





			


	</body>
	</html>

