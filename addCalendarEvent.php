<?php 
include 'config.php';
session_start();

if(isset($_SESSION["user_id"])){
    $userid = $_SESSION["user_id"];
}else{
	$userid = 1;
}

print_r($_GET);
$date = $_GET["date"];
$eventData = $_GET["eventData"];
if ($eventData == ""){
	return;
}

$pdo = config::getConnection();
//$datt = strtotime($date);
$tsql = "INSERT INTO calendarevent VALUES ('NULL', '$date', '$eventData', '$userid')";
$stmt = $pdo->prepare($tsql);
$stmt->execute();

echo "success";

?>