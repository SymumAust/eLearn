<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="payment.css">



</head>
<body style="min-height: 100vh;
background: url(images/background.jpg) no-repeat;
background-size: cover;
display: flex;">
 
  <div class="container">
    <div class="row">
        <h1 style="font-weight:bold; font-size:70px; margin-left: 50px;margin-top: 50px; text-align: center;margin-bottom: 30px;">Payment Procedure</h1>
    </div>

    <div class="row" style="background-color: #DFDFDE ;height: 500px; width:450px;margin-left: 460px;">

        <div class="contact-form" style="margin-left: 20px;">
            <form class="contact" action="" method="post" 
            >
              <input type="number" name="number" class="text-box" placeholder="Order ID" required style="height: 50px;
              padding: 12px;
              font-size: 15px;
              border-radius: 5px;
              box-shadow: 0 1px 1px rgba(0,0,0,0.1);
              margin-bottom: 20px; margin-top: 20px;width: 400px;">
              <input type="text" name="name" class="text-box" placeholder="Name" required style="height: 50px;
              padding: 12px;
              font-size: 15px;
              border-radius: 5px;
              box-shadow: 0 1px 1px rgba(0,0,0,0.1);
              margin-bottom: 20px;width: 400px;margin-top: 20px;">
              <input type="email" name="email" class="text-box" placeholder="Email" required style="height: 50px;
              padding: 12px;
              font-size: 15px;
              border-radius: 5px;
              box-shadow: 0 1px 1px rgba(0,0,0,0.1);
              margin-bottom: 20px;width: 400px;margin-top: 20px">
              <input type="number" name="number" class="text-box" placeholder="Total amount" required style="height: 50px;
              padding: 12px;
              font-size: 15px;
              border-radius: 5px;
              box-shadow: 0 1px 1px rgba(0,0,0,0.1);
              margin-bottom: 20px;width: 400px;margin-top: 20px">
              
              
              <input type="submit" name="submt" class="send-btn" value="Checkout" style="float: left;
              background-color: #525E75;
              color: #fff;
              border: none;
              width: 120px;
              height: 40px;
              font-size: 15px;
              font-weight: 600;
              text-transform: uppercase;
              letter-spacing: 2px;
              border-radius: 5px;
              cursor: pointer;
              transition: 0.3s;margin-top:20px;">

              <span>
                <input type="submit" name="submt" class="send-btn" value="Cancel" style="float: left;
              background-color: #525E75;
              color: #fff;
              border: none;
              width: 120px;
              height: 40px;
              font-size: 15px;
              font-weight: 600;
              text-transform: uppercase;
              letter-spacing: 2px;
              border-radius: 5px;
              cursor: pointer;
              transition: 0.3s;margin-top:20px;margin-left: 150px;">
              </span>

              <div>
                <p  style="font-size: 15px;margin-top:70px">Note:Purchase the course by Clicking Submit button</p>
              </div>
            </form>
          </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>