

<?php include 'fetch.php'; ?>








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
  <link rel="shortcut icon" href="images/logo.png" alt="logo" width="30" height="45" style="padding-bottom: 12px;" class="">
    <!-- NavBar -->




  </head>
  <body>




<div style="background-image: url(images/background.jpg); background-repeat: no-repeat; background-attachment: fixed ;background-size: cover; position: relative; font-weight: 800;">



<h1 class="container pt-5 mt-5" style="margin-top: 50px; text-align: center; font-size: 35px; text-decoration: ;"><b style="font-weight: strong; font-size: 70px; color: #fa3434;margin-top: 50px;">eLearn </b>All Courses</h1>

<div class="container pt-5  " id="c1">






    <div class="row" style="display: flex;"  >
       <?php
                    $j = 0;

                    while ($j < $i) {





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

<link rel="stylesheet" type="text/css" href="footer.css">
      
<?php include 'navbar.php'; ?>

  <?php include 'footer.php'; ?>

  </body>
  </html>