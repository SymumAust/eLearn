


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


?>
<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>


  <div class="col-md-6 tm-mb-sm-4 tm-2col-l">
<?php 

$result = mysqli_query($conn,"SELECT *  FROM card_show"); 
foreach($result as $row){
?>   
<div class="image">
<img src="images/044.jpg" class="img-fluid" />
</div>
<div class="tm-box-3">    
<h1><?php echo $row['id']; ?></h1>
<h2><?php echo $row['domain_name']; ?></h2>
<h3><span><?php echo $row['sub_domain_name']; ?></span></h3>
<h4> <span><?php echo $row['topic_text_title']; ?></span></h4>
<p><?php echo $row['text_off_topic']; ?></p>
<div class="text-center">
<a href="#tm-section-5" class="btn btn-medium">Details</a>
</div>
</div>
<?php
}
?>
</div>

</body>
</html>
