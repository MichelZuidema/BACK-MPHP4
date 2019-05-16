<?php
require_once 'src/includes/session.inc.php';
require_once 'src/config.inc.php';

// Get the ID from the url and check if it is a number
$id = $_GET['id'];
if(!is_numeric($id)) {
    echo "<script>alert('The ID is not a valid number!');</script>";
    header("Refresh: 0;url=home.php");
}
?>
<html>
    <head>
        <title>MPHP4 | Picture</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta charset="UTF-8">
    </head>
    <body>
        <?php require_once 'src/includes/header.php'; ?>
        <main style="margin-top: 10%;">
            <div class="container">
                <?php
                    if(file_exists("uploads/" . $id . '.jpg')) {
                        echo "<img src='uploads/" . $id . ".jpg' alt='foto' width='360' height='450'>";
                    }
                ?>
                <form action="src/processes/picture_process.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <div class="form-group">
                        <label for="picture">Picture:</label>
                        <input type="file" class="form-control" id="picture" name="picture" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" id="form_submit" class="btn btn-primary mb-2" value="Submit!" name="submit">
                        <button id="form_cancel" class="btn btn-danger mb-2" onclick="history.back(); return false;">Cancel!</button>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>
