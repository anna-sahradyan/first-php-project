<?php
$host = "localhost";
$data = "mysite";
$user = "root";
$pass = "";
header("Access-Control-Allow-Origin:*");
require_once "config.php";
$connect = mysqli_connect($host, $user, $pass, $data);
if (!$connect) {
    echo "Error connect";
}
$query = "SELECT * FROM header";
$result = mysqli_query($connect, $query);

if (!$result) {
    die("Error in query: " . mysqli_error($connect));
}

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}


echo json_encode($data);