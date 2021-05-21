<?php
include 'config.php';

session_start();

if(isset($_SESSION["user_id"])){
    $userid = $_SESSION["user_id"];
}else{
	$userid = 1;
}

$pdo = config::getConnection();
$tsql = "SELECT * FROM calendarevent WHERE userid = '$userid'";
$stmt = $pdo->prepare($tsql);

if($stmt->execute()) {
    //1,2,3 is the value to be send
    if($stmt->rowCount() > 0) {
        while($result = $stmt->fetchObject()) {
           print_r($result);
        }
    } else {
        echo 'there are no result';
    }
} else {
    echo 'there error in the query';
}

?>