<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged in</title>
</head>
<body>
    <h3>User <?php echo $_SESSION['user']; ?> logged in successfully</h3>
    <?php
    echo "<script>alert('login successfully ');</script>";
    session_destroy();
    echo "<a href=try.php>go back</a>"

    ?>
</body>
</html>