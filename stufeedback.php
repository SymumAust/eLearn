<?php
if (!isset($_SESSION)){
    session_start();
}
include_once('dbConnection.php');
if(isset($_SESSION['is_login'])){
    $stuEmail=$_SESSION['stuLogEmail'];
}else{
    echo"<script> location.href='../index.php';</script>;
}

$sql = "SELECT * FROM student WHERE stu_email='$stuEmail' ";
$result = $conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
    $stuId=$row["stu_id"];
}

if(isset($_REQUEST['submitFeedbackBtn'])){
    if(($_REQUEST['f_content']=="")){
        $passmsg = '<div class=alert alert-warning col-sm-6 ml-5 mt-2"
        role="alert">Fill All the fields</div>';
        else{
            $fcontent=$_REQUEST["f_content"];
            $sql = "INSERT INTO  feedback (f_content,stu_id) VALUES('$fcontent','$stuId')";
            if(conn->query($sql)==TRUE){
                $passmsg = '<div class=alert alert-warning col-sm-6 ml-5 mt-2"
        role="alert">submitted</div>';
            }else{
                $passmsg = '<div class=alert alert-warning col-sm-6 ml-5 mt-2"
                role="alert">failed</div>';
            } 

        ?>    
            
        <div class="col-sm-6 mt-5">
        <form class="mx-5 method="POST" entype="multipart/form-data">
        <div class="form-group">
        <lebel for="stuId">STUDENT ID</lebel>
        <input type="text" class="form-control" id="stuId"
        name="stuuId" value=" <?php if(isset($stuId)) {echo $stuId;}?>" readonly>
        </div>
        <div class="form-group">
        <lebel for="f_content">Write Feedback</lebel>
        <textarea class="form-control" id=f_content" name="f_content row=2></textarea>
</div>

<button type="submit" class="btn btn-primary" name="submittedFeedbackBtn">Submit</button>
<?php if(isset($passmsg)) {echo $passmsg;}?>
</form>
</div>
</div>

