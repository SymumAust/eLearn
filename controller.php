<?php


if(isset($_POST['forgot_password'])){
	$email  = $_POST['email'];
	$emailCheckQuery= "SELECT * FROM user_table where Email = '$email'";
	$emailCheckResult = mysqli_query($conn, $emailCheckQuery);


	if($emailCheckResult){
		if(mysqli_num_rows($emailCheckResult)>0){
			$code = rand(999999,111111);
			$updateQuery="UPDATE user_table SET code = $code where email ='$email'";
			$updateResult = mysqli_query($conn, $updateQuery);
			if($updateResult){
				$subject = 'Email Verification Code';
				$message = "Our Verification code is $code";
				$sender = 'From: nma382793@gmail.com';

				if(mail($email, $subject, $message, $sender)){
					$message = "We 've sent a Verification code to your Email <br> $email";
					$_SESSION['message'] = $message;
					header('Location: Otp.php');

				}else{
					$errors['otp_errors']= 'Failed while sending code!';
				}
				
				}else{
					$errors['db_errors'] = "Failed while inserting data into database!";
			}
			}else{
				$errors['invalidEmail']="Invalid  Email Address";
		}
		}else{
			$errors['db_error'] = "Failed while checking email from database!";
	}
}

I


?>