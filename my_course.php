<?php 

include 'dbConnection.php';
include 'fetch_image.php';

include 'fetch_my_c.php';



?>

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


	

</head>

<body>
	<form method="post" action="#">
	<div class="col-lg-4 container-fluid" style="overflow: hidden;">

		<div class="sidebar col-md-4" style="">
			<div class="sidebar-menu" style="">
				<ul id="dashadmin_ul">

					<img src="images/<?php echo $image['0']->image; 
					 ?>" style="height: 150px; width: auto; border-radius: 50%; margin-left: 50px ; margin-top: 20px;">	
					<input class="file-upload-input" type="file" name="img2" accept="image/png,image/jpg,image/jpeg">
					<input type="submit" name="update" value="update">

					<?php

			if (isset($_POST['update'])) {

				$img2 = $_POST['img2'];
			
			
			


				$query2 = "UPDATE `userimage` SET `image`= '$img2'";

				mysqli_query($conn, $query2);
				header("Refresh:0");

				
			} else {

			}

			?>

			

					<div class="user-wrapper" style="padding-left: 50px;">



					</div>

					<h6 style="margin-left: 0px; color: darkcyan;">User ID: <?php  echo $_SESSION['em']; ?></h6>
					<li>

						<a href="#profile" class="" style="text-decoration:none;"><span class="las la-igloo"></span>
							<span>Dashboard</span></a>

					</li>

					<li>
						<a href="user_dash.php" style="text-decoration:none;"><span class="las la-inbox"></span>
							<span>Feedback</span></a>

					</li>

					<li>
						<a href="my_course.php" style="text-decoration:none;" ><span class="las la-file-invoice"></span>
							<span>My Courses</span></a>

					</li>

					<li>
						<a href="#pass" style="text-decoration:none;"><span class="las la-cog"></span>
							<span>Settings</span></a>

					</li>
				</ul>

			</div>


		</div>



	</div>
	</form>
<div class="container-fluid col-lg-8">
	

	<!-- Feedback -->
	<span id="feed_back"></span>
	<div class="container-fluid pt-5 mt-5" style=" color:#7bb2e3 ;  justify-content: center;">

		<div class="row container-fluid" style=" justify-content: center;">
			<h1 style="text-decoration: overline; color: #7bb2e3; margin-bottom: 50px; text-align: center; padding-top: 50px;">My Course</h1>
			    <?php
                    $j = 0;

                    while ($j < $i) {





echo '

 
    <div class="col-sm-6 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="course_details.php"><img class="card-img-top" src="images/'. $m[$j]->imageFile .'" style="height: 300px;" alt=""></a>
        <div class="card-body" id="" style="">
          <h4 style="font-size: 30px;">
'.$m[$j]->title.'</h4>
          <p class="card-text">'.$m[$j]->details.'</p>


          <div class="row">

            <div class="col-md-6">
              <a href="course_details2.php"><button id="button"  name="view" style="padding: 8px 35px; font-size: 20px; color: ;"><b> View</b></button></a>
            </div>
            <div class="col-md-6">          <a href=""  style="{color:green;} :hover { color: skyblue; }; font-size: 25px; font-weight:bold;">Price'. $m[$j]->price.'$</a></div>

   <style type="text/css">
     .row a{
      font-weight:bold;
     }
   </style>

            <div class="col-12" style="padding-left: 20px; align-content: right; justify-content:right;"><div class="col-md-4" id="star">
              <span></span>
              <span class="fa fa-star checked"style="color: orange; font-size: 15px;"></span>
              <span class="fa fa-star checked" style="color: orange;font-size: 15px;"></span>
              <span class="fa fa-star checked"style="color: orange;font-size: 15px;"></span>
              <span class="fa fa-star" style="font-size: 15px; "></span>
              

            </div></div>
          </div>
        </div>
      </div>
    </div>';


  $j++;

}?>


			



		</div>
	</div>


	



	</br>


</div>


<?php include 'navbar.php';

include 'footer.php'; ?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="dash_admin.css">


</body>

</html>