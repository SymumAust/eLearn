<?php session_start() ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Login Form</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">User Password Recover</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>


   

 



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
    <link rel="shortcut icon" href="images/logo.png" alt="logo" width="30" height="45" style="padding-bottom: 12px;" class=""><b style="font-size: 30px; color: #7bb2e3">
        <!-- NavBar -->
        <span id="login"></span>


    </head>
    <body style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover;">


        



  <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                
                if(id.length=="" ) {  
                    alert("Email is empty");  
                    return false;  
                }  
                                          
            }  
        </script>  














        <!-- Forget -->



<span id="forget"></span>
<div style="background-image: url(images/background.jpg); background-repeat: no-repeat;background-attachment: fixed ;background-size: cover; padding-bottom: 20px;" id="container">
<div class="row col pt-5 mt-5  container-fluid " >

            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                        <img src="images/logo.png" style="padding-bottom: 10px; padding-top: 15px;" id="icon" alt="User Icon" />
                    </div>
                    <h5>Reset Your Password</h5>

                    <!-- Login Form -->
                    <form action="#" method="POST" name="recover_psw" action="forget.php" name="f1" autocomplete="off" onsubmit = "return validation()" method = "POST">
                        <?php 
                            if($errors>0){
                                foreach ($errors as $displayErrors) {
                                    // code...
                                    ?>
                                    <div id="alert"><?php echo $displayErrors; ?></div>
                                    <?php 

                                }
                            }
                        ?>
                        <input   type="text" id="email_address" class="form-control" name="email" required autofocus type="text" id="login" type="email" class="fadeIn second" name="email" placeholder="E-mail" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px;">
                        
                        <input type="submit" value="Recover" name="recover" type="submit" name="forget_password"  class="fadeIn fourth" value="Check">
                    </form>
                    <p style=" color: green ;font-size: 15px; font-weight: 300;">Enter your email address and we'll send you an email with instructions to reset your password.</p>

                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                        <a class="underlineHover" style="text-decoration: none; font-size: 15px" href="login.php">Log In?</a>
                        <p class=""style="text-decoration: none; font-size: 15px">Doesn't have an account?  <a class="underlineHover" style="text-decoration: none; font-size: 15px" href="registration.php">Register Here.</a></p>
                    </div>

            

                </div>
            </div>
            
        </div>

    </div>
        


<?php include 'navbar.php' ?>
<?php include 'footer.php' ?>

<link rel="stylesheet" type="text/css" href="footer.css">
            


    </body>
    </html>















<?php 
    if(isset($_POST["recover"])){
        include('connect/connection.php');
        $email = $_POST["email"];

        $sql = mysqli_query($connect, "SELECT * FROM `user_table` WHERE email='$email'");
        $query = mysqli_num_rows($sql);
        $fetch = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
            <script>
                alert("<?php  echo "Sorry, no emails exists "?>");
            </script>
            <?php
        }
        else{
            // generate token by binaryhexa 
            $token = bin2hex(random_bytes(50));

            //session_start ();
            $_SESSION['token'] = $token;
            $_SESSION['email'] = $email;

            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            // h-hotel account
            $mail->Username='elarncommunity2022@gmail.com';
            $mail->Password='elarncommunity12345';

            // send by h-hotel email
            $mail->setFrom('email', 'Password Reset');
            // get email from input
            $mail->addAddress($_POST["email"]);
            //$mail->addReplyTo('lamkaizhe16@gmail.com');

            // HTML body
            $mail->isHTML(true);
            $mail->Subject="Recover your password";
            $mail->Body="<b>Dear User</b>
            <h3>We received a request to reset your password.</h3>
            <p>Kindly click the below link to reset your password</p>
            http://localhost/project_eLearn/eLearn/Login-System-main/reset_psw.php
            <br><br>
            <p>With regrads,</p>
            <b>@eLearn Community </b>";

            if(!$mail->send()){
                ?>
                    <script>
                        alert("<?php echo " Invalid Email "?>");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        window.location.replace("notification.html");
                    </script>
                <?php
            }
        }
    }


?>
