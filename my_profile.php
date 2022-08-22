<?php
if(!isset($_SESSION)){
    session_start();
}


include_once('dbConnection.php');

if(isset($_SESSION[is_login])){
    $stuEmail=$_SESSION['stuLogEmail'];
}else{
    echo "<script> location.href='index.php';</script>";
}

$sql="SELECT *FROM student WHERE stu_email='$stuEmail'";
$result= $conn ->query($sql);
if($result ->num_rows ==1){
    $row= $result ->fetch_assoc();
    $stuId= $row["stu_id"];
    $stuName=$row["stu_name"];
    $stuOcc=$row["stu_occ"];
    $stuImg = $row["stu_img"];
}

if(isset($_REQUEST['updateStuNameBtn'])){
    if(($_REQUEST['stuName']=="")){
        //msg displayed if required field missing
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields </div>';
    }else{
        $stuName = $_REQUEST["stuName"];
        $stuOcc = $_REQUEST["stuOcc"];
        $stu_image = $_FILES['stuImg']['tmp_name'];
        $img_folder = '../image/stu/'. $stu_image;
        move_uploaded_file($stu_image_temp, $img_folder);
        $sql = "UPDATE student SET stu_name = '$stuName',stu_occ='$stuOcc',stu_img='$img_folder' WHERE stu_email = '$stuEmail'";
        if($conn ->query($sql)==TRUE){
            //submit success
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully </div>';
                   
        
        }else{
            //if submission failed
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Unable to Update </div>';
        }

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="col-sm-6 mt-5">
    <form class="mx-5" method="POST" enctype="multipart/form-data">
     <div class="form-group">
        <lebel for="stuId">Student Id</lebel>
        <input type="text" class="form-control" id="stuId" name="stuId" value="<?php if(isset($stuId)) {echo $stuId;}?>" readonly>
     </div>
    
     <div class="form-group">
        <lebel for="stuEmail">Email</lebel>
        <input type="email" class="form-control" id="stuEmail" value="<?php {echo $stuEmail;}?>" readonly>
     </div> 

     <div class="form-group">
        <lebel for="stuName">Name</lebel>
        <input type="text" class="form-control" id="stuName" name="stuName" value="<?php if(isset($stuName)) {echo $stuName;}?>" >
     </div>

     <div class="form-group">
        <lebel for="stuId">Occupation</lebel>
        <input type="text" class="form-control" id="stuOcc" name="stuOcc" value="<?php if(isset($stuOcc)) {echo $stuOcc;}?>" >
     </div>

     <div class="form-group">
        <lebel for="stuImg">Upload Image</lebel>
        <input type="file" class="form-control-fle" id="stuImg" name="stuImg">
     </div>
     
     <button type="submit" class="btn btn-primary" name="updateStuNameBtn">Update</button>
     <?php if(isset($passmsg)) {echo $passmsg; } ?>
</form>
</div>



</div>

</body>
</html>