<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set cookies</title>
</head>

<body>
    <!-- 1. Write a PHP script to keep track of number of times the web page has been access. [Use
session and cookies. -->
    <?php

    if (isset($_COOKIE['cnt'])) {
        $x = $_COOKIE['cnt'];
        $x = $x + 1;
        setcookie('cnt', $x);
    } else {
        setcookie('cnt', 1);
        echo "you accessed this page 1st time<br>";
        die();
    }
    echo "you accessed this page $x times";
    ?>
</body>

</html>