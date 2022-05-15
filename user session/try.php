<?php
session_start();
?>
<!-- Write a PHP script to accept username and password. If in the first three chances,
username and password entered is correct then display second form with “Welcome
message” otherwise display error message. [Use Session] -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session user pass</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <td>

                    <strong>Enter Username:</strong>
                </td>
                <td>
                    <input type="text" name="user">

                </td>
            </tr>
            <tr>
                <td>
                    <strong>Enter password:</strong>

                </td>
                <td>
                    <input type="password" name="pass">

                </td>

            </tr>
            <tr></tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="check" name="sub">
                </td>
            </tr>
        </table>
    </form>
    <?php

    print_r($_SESSION['at']);
    if (isset($_POST['sub'])) 
    {
       $_SESSION['user']=$user=$_POST['user'];
       $_SESSION['pass']=$pass=$_POST['pass']; 

       if($user===$pass)
       {
           header("Location:login.php");
       } 
       else
       {
            if(isset($_SESSION['at']))
            {
                $at=$_SESSION['at'];
                $at-=1;
                // setcookie('at',$at);
                $_SESSION['at']=$at;
                if($at!==0)
                {
                    echo "<script>alert('You have $at attempts left.');</script> ";

                }
                else
                {
                    
                    header("Location:error.php");
                }
            }
            else
            {
                // setcookie('at',3);
                $_SESSION['at']=3;
                
                echo "<script>alert('you have 3 attempts left.')</script>";
                die();
            }
       }
    }
    ?>
</body>

</html>