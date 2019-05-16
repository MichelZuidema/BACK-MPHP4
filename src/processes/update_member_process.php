<?php
require_once 'src/includes/session.inc.php';
require_once '../config.inc.php';

if (isset($_POST['submit'])) {
    $gender = $_POST['gender'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth_date = $_POST['birth_date'];
    $member_since = $_POST['member_since'];
    $id = $_POST['id'];

    if (strlen($gender) > 0 &&
        strlen($first_name) > 0 &&
        strlen($last_name) > 0 &&
        strlen($birth_date) > 0 &&
        strlen($member_since) > 0) {
        $check1 = strtotime($birth_date);
        $check2 = strtotime($member_since);
        if(date('Y-m-d', $check1) == $birth_date && date('Y-m-d', $check2) == $member_since) {
            $query = "UPDATE `leden` SET gender='$gender', first_name='$first_name', last_name='$last_name', birth_date='$birth_date', member_since='$member_since' WHERE id = '$id'";
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