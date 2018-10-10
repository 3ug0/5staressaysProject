<?php 
extract($_POST);
include 'connect.php';
$sql= "INSERT INTO projects (email,topic,type,urgency,pages,instructions,style) VALUES ('$email',
'$topic','$type','$urgency','$pages','$instructions','$style') ";
$results = mysqli_query($db,$sql) or die(mysqli_error($db));
 ?>