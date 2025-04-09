<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql Connect</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin-top: 100px;
        }

        .btn-style {
            padding: 15px 10px;
            border: none;
            background-color: greenyellow;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form method="post">
        <button type="submit" name="connect" class="btn-style">Connect to database </button>
    </form>
</body>
<?php

if (isset($_POST["connect"])) {
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $connection = "";

    $connection = @mysqli_connect($db_host, $db_user, $db_password);

    if ($connection) {
        echo "Connected successfully";
    } else {
        echo "You Could Not Connect";
    }
}
?>


</html>