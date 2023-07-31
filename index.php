<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Php Site</title>
</head>
<body>
<form action="index.php" method="get">
    Name: <input type="text" name="name">
    <br><br>
    UserName: <input type="text" name="username">
    <input type="submit">
</form>
<br>
<?php

    echo "Hello, " . $_GET['name'] . "!";
    echo "Hello, " . $_GET['name'] . $_GET['username'] ."!";

?>
</body>
</html>
