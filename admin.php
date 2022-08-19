<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="footer.css">

	<!-- Pass -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->


	<script type="text/javascript">

		$(document).ready(function(){
			$('.pass_show').append('<span class="ptxt">Show</span>');  
		});


		$(document).on('click','.pass_show .ptxt', function(){ 

			$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

			$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

		});  
	</script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">



	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="shortcut icon" href="images/logo.png" alt="logo" width="30" height="45" id="oop">

	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

	<!-- Navbar -->

	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


	<div id="contentOfNav"class="row  col-md-12" style=" box-shadow: 5px 5px 10px #09253d; color: #08233b; border-style: ; border-color: darkblue; border: 10px; background: ; z-index: 100; position: fixed;">





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
		<div class="col-md-8" style="padding-left: 550px;">


			<nav class="navbar navbar-expand-lg navbar-light " style="font-size:15px; padding-top: 15px;">
				<div class="container-fluid">
					<a class="navbar-brand" href="#st"><button type="button" class="btn btn-primary" color: #7bb2e3><b>Get Started</b></button></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="index.php" style="color: #7bb2e3"><b style="color:greenyellow;">Home</b></a>
							</li>
							

							<li class="nav-item">
								<a class="nav-link" href="login.php" style="color: #7bb2e3"><b  style="color: darkblue;">Login</b></a>
							</li>

						</ul>        </div>
					</nav>
				</div>

			</div>

		</head>
		<body>
			<div class="row container-fluid" style="overflow: hidden;">

				<div class="sidebar col-md-4" style="">
					<div class="sidebar-menu" style="">
						<ul id="dashadmin_ul">
							<img src="images/Symum.jpg" style="height: 150px; width: auto; border-radius: 50%; margin-left: 50px ; margin-top: 20px;"  >
							<h4 style="margin-left: 40px; color: darkcyan;" >Md. Symum Hossain</h4>
							<li>

								<a href="" class="active" style="text-decoration:none;"><span class="las la-igloo"></span>
									<span>Dashboard</span></a>

								</li>

								<li>
									<a href=""><span class="las la-inbox"></span>
										<span>Inbox</span></a>

									</li>

									<li>
										<a href="" ><span class="las la-file-invoice"></span>
											<span>Payment</span></a>

										</li>

										<li>
											<a href="#pass"><span class="las la-cog"></span>
												<span>Settings</span></a>

											</li>
										</ul>
									</div>
								</div>
								<div style="margin-left: 300px;" class="col-md-8 pt-5 mt-5" class="coun">
									<div class="row text-center" style="color: crimson;">
										<div id="c" class="col">
											<div class="counter" id="counter">
												<i class="fa fa-code fa-2x" id="fa-2x"></i>
												<h2 class="timer count-title count-number" data-to="1099" data-speed="1000">50</h2>
												<p class="count-text " id="count-text">Course Sell</p>
											</div>
										</div>
										
										<div id="c" class="col">
											<div class="counter" id="counter">
												<i class="fa fa-lightbulb-o fa-2x" id="fa-2x"></i>
												<h2 class="timer count-title count-number" data-to="11900" data-speed="1000">150</h2>
												<p class="count-text " id="count-text">Course Complete</p>
											</div></div>
											<div id="c" class="col">
												<div class="counter" id="counter">
													<i class="fa fa-user fa-2x" id="fa-2x"></i>
													<h2 class="timer count-title count-number" data-to="157" data-speed="1000">350</h2>
													<p class="count-text " id="count-text">User</p>
												</div>
											</div>
											<div id="c" class="col">
												<div class="counter" id="counter">
													<i class="fa fa-money fa-2x" id="fa-2x"></i>
													<h2 class="timer count-title count-number" data-to="157" data-speed="1000">$3500</h2>
													<p class="count-text " id="count-text">$Balance</p>
												</div>
											</div>
											
										</div>

									</div>
								</div>

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

								</footer></div>


								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

								<link rel="stylesheet" type="text/css" href="footer.css">
								<link rel="stylesheet" type="text/css" href="style.css">
								<link rel="stylesheet" type="text/css" href="dash_admin.css">


							</body>
							</html>