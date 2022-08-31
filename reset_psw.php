<?php session_start() ;
include('dbConnection.php');
?>


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
                    <h5>Create Your Password</h5>

                    <!-- Login Form -->
                    <form  action="#" method="POST" name="recover_psw   name="f1" autocomplete="off" onsubmit = "return validation()" >


                        <input  type="password" id="email_address" class="form-control" name="password" required autofocus type="text" id="login" type="email" class="fadeIn second" name="email" placeholder="New Password" style="font-size: 15px; justify-content: center; width: 85%; text-align: center; height: auto; padding-bottom: 12px; padding-top: 12px; margin-bottom: 20px; border-style: unset; box-shadow: 1px 1px 1px skyblue; border-color: skyblue; border-radius: 3px; margin-left: 33px;">
                        
                        
                        <input type="submit" value="Reset" name="reset"  type="submit" value="Recover" name="recover" type="submit"  class="fadeIn fourth" >
                    </form>
                    

                    <!-- Remind Passowrd -->
                    <div id="formFooter"><p style="font-size: 15px; color: darkred; font-weight: bold;">




<?php
    if(isset($_POST["reset"])){
       
        $psw = $_POST["password"];

        $token = $_SESSION['token'];
        $Email = $_SESSION['email'];

        $hash = password_hash( $psw , PASSWORD_DEFAULT );

        $sql = mysqli_query($connect, "SELECT * FROM user_table WHERE email='$Email'");
        $query = mysqli_num_rows($sql);
        $fetch = mysqli_fetch_assoc($sql);

        if($Email){
            $new_pass = $psw;
            mysqli_query($connect, "UPDATE user_table SET password='$new_pass' WHERE email='$Email'");
           echo "<b>Password Updated</b>"

            ?>
            <script>
                
                alert("<?php echo "your password has been succesful reset"?>");


                window.location.replace("login.php");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("<?php echo "Please try again"?>");
            </script>
            <?php
        }
    }

?>
                        



                    </p>
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




<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function(){
        if(password.type === "password"){
            password.type = 'text';
        }else{
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });
</script>
