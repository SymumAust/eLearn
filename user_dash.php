<?php
include_once('../dbConnection.php');
if(!isset($_SESSION)){
    session_start();
}  
if(isset($_SESSION['is_login'])){
    $stuLogEmail = $_SESSION['stuLogEmail'];
}

//else{
//    echo"<script> location.href='../index.php';</script>";
//}

if(isset($stuLogEmail)){
    $sql = "SELECT stu_img FROM student WHERE stu_email=
    '$stuLogEmail'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img=$row['stu_img'];
}

?>


  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="user_dash.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="sidebar">
        <div class="sidebar-menu">
            <ul id="dashuser_ul">

            <img src="<?php echo $stu_img" style="height: 150px; width: auto; border-radius: 50%; margin-left: 50px ; margin-top: 20px;"  >
                <h4 style="margin-left: 40px; color: darkcyan;" >Md. Symum Hossain</h4>
                <li>
                    
                    <a href="my_profile.php" class="active"><span class="las la-igloo"></span>
                        <span> My Profile </span></a>
                
                </li>

                <li>
                    <a href="my_courses.php"><span class="las la-inbox"></span>
                        <span>My Courses</span></a>
                    
                </li>

                <li>
                    <a href="" ><span class="las la-file-invoice"></span>
                        <span>My Progress</span></a>
                    
                </li>

                <li>
                    <a href=""><span class="las la-cog"></span>
                        <span>Settings</span></a>
                    
                </li>
            </ul>
        </div>
    </div>

    

</body>
</html>