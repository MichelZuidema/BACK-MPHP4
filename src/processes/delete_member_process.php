<?php
require_once '../includes/session.inc.php';
require_once '../config.inc.php';

//Get ID from URL
$id = $_GET['id'];

// Check if ID is a number
if (is_numeric($id)) {
    $query = "DELETE FROM `leden` WHERE id = '$id'";

    if(mysqli_query($mysqli, $query)) {
        header("Location: ../../home.php");
        exit;
    } else {
        echo "Something went wrong while deleting the user!";
    }
} else {
    echo "<script>alert('The ID is not a valid number!');</script>";
    header("Refresh: 0;url=../../home.php");
}
?>