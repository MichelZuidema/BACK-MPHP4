<?php
session_start();

// Check if user has a session username ( logged in )
if(!isset($_SESSION['username']) || strlen($_SESSION['username']) == 0){
    header("Location:/BACK-MPHP4/index.php");
    exit;
}
?>