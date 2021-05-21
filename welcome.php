<?php

session_start();
include 'DataHolder.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}
$dataHolder = new DataHolder();
$dataHolder->user_id = $_SESSION["user_id"]; // SET METHOD

echo 'Your unique ID is: '.$dataHolder->user_id; // GET METHOD
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
    <a href="logout.php">Logout</a>
</body>
</html>