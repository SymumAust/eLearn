<?php 
session_start();
include 'class.php';
$varname = new va();

$var_value ='0';


//On page 2




                        

                        



include 'dbConnection.php';





  

		if(isset($_POST["loggin"])){
			$p=$_POST['email'];
			$_SESSION['em'] = $p;
			
			$pp=0;
                	$_SESSION['lo']=$pp;
           

            



			if($_POST['email'] == 'admin')
			{
				$password = $_POST['password'];
				$sql2 = mysqli_query($conn, "SELECT * FROM user_table where password = '$password'");
				$count2 = mysqli_num_rows($sql2);

				if($count2 > 0){
                        		header('Location: dash_admin.php');
                        		exit();

             }}




        $email = mysqli_real_escape_string($conn, trim($_POST['email']));

        $password = trim($_POST['password']);
        $sql = mysqli_query($conn, "SELECT * FROM user_table where email = '$email'");
        $count = mysqli_num_rows($sql);

            if($count > 0){
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
    
                if($fetch["Status"] == 0){
                    ?>
                    <?php  
                        echo "Please verify email account before login.";
                    ?>
                    <?php
                }else if(password_verify($password, $hashpassword)){
                	$pp=1;
                	
                	$var_value =1;
                	$_SESSION['varname'] = $var_value;
                	
                    ?>
                    <script>
                        alert("login in successfully");

                    </script>
                        <?php  
                        	
                        	
                        		  header('Location: user_dash.php');
                        	

                        ?>
                       

                    <?php
                    
                }else{
                    ?>
                   <?php  
                        echo  "email or password invalid, please try again.";
                    ?>
                    <?php
                }
            }
            else
            	echo "Create account before login!!!";
                
    } 





?>