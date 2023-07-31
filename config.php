<?php
$host = "localhost";
$data = "mysite";
$user = "root";
$pass = "";

require_once "config.php";
$connection = new mysqli($host,$user,$pass,$data);
if($connection -> connect_error)die("Error connection");

$query = "SELECT * FROM ";