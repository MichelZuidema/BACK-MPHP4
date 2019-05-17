<?php
require_once '../includes/session.inc.php';
require_once '../config.inc.php';

if (isset($_POST['submit'])) {
    // Get form data
    $gender = $_POST['gender'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth_date = $_POST['birth_date'];
    $member_since = $_POST['member_since'];

    // Check if variables are empty
    if (strlen($gender) > 0 &&
        strlen($first_name) > 0 &&
        strlen($last_name) > 0 &&
        strlen($birth_date) > 0 &&
        strlen($member_since) > 0) {

        // Check if the time are in the correct format
        $check1 = strtotime($birth_date);
        $check2 = strtotime($member_since);
        if(date('Y-m-d', $check1) == $birth_date && date('Y-m-d', $check2) == $member_since) {
            $query = "INSERT INTO `leden` (id, birth_date, first_name, last_name, gender, member_since) VALUES (NULL, '$birth_date', '$first_name', '$last_name', '$gender', '$member_since')";

            if (mysqli_query($mysqli, $query)) {
                header("Location: ../../home.php");
                exit;
            } else {
                echo "Something went wrong!";
            }
        } else {
            echo "One of the dates is incorrect!";
        }
    } else {
        echo "Not all fields were filled in!";
    }
} else {
    echo "You did not enter this page with a valid POST request.";
}
?>