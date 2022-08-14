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

		<div id="contentOfNav"class="row bg-secondary container-fluid" style="box-shadow: 5px 5px 10px #09253d; color: #08233b;">




			<div class="col-md-4 ">


				<nav class="navbar navbar-light ">
					<div class="container-fluid">
						<a class="navbar-brand" href="#">
							<img src="images/logo.png" alt="logo" width="30" height="45" style="padding-bottom: 12px;" class=""><b style="font-size: 30px; color: #7bb2e3">
							eLearn</b>
						</a>
					</div>
				</nav>


			</div>
			<div class="col-md-8" style="padding-left: 400px;">


				<nav class="navbar navbar-expand-lg navbar-light " style="font-size:15px; padding-top: 15px;>
				<div class="container-fluid">
					<a class="navbar-brand" href="#"><button type="button" class="btn btn-primary" color: #7bb2e3><b>Get Started</b></button></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="index.php" style="color: #7bb2e3"><b>Home</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" style="color: #7bb2e3"><b>Team</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" style="color: #7bb2e3"><b>About</b></a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="#" style="color: #7bb2e3"><b>Contact</b></a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="login.php" style="color: #7bb2e3"><b>Login</b></a>
							</li>

						</ul>
					</div>
				</nav>
			</div>

		</div>

	</head>
	<body style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover;">

		<!-- Login Panel -->
		<span id="">

		<div class="row col pt-5  container-fluid ">

			<div class="wrapper fadeInDown">
				<div id="formContent">
					<!-- Tabs Titles -->

					<!-- Icon -->
					<div class="fadeIn first">
						<img src="images/logo.png" style="padding-bottom: 10px; padding-top: 15px;" id="icon" alt="User Icon" />
					</div>

					<!-- Login Form -->
					<form>
						<input type="text" id="login" class="fadeIn second" name="login" placeholder="User">
						<input type="Password" id="" class="fadeIn third" name="Password" placeholder="Password" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px;">
						<input type="submit" class="fadeIn fourth" value="Log In">
					</form>

					<!-- Remind Passowrd -->
					<div id="formFooter">
						<a class="underlineHover" style="text-decoration: none; font-size: 15px" href="#">Forgot Password?</a>
						<p class=""style="text-decoration: none; font-size: 15px">Doesn't have an account?  <a class="underlineHover" style="text-decoration: none; font-size: 15px" href="#Register">Register Here.</a></p>
					</div>

			

				</div>
			</div>
			
		</div>
		
</span>
	
		<!-- Registration -->
		
		<div style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover;">

		<div class="row col pt-5  container-fluid ">
<span id="Register">

	</span>
			<div class="wrapper fadeInDown">
				<div id="formContent">
					<!-- Tabs Titles -->

					<!-- Icon -->
					<div class="fadeIn first">
						<img src="images/logo.png" style="padding-bottom: 10px; padding-top: 15px;" id="icon" alt="User Icon" />
					</div>

					<!-- Login Form -->
					<form>
						<input type="text" id="login" class="fadeIn second" name="login" placeholder="Username">
						<input type="text" id="" class="fadeIn third" name="E-mail" placeholder="E-mail">
						<input type="Password" id="" class="fadeIn third" name="Password" placeholder="Password" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px;">
						<input type="Password" id="" class="fadeIn third" name="Password" placeholder="Confirm Password" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px;">
						<input type="submit" class="fadeIn fourth" value="Register">
					</form>

					<!-- Remind Passowrd -->
					<div id="formFooter">
						<a class="underlineHover" style="text-decoration: none; font-size: 15px" href="#">Forgot Password?</a>
						<p class=""style="text-decoration: none; font-size: 15px">Already have an account?  <a class="underlineHover" style="text-decoration: none; font-size: 15px" href="#login">Login Here.</a></p>
					</div>

				</div>
			</div>
			
		</div>
	</div>
		



<footer>
  <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Job openings</a></li>
                            <li><a href="#">Employee success</a></li>
                            <li><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Claimed by eLearn © 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</footer>

<link rel="stylesheet" type="text/css" href="footer.css">
			


	</body>
	</html>