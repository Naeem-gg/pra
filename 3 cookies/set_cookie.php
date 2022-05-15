<!-- Write a PHP script to change the preferences of your web page like font style, font size,
font color, background color using cookie. Display selected setting on next web page and
actual implementation (with new settings) on third page. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>changing env with cookies</title>
</head>

<body>
    <form method="post">
        <center>
            Enter Your Text: <input type="text" name="msg"><br><br>
            Select Font Style: <select name="fontstyle">
                <option value="Arial">Arial</option>
                <option value="Times New Roman">Times New Roman</option>
                <option value="verdana">verdana</option>
            </select><br><br>
            Select Font Size:<select name="fontsize">
                <option value="6">6</option>
                <option value="10">10</option>
                <option value="20">20</option>
            </select><br><br>
            Select Font Color:<select name="fontcolor">
                <option value="red">Red</option>
                <option value="green">Green</option>
            </select><br><br>
            Select background Color: <select name="bgcolor">
                <option value="yellow">Yellow</option>
                <option value="blue">Blue</option>
            </select><br><br>
            <input type="submit" value="submit" name="sub">
            <input type="reset" value="reset">
        </center>
    </form>
    <?php
    if (isset($_POST['sub'])) {
        $msg = $_POST['msg'];
        $fstyle = $_POST['fontstyle'];
        $fsize = $_POST['fontsize'];
        $fcolor = $_POST['fontcolor'];
        $bgcolor = $_POST['bgcolor'];
        setcookie('msg', $msg);
        setcookie('fstyle', $fstyle);
        setcookie('fsize', $fsize);
        setcookie('fcolor', $fcolor);
        setcookie('bgcolor', $bgcolor);
        header("Location:show.php");
     
        // if(isset($_POST['second']))
        // {
        //     echo $a;
        // }
    }
    ?>
</body>

</html>