<?php
session_start();
echo "<p>You are seeing this file because you have reached maximum number of allowed trials for logging in</p>";
// setcookie('at',3);
session_destroy();
echo "<a href=try.php>go back</a>"
?>