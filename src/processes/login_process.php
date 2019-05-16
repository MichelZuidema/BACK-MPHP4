<?php
require_once '../config.inc.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) > 0 && strlen($password) > 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($mysqli, $query);

        if(mysqli_num_rows($result) == 1) {
            session_start();

            $_SESSION['username'] = $username;

            header("Location:../../home.php");
        } else {
            header("Location:../../index.php");
            exit;
        }
    } else {
        echo "Not all fields were filled in!";
    }
} else {
    echo "You did not enter this page with a valid POST request.";
}
?>