<?php

include '../config.php';
include 'session.php';
$userid=$_SESSION['id'];
$postid = $_REQUEST['postid'];
$rating = $_REQUEST['rating'];

// Check entry within table
$query = "SELECT COUNT(*) AS 'cntpost' FROM Valoracion WHERE lugar_valoracion='$postid' AND 
		usuario_valoracion='$userid';";

$result = $mysqli->query($query);
$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['cntpost'];

if($count == 0){
    $insertquery = "INSERT INTO Valoracion (usuario_valoracion,lugar_valoracion,rating) VALUES ('$userid', '$postid', '$rating')";

    $execonsulta=$mysqli->query($insertquery);
}else {
    $updatequery = "UPDATE Valoracion SET rating='$rating' WHERE usuario_valoracion='$userid' AND lugar_valoracion='$postid'";

    $execonsulta=$mysqli->query($updatequery);
}


// get average
$query = "SELECT ROUND(AVG(rating),1) AS averageRating FROM Valoracion WHERE lugar_valoracion='$postid'";
$result = $mysqli->query($query) or die(mysqli_error());
$fetchAverage = mysqli_fetch_array($result);
$averageRating = $fetchAverage['averageRating'];

$return_arr = array("averageRating"=>$averageRating);

echo json_encode($return_arr);
?>