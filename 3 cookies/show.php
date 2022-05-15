<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <?php
    $msg=$_COOKIE['msg'];
    $fstyle = $_COOKIE['fstyle'];
    $fsize = $_COOKIE['fsize'];
    $fcolor = $_COOKIE['fcolor'];
    $bgcolor = $_COOKIE['bgcolor'];



     
       echo "Your text is: $msg <br>";
       echo "Font style is:$fstyle <br>";
       echo "font size is: $fsize <br>";
       echo "font color is: $fcolor <br>";
       echo "background color is: $bgcolor <br>";


       echo "<form method='post'>";
       echo "<input type='submit' value='Apply changes' name='second'>";
       echo "</form>";
       if(isset($_POST['second']))
       {
           header("location:third.php");
       }
    ?>
</body>
</html>