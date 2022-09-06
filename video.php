


<?php 




 include 'dbConnection.php';
include 'fetch_lesson.php';
$cc = $_SESSION['play'];

?>

<!DOCTYPE html> 
<html> 
<body> 

<button onclick="playVid()" type="button">Play Video</button>
<button onclick="pauseVid()" type="button">Pause Video</button><br> 

<video id="myVideo" width="700" height="800">
  <source src="images/<?php echo $cc;
 ?>" type="video/mp4">
  <source src="" type="video/ogg">
  
</video>

<script> 
var vid = document.getElementById("myVideo"); 

function playVid() { 
  vid.play(); 
} 

function pauseVid() { 
  vid.pause(); 
} 
</script> 


</body> 
</html>
