<?php

// require_once("cors.php");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: X-Requested-With');

$connect = mysqli_connect("localhost", "root", '', "practice");
$sql = "SELECT * FROM language_tbl ORDER BY ID DESC";
$result = mysqli_query($connect, $sql);
$json_array = array();
while($row = mysqli_fetch_assoc($result)){
    $json_array[]=$row;
}

echo json_encode($json_array);
?>