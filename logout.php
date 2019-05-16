<?php
session_start();

session_destroy();

header("Location:/BACK-MPHP4/index.php");
?>