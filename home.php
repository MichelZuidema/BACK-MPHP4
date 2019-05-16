<?php
require_once 'src/includes/session.inc.php';
require_once 'src/config.inc.php';
?>
<html>
    <head>
        <title>MPHP4 | Home</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta charset="UTF-8">
    </head>
    <body>
        <?php require_once 'src/includes/header.php'; ?>
        <main style="margin-top: 10%;">
            <div class="container">
                <h1><b>Welcome, <?php echo $_SESSION['username']; ?></b></h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Member Since</th>
                        <th scope="col">Event</th>
                        <th scope="col">Picture</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM leden ORDER BY last_name ASC";
                        $result = mysqli_query($mysqli, $query);

                        while($row = mysqli_fetch_array($result)) {
                            echo '<tr>';
                            echo "<th scope='row'> " . $row['id'] . "</th>";
                            echo "<td>" . $row['birth_date'] . "</td>";
                            echo "<td>" . $row['first_name'] . "</td>";
                            echo "<td>" . $row['last_name'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['member_since'] . "</td>";
                            echo "<td><a href='update_member.php?id=" . $row['id'] . "'>Update</a> <a href='delete_member.php?id=" . $row['id'] . "'>Delete</a></td>";
                            echo "<td><a href='picture.php?id=" . $row['id'] . "'>Picture</a></td>";
                            echo '</th>';
                            echo '</tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</html>
