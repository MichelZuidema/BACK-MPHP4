<?php
require_once '../config.inc.php';

$id = $_GET['id'];

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