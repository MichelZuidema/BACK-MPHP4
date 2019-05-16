<?php
require_once '../includes/session.inc.php';
require_once '../config.inc.php';

// Check if a picture upload exist without errors
if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
    // Check picture extensions
    if($_FILES['picture']['type'] == "image/jpg" ||
        $_FILES['picture']['type'] == "image/jpeg" ||
        $_FILES['picture']['type'] == "image/pjpeg") {

        $folder = "../../uploads/";

        $file = $_POST['id'] . '.jpg';

        // Upload the picture
        move_uploaded_file($_FILES['picture']['tmp_name'], $folder . $file);

        header("Location:../../picture.php?id=" . $_POST['id']);
    } else {
        echo "The uploaded file has a wrong extension type";
    }
} else {
    echo "Something went wrong while uploading the image.";
}
?>