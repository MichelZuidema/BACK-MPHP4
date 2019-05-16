<?php
require_once 'src/config.inc.php';
$id = $_GET['id'];

if(!is_numeric($id)) {
    echo "<script>alert('The ID is not a valid number!');</script>";
    header("Refresh: 0;url=home.php");
}
?>
<html>
    <head>
        <title>MPHP4 | Update Member</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        require_once 'src/includes/header.php';
        $query = "SELECT * FROM leden WHERE id = '$id'";
        $result = mysqli_query($mysqli, $query);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
        } else {
            echo "No member found!";
            exit;
        }
        ?>
        <main style="margin-top: 10%;">
            <div class="container">
                <h1>Delete Member</h1>
                <p>Are you sure your want to delete <b><?php echo $row['first_name'] . " " . $row['last_name']; ?></b>?</p>
                <p>
                    <a href="src/processes/delete_member_process.php?id=<?php echo $row['id']; ?>"><button class="tn btn-primary mb-2">Yes</button></a>
                    <a href="home.php"><button class="tn btn-danger mb-2">No</button></a>
                </p>
            </div>
        </main>
    </body>
</html>

