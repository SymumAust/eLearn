<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="footer.css">


	<!-- Pass -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->


	<script type="text/javascript">
		$(document).ready(function() {
			$('.pass_show').append('<span class="ptxt">Show</span>');
		});


		$(document).on('click', '.pass_show .ptxt', function() {

			$(this).text($(this).text() == "Show" ? "Hide" : "Show");

			$(this).prev().attr('type', function(index, attr) {
				return attr == 'password' ? 'text' : 'password';
			});

		});
	</script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">



	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="shortcut icon" href="images/logo.png" alt="logo" width="30" height="45" id="oop">

	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="user_dash.css">
	<!-- Navbar -->

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


	<div id="contentOfNav" class="row  col-md-12" style=" box-shadow: 5px 5px 10px #09253d; color: #08233b; border-style: ; border-color: darkblue; border: 10px; background: ; z-index: 100; position: fixed;">





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
		<div class="col-md-8" style="padding-left: 600px;">


			<nav class="navbar navbar-expand-lg navbar-light " style="font-size:15px; padding-top: 15px;">
				<div class="container-fluid">
					<a class="navbar-brand" href="#st"><button type="button" class="btn btn-primary" color: #7bb2e3><b>Sign Out</b></button></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="index.php" style="color: #7bb2e3"><b style="color:darkblue;">Home</b></a>
							</li>




						</ul>
					</div>
			</nav>
		</div>

	</div>

</head>

<body>
	<div class="row container-fluid" style="overflow: hidden;">

		<div class="sidebar col-md-4" style="">
			<div class="sidebar-menu" style="">
				<ul id="dashadmin_ul">

					<img src="" style="height: 150px; width: auto; border-radius: 50%; margin-left: 50px ; margin-top: 20px;">

					<div class="user-wrapper" style="padding-left: 50px;">



					</div>

					<h4 style="margin-left: 80px; color: darkcyan;">User</h4>
					<li>

						<a href="#profile" class="" style="text-decoration:none;"><span class="las la-igloo"></span>
							<span>Dashboard</span></a>

					</li>

					<li>
						<a href="#feed_back"><span class="las la-inbox"></span>
							<span>Feedback</span></a>

					</li>

					<li>
						<a href=""><span class="las la-file-invoice"></span>
							<span>My Courses</span></a>

					</li>

					<li>
						<a href="#pass"><span class="las la-cog"></span>
							<span>Settings</span></a>

					</li>
				</ul>
			</div>


		</div>



	</div>

	

	<!-- Feedback -->
	<span id="feed_back"></span>
	<div class="container" style=" color:#7bb2e3 ;  justify-content: center;">

		<div class="row container-fluid" style=" justify-content: center;">
			<h1 style="text-decoration: overline; color: #7bb2e3; margin-bottom: 50px; text-align: center; padding-top: 50px;">Feedback</h1>
			<?php
			$serverName = "127.0.0.1:3307";
			$userName = "root";
			$password = "";
			$database = "t_database";



			$conn = mysqli_connect($serverName, $userName, $password, $database);
			if (isset($_POST['updateStuNameBtn'])) {

				$img = $_POST['img'];
				$name = $_POST['name'];
				$occ = $_POST['occ'];
				$feedback = $_POST['f_content'];


				$query = "insert into feedback(imageFile,name,occupation,details)
              values ('$img','$name','$occ','$feedback')";

				mysqli_query($conn, $query);
				echo "<p>successful</p>";
			} else {
			}

			?>


			<div class="col-sm-6 mt-5">
				<form class="mx-5" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
					<input class="file-upload-input" type="file" name="img" accept="image/png,image/jpg,image/jpeg">

					<div class="form-group">
						<lebel for="stuName">Name</lebel></br>
						<input type="text" class="form-control" id="stu_name" name="name" value="">
					</div>

					<div class="form-group">
						<lebel for="stuocc">Occupation</lebel>
						<input type="text" class="form-control" id="stuName" name="occ" value="">
					</div>

					<div class="form-group">
						<lebel for="feedback">Feedback</lebel>
						<textarea class="form-control" id="f_content" name="f_content" value=""></textarea>
					</div>



					<input type="submit" class="btn btn-primary" name="updateStuNameBtn" value="send" style="margin-top:20px;" />
				</form>
			</div>



		</div>
	</div>


	<!-- Settings -->




	<span id="pass"></span>
	<div class="container" style="margin-top: 100px; color:#7bb2e3 ;">

		<div class="row container-fluid" style=" justify-content: center;">
			<h1 style="text-decoration: overline; color: #7bb2e3; margin-bottom: 50px; text-align: center;">Settings</h1>

			<h4 style="text-align: center;">Change Password?</h4>
			<div class="col-sm-4">

				<label>Current Password</label>
				<div class="form-group pass_show">
					<input type="password" value="faisalkhan@123" class="form-control" placeholder="Current Password">
				</div>
				<label>New Password</label>
				<div class="form-group pass_show">
					<input type="password" value="faisal.khan@123" class="form-control" placeholder="New Password">
				</div>
				<label>Confirm Password</label>
				<div class="form-group pass_show">
					<input type="password" value="faisal.khan@123" class="form-control" placeholder="Confirm Password">
				</div>
				<button class="btn btn-primary" style="text-align: center;">Confirm</button>


			</div>


		</div>
	</div>
	<div class="container">
		<div class="row container-fluid">



			<div class="col-sm-4 text-center" style="margin-left: 300px; text-align: center; justify-content: center;">

				<h5 style="text-decoration: overline; color: #7bb2e3; margin-bottom: 50px; text-align: center; padding-top: 50px;">Upload Picture</h5>

				<div class="user-wrapper" style="padding-left: 50px;">
					<input class="file-upload-input" type="file" accept="image/png,image/jpg,image/jpeg">
					<div id="display_img">

					</div>
					<div>
						<h4></h4>
					</div>
				</div>

			</div>
		</div>
	</div>




	</br>



	<!-- Footer -->

	<div>
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
	</div>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="dash_admin.css">


</body>

</html>