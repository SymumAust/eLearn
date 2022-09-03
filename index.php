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





?>

<?php include 'fetch.php'; ?>
<?php include 'fetch_feedback.php'; ?>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
			<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
				<html>
				<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<title>eLearn</title>
					<meta name="description" content="">

                  <!-- MarXIA contact -->
                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                  <link rel="stylesheet" href="contact.css">
                  <link rel="preconnect" href="https://fonts.googleapis.com">
                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet">
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">



                  <!-- Latest compiled and minified CSS -->

                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                  <!-- Latest compiled JavaScript -->

                  <link rel="stylesheet" type="text/css" href="project.css">
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

                  <link rel="shortcut icon" href="images/logo.png" alt="logo" width="30" height="45" style="padding-bottom: 12px;" class=""><b style="font-size: 30px; color: #7bb2e3">
                    <link rel="stylesheet" type="text/css" href="project.css">

                    <link rel="stylesheet" type="text/css" href="style.css">
                    <script src="project.js"></script>

                    <!-- Team -->

                    <link rel="stylesheet" href="team.css">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.1.3/css/font-awesome.min.css">


                    <!-- Counter -->

                    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <link rel="stylesheet" type="text/css" href="counter.css">
                    <script type="text/javascript" src="counter.js"></script>
                    <!------ Include the above in your HEAD tag ---------->



                    <!-- HERO ST-->
                    <link rel="preconnect" href="https://fonts.googleapis.com">

                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

                    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

                    <link href="css/bootstrap.min.css" rel="stylesheet">

                    <link href="css/bootstrap-icons.css" rel="stylesheet">

                    <link href="css/magnific-popup.css" rel="stylesheet">

                    <link href="hero.css" rel="stylesheet">

                    <!-- HERO END -->


                    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

                  


</head>
<body style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover;">


  <div>

   <div class="row mt-5 pt-5 container-fluid" id="imageBackground">

    <div class="col-md-6" style="color:darkcyan; text-align: center;"><p style="font-size:35px">
     <b style="font-size:40px; font-weight: strong;">Welcome to <b style="font-size:90px; color: #110c54; font-weight: strong; "><h1 style="">
      <a href="" class="typewrite" style="font-weight: strong; color:#023cfa; text-decoration: none; font-size: 65px; text-shadow: 1px 1px 2px #000000;" data-period="2000" data-type='[ "eLearn", "Virtual Study.", "Global Education.", "Develop your skill." ]'>
       <span class="wrap"></span>
   </a>
</h1></b></b></p></div>

<div class="col-md-6 ccontainer">
    <img src="images/edu.jpg" style="width:100%; opacity:0.7">
    <a href="login.php"><button class="btn" style="width: 40%;">Join Now</button></a>
</div>
<style type="text/css">
    
    .ccontainer {
  position: relative;
  width: 50%;
}

/* Make the image responsive */
.ccontainer img {
  width: 100%;
  height: auto;
}

/* Style the button and place it in the middle of the container/image */
.ccontainer .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: darkslateblue;
  font-weight: bold;
  color: floralwhite;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.ccontainer .btn:hover {
  background-color: black;
}
</style>


</div>



</div>


<!-- HERO SECTION -->

