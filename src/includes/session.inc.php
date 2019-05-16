<?php
session_start();

if(!isset($_SESSION['username']) || strlen($_SESSION['username']) == 0){
    header("Location:/BACK-MPHP4/index.php");
    exit;
}
?>