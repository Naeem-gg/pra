<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied rules</title>
</head>
<!-- <font ></font> -->
<?php

            

                $a = $_COOKIE['msg'];
                $b = $_COOKIE['fstyle'];
                $c = $_COOKIE['fsize'];
                $d = $_COOKIE['fcolor'];
                $e = $_COOKIE['bgcolor'];
                echo "<body bgcolor=$e>";
                echo "<font face=$b size='$c' color=$d >";
                echo "<h1>$a</h1>";
                echo "</font>";
                echo "</body>";
                
            
?>
</html>