<div>


 <span id="st"></span>
 <section class="hero container-fluid mt-5 pt-5">
    <div class="container-fluid h-100">
        <div class="row h-100">

            <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container position-relative h-100">
                            <div class="carousel-caption d-flex flex-column justify-content-center">
                                <small class="small-title">Introducing <b style="font-size: 70px; text-shadow: 2px 2px 4px #ffffff; color: #fc3d56;">eLearn</b> <strong class="text-warning">01/05</strong></small>

                                <h1>Explore <span class="text-warning">new ideas</span> for your business</h1>

                                <div class="d-flex align-items-center mt-4" style="padding-bottom:65px;">
                                    <a id="custom-btn" class="custom-btn btn custom-link" href="#section_2">Get Started</a>

                                    <a style= "" class="popup-youtube custom-icon d-flex ms-4" href="https://www.youtube.com/watch?v=AYaHuZ4BB6Y">
                                        <i style="background-color: transparent; text-align: center; justify-content:center; align-content: center;align-items: center;" class="bi-play play-icon d-flex m-auto text-white" ></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-image-wrap">


  
                            <img src="<?php $query = "SELECT * FROM `carsoul_link` where `id` = 3 ;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
                $abc = $row["linkImage"];
        }
    } 
    else {
        echo "0 results";
    }
  echo $abc;
 
  
    ?>" alt="" class="img-fluid carousel-image" style="">
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container position-relative h-100">
                            <div class="carousel-caption d-flex flex-column justify-content-center">
                                <small class="small-title">Supporting New Project <strong class="text-warning">01/05</strong></small>

                                <h1>Strategic Planning for your <span class="text-warning">next project</span></h1>

                                <div class="d-flex align-items-center mt-4">
                                    <a class="custom-btn btn custom-link" href="#section_2">Explore Capabilities</a>

                                    <a style="background-color: transparent;" class="popup-youtube custom-icon d-flex ms-4" href="https://www.youtube.com/watch?v=VStvZjykQ00">
                                        <i style= "background-color: transparent; opacity: 1; text-align: center; justify-content:center; align-content: center;align-items: center;" class="bi-play play-icon d-flex m-auto text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-image-wrap">
                            <img src="<?php $query = "SELECT * FROM `carsoul_link` where `id` = 4 ;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
                $abc = $row["linkImage"];
        }
    } 
    else {
        echo "0 results";
    }
  echo $abc;
   $conn->close(); ?>" class="img-fluid carousel-image" alt="">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


</div>

<!-- About -->


<section class="container pt-5 mt-5 header3 cid-r1y0ay8sxw" id="header3-1m">

    <span id="about"></span>



    <div style="font-family:  'DM Sans', sans-serif; color: #f5587a; " class=" container-fluid align-center">
        <div class="row">
            <div class="mbr-white col-lg-6 col-md-12 content">
                <h1 class="mbr-section-title mbr-bold align-left mbr-white pb-5 mbr-fonts-style align-left display-1">
                    Innovation and Discovery with <b>eLearn</b>
                </h1>
                <p class="mbr-text align-left pb-4 mbr-fonts-style display-7" style="">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisl elit, varius ut magna vel, tincidunt iaculis sem. Interdum
                et malesuada fames ac ante ipsum primis in faucibus.</p>
                <div style="font-family:  'DM Sans', sans-serif; font-weight: 500;" class="mbr-section-btn align-left">
                    <a class="btn btn-md btn-primary display-4" href="login.php">
                    Sign In for Excustion</a>
                    <a style="background-color: ; color: white;" class="btn btn-md btn-danger display-4" href="">
                    Learn More</a>
                </div>
            </div>

            <div class="mbr-white img-col col-lg-6 col-md-12">
                <img class=" col-12 pt-5 mt-5" src="images/044.jpg" title="" alt="">
            </div>


        </div>
    </div>

</section>











<!-- Team Section -->
<div>




</div>




<!-- About Section -->



<!-- Login -->


<script src="project.js"></script>
<link rel="stylesheet" href="project.css">


<!--course-->
<!-- Page Content 
<div class="container pt-5 mt-5">

  <!-- Page Heading 
 

  </div>
  
  <!-- /.row 


<<<<<<< Updated upstream
</div>
<!-- /.container 


<!-- Contact 

 <div class="container">

  <div class="header">
    <h2>get in touch<h2>
  </div>
  <div class="content-form">
    <section>
    <i class="fa fa-location-arrow fa-2x" aria-hidden="true"></i>
      <h2>Address</h2>
      <p>
        lorrem klsikjdmfk.<br>
        lorrem klsikjdmfk.<br>
        lorem.
      </p>
    </section>

    <section>
    <i class="fa fa-phone-square fa-2x" aria-hidden="true"></i>
      <h2>Phoone</h2>
      <p>1673893020</p>
    </section>

    <section>
    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
    <h2>E-mail</h2>
      <p>lorem@gamil.com</p>
    </section>
  </div>

  <form>
    <div class="form">
      <div class="right">

        <div class="contact-form">
          <input type="text" required>
          <span>Full name</span>
        </div>

        <div class="contact-form">
          <input type="E-mail" required>
          <span>Email</span>
        </div>

        <div class="contact-form">
          <textarea name="text"></textarea>
          <span>
            type your message
          </span>
        </div>

        <div class="contact-form">
          <input type="submit" name="submit">
         
        </div>



      </div>
    </div>
  </form>

  <div class="media">

  <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li>
  <li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
  <li><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
  <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li>
  </div> 

  <div class="empty">

  
  </div>

