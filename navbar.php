	

		<?php   ?>

		<div id="contentOfNav"class="row bg-secondary container-fluid" style="box-shadow: 5px 5px 10px #09253d; color: #08233b; position: fixed; top: 0;">




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
			<div class="col-md-8" style="padding-left: 600px; text-align: right;" >


				<nav class="navbar navbar-expand-lg navbar-light " style="font-size:15px; padding-top: 15px;>
				<div class="container-fluid">
					<a class="navbar-brand" href="<?php   if($aaa=='1'){
                echo "user_dash.php";
              }else{
                echo "login.php";
              } ?> "><button type="button" class="btn btn-primary" color: #7bb2e3><b> Dashboard</b></button></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php" style="color: #7bb2e3"><b style="color:greenyellow;">Home</b></a>
            </li>
            

            <li class="nav-item">
              <a class="nav-link" href="login.php" style="color: #7bb2e3"><b  style="color: #e4edce;"></b></a>
            </li>

          </ul>
					</div>
				</nav>
			</div>

		</div>

		<?php


	
 ?>
