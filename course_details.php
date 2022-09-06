<?php include 'dbConnection.php'; ?>
<?php include 'allc.php';?>

<?php include 'fetch.php'; ?>

<?php include 'fetch_course_details.php';


echo "temp_title";?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eLearn</title>

    <link rel="stylesheet" href="course_details.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="shortcut icon" href="images/logo.png" alt="logo" width="30" height="45" id="oop">

    
</head>
<body id="main" style=""  >

   

   <section class="main container-fluid pt-5 mt-5 " >
    <div class="c-head">
        <h1><b  style="text-decoration: overline;">Course Details</b></h1>
    </div>

    <?php echo '
    <div class="container">
        <div id="row" class="row ">
            <div class="col">
                <img src="images/'.$temp_imageFile.'" alt="java" >
            </div>
            <div class="col">
                <h2>'.$temp_title.'</h2>

                <p>Learn javascript online and supercharge your web design with this Javascript for beginners training course</p>
                <i class="bi bi-check" style="background: transparent;"></i><h6>Extensive, informative and interesting video lecture</h6>
                <i class="bi bi-check" style="background: transparent;"></i><h6>Complete Code demonstrated in lecture</h6><br>

                
                <div id="row" class="row ">
                    <div class="col-md-6">
                     <a href="payment.php"> <button id="button" style="padding: 8px 35px; font-size: 20px; color: ;"><b> Enroll</b></button></a>
                  </div>
                  <div class="col-md-6 ">
                   <span id="myspan"><b> '.$temp_price.'</b></span>
               </div></div>
               


           </div>
       </div>


   </div>'; ?>

   <div class="container-fluid">
    <div id="row" class="row" >
        <ul>
            <li>
                <span class="num">1.</span>
                <span class="name">Introduction</span>
                <span style="margin-left:340px ;"><i class="bi bi-clock"  style="background: transparent;"></i></span>
                <span class="number">12:00</span>

            </li>
            <li>
                <span class="num">2.</span>
                <span class="name">Learn about variables,keyword,library functions</span>
                <span ><i class="bi bi-clock" style="background: transparent;"></i></span>
                <span class="number" style="margin-right:45px ;">15:00</span>

            </li>
            <li>
                <span class="num">3.</span>
                <span class="name">Learn about loops,conditional statememt
                </span>
                <span style="margin-left: 138px ;"><i class="bi bi-clock" style="background: transparent;"></i></span>
                <span class="number">20:00</span>

            </li>

            <li>
                <span class="num">4.</span>
                <span class="name">Number method</span>
                <span style="margin-left:314px ;"><i class="bi bi-clock" style="background: transparent;"></i></span>
                <span class="number">25:00</span>
            </li>



        </ul>

        <div style="padding-bottom: 50px; font-family:  'DM Sans', sans-serif; justify-content: center; text-align: center; margin-right: 100px; font-weight: 500;" class="container-fluid mbr-section-btn align-left">
                    <a class="btn btn-md btn-primary display-4" href="https://mobirise.com">
                        Sign In for Excustion</a>
                    <a style="background-color: ; color: white;" class="btn btn-md btn-danger display-4" href="https://mobirise.com">
                        Learn More</a>
                </div>
    </div>

</div>


</section>

<!-- Footer -->

<?php include 'navbar1.php'; ?>
<?php include 'footer.php'; ?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</body>
</html>