</div>
--->
<!-- Courses -->
</br>
<h1 class="container pt-5 " style="text-align: center; font-size: 35px; text-decoration: ;"><b style="font-weight: strong; font-size: 70px; color: #fa3434;">eLearn</b> Courses</h1>

<div class="container pt-5  " id="c1">




    <div class="row" style="display: flex;"  >
       <?php
                    $j = 0;

                    while ($j < 6) {





echo '
 
  
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="course_details.php"><img class="card-img-top" src="images/'. $products[$j]->imageFile .'" style="height: 300px;" alt=""></a>
        <div class="card-body" id="" style="">
          <h4 style="font-size: 30px;">
'.$products[$j]->title.'</h4>
          <p class="card-text">'.$products[$j]->details.'</p>


          <div class="row">

            <div class="col-md-6">
              <a href="course_details.php"><button id="button"  style="padding: 8px 35px; font-size: 20px; color: ;"><b> View</b></button></a>
            </div>
            <div class="col-md-6">          <a href=""  style="{color:green;} :hover { color: skyblue; }; font-size: 25px; font-weight:bold;">Price'. $products[$j]->price.'$</a></div>

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
              <span class="fa fa-star" style="font-size: 15px;"></span>

            </div></div>
          </div>
        </div>
      </div>
    </div>';


  $j++;

}?>

  </div>



    </div>
</div>

<div><a href="allc.php" class=" row container-fluid col "><button class="btn col-md-6 btn-success container-fluid" style=" width:  15%; justify-content:  center; ">View All Courses</button></a></div>





<span id="team">

</span>

<script src="card.js"></script>
<script type="text/javascript" src="project.css"></script>



<!-- Team -->


<section class="team ">
    <div style=" font-family: "Poppins", sans-serif;" class="container-fluid">
        <h1 style="color:  #7bb2e3; text-decoration: ;" class=""><b style="font-weight: strong; font-size: 70px; color: #fa3434;">eLearn</b> User Feedback</h1>
        <div class="row" style="margin-top: 0px;">

            <div class="slideshow-container" style="background-image: url(images/background.jpg); background-repeat: no-repeat; background-attachment: fixed ;background-size: cover; position: relative; font-weight: 800; padding-top: 0px;">
               

  <?php

  $k=0;

  while($k<ceil($i2/3)){


                ?>
                    <div class="mySlides" >
                         <div class="row" >

                            <?php

  
                    $j2 = 0;

                    while ($j2 < $k+3) {



                           
                        echo ' 
                   

                    
                       
                        <div class="col-md-4 profile text-center">
                            <div class="img-box">
                                <img  src="images/'. $products2[$j2]->imageFile.'" class="img-responsive" style="height: 150px ;
                                width:150px; border-radius: 50%;">
                            </div>
                            <h2>'. $products2[$j2]->name .'</h2>
                            <h3>'. $products2[$j2]->occupation .'</h3>
                            <p style="font-size: 15px; color: darkcyan; font-weight: 300;">'. $products2[$j2]->details .'</p>
                        </div>
                          




                       

                       
                  ';


                        $j2++;

}?>

<?php

$k++; ?>
</div> 

                  



</div>
<?php
}?> 





                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
                <div class="dot-container">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
              </div>




              <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                  showSlides(slideIndex += n);
              }

              function currentSlide(n) {
                  showSlides(slideIndex = n);
              }

              function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}    
                      if (n < 1) {slideIndex = slides.length}
                          for (i = 0; i < slides.length; i++) {
                              slides[i].style.display = "none";  
                          }
                          for (i = 0; i < dots.length; i++) {
                              dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";  
                          dots[slideIndex-1].className += " active";
                      }
                  </script>

                  <style type="text/css">

                    .slideshow-container {
                      position: relative;
                      background: #f1f1f1f1;
                  }

/* Slides */
.mySlides {
  display: none;
  padding: 0px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}</style>
</div>
</div>
</section>  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Contact -->







<!-- Counter -->


<div class="container">
  <div class="row">
      <br/>
      <div class="col text-center">
        <h2 style="font-size: 35px; text-decoration: overline;">Statistics</h2>
        <p><b style="font-weight: strong; font-size: 50px; color: #fa3434;">eLearn</b> is on their way</p>
    </div>
    

    
</div>
<div class="row text-center">
  <div class="col">
      <div class="counter" id="counter">
          <i class="fa fa-code fa-2x" id="fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="1099" data-speed="1000"></h2>
          <p class="count-text " id="count-text">Our Customer</p>
      </div>
  </div>
  <div class="col">
   <div class="counter" id="counter">
      <i class="fa fa-coffee fa-2x" id="fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="17000" data-speed="1000"></h2>
      <p class="count-text " id="count-text">Happy Users</p>
  </div>
</div>
<div class="col">
  <div class="counter" id="counter">
      <i class="fa fa-lightbulb-o fa-2x" id="fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="11900" data-speed="1000"></h2>
      <p class="count-text " id="count-text">Course Complete</p>
  </div></div>
  <div class="col">
      <div class="counter" id="counter">
          <i class="fa fa-bug fa-2x" id="fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="157" data-speed="1000"></h2>
          <p class="count-text " id="count-text">Course Conductors</p>
      </div>
  </div>
</div>
</div>

<!-- Feedback -->




<!-- Contact -->
<span id="contact"></span>

<div class="container pt-5 mt-5">
    <div><h1 style="text-align: center; text-decoration: overline;">Contact Us</h1></div>
    <br />
    <div class="row">
        <div class="col-md-6">
            <div id="googlemap" style="width:100%; height:350px;"></div>
        </div>
        <br />
        <div class="col-md-6" style="font-family: sans-serif, popins; font-size: 20px;" >
            <form class="my-form" method="POST">
                <div class="form-group">
                    <label for="form-name" style="color: gray;">Name:</label>
                    <input type="name" class="form-control" id="form-name" placeholder="Name"  name="name">
                </div>
                <div class="form-group">
                    <label for="form-email" style="color: gray;">Email Address:</label>
                    <input type="email" class="form-control" id="form-email" placeholder="Email Address" name="email">
                </div>
                <div class="form-group">
                    <label for="form-subject"style="color: gray; "  >Subject:</label>
                    <input style="height: 20px;" type="text" class="form-control" id="form-subject" placeholder="Subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="form-message" style="color: gray;">Your Message:</label>
                    <textarea class="form-control" id="form-message" placeholder="Message" style="margin-bottom:20px;" name="message"></textarea>
                </div>
                <button name="ok" class="btn btn-success" style="border-radius: 10px;" type="submit" style="margin-bottom:0px;padding-top: 20px;"><b>Contact Us</b></button>                
            </form>
        </div>
    </div>
</div>
<label class="text-center " style="justify-content: center; text-align: center; margin-left: 680px; font-weight: 500; color: green; font-family: arial-black;">
<?php 

   $serverName = "127.0.0.1:3307";
    $userName = "root";
    $password = "";
    $database = "tabtest";

    $conn = mysqli_connect($serverName, $userName, $password, $database);

      if(!$conn){
        die("Sorry: ".mysqli_connect_error());
    }
    else{

    echo "";
}



if(isset($_REQUEST["ok"])){
$Name = $_REQUEST['name'];
$Email = $_REQUEST['email'];

$Subject = $_REQUEST['subject'];
$Message = $_REQUEST['message'];


    $sql = "INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Message`) Values ('$Name', '$Email','$Subject','$Message')";

    $result = mysqli_query($conn, $sql);
if(!$result){
    echo "error".mysqli_error($conn);
  

}
else {
      echo "Submitted";
    // code...
}
}


 ?>

</label>





<style>
    .my-form {
        color: #305896;
    }
    .my-form .btn-default {
        background-color: #305896;
        color: #fff;
        border-radius: 0;
    }
    .my-form .btn-default:hover {
        background-color: #4498C6;
        color: #fff;
    }
    .my-form .form-control {
        border-radius: 0;
    }
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng( 23.76370,  90.40689),
                zoom: 19,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            );
    });
</script>


<!-- Feedback -->





<!-- Footer -->

<div style="padding-top: 50px;">

</div>

<link rel="stylesheet" type="text/css" href="footer.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">




 <?php 
include 'navbar1.php';

 ?>

  <?php 
include 'footer.php';

 ?>
</body>
</html>



<?php 


    ?>
