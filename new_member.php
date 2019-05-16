<?php
require_once 'src/config.inc.php';
?>
<html>
    <head>
        <title>MPHP4 | New </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <meta charset="UTF-8">
    </head>
    <body>
        <?php require_once 'src/includes/header.php'; ?>
        <main style="margin-top: 10%;">
            <div class="container">
                <form action="src/processes/new_member_process.php" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="gender_m" name="gender" value="M" checked>
                            <label class="form-check-label" for="gender_m">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="gender_f" name="gender" value="F">
                            <label class="form-check-label" for="gender_f">Female</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" id="first_name" placeholder="John..." name="first_name" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Doe..." name="last_name" required>
                    </div>

                    <div class="form-group">
                        <label for="birth_date">DOB:</label>
                        <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                    </div>

                    <div class="form-group">
                        <label for="member_since">Member Since:</label>
                        <input type="date" class="form-control" id="member_since" name="member_since" required>
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
