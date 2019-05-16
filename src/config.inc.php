<?php

$host = "localhost";
$user = "root";
$password = "Kaas@360!420";
$db = "MPHP4";

$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_error) {
    die("MySQLI Connection error: " + $mysqli->connect_error);
}

?>