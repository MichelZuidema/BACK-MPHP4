<?php
require_once 'src/config.inc.php';
?>
<html>
    <head>
        <title>MPHP4 | Login</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta charset="UTF-8">
    </head>
    <body>
        <?php require_once 'src/includes/header.php'; ?>
        <main style="margin-top: 10%;">
            <div class="container" style="width: 40%;">
                <form action="src/processes/login_process.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="John..." name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Secret..." name="password" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" id="form_submit" class="btn btn-primary mb-2" value="Submit!" name="submit">
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>
