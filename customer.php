<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="cname" value="<?php echo $_SESSION['cname'] ?>" placeholder="Enter customer name"><br><br>
    <input type="text" name="cadd" value="<?php echo $_SESSION['cadd'] ?>" placeholder="Enter address"><br><br>
    <input type="text" name="cmob" value="<?php echo $_SESSION['cmob'] ?>" placeholder="Enter Mobile"><br><br>
    <input type="submit" value="Submit" name="sub">
</form>

<?php
    if(isset($_POST['sub']))
    {
        $cname=$_SESSION['cname'] = $_POST['cname'];
        $cadd=$_SESSION['cadd'] = $_POST['cadd'];
        $cmob=$_SESSION['cmob'] = $_POST['cmob'];
        echo "<form method='post'>";
            echo "<input type='text' name='pname' value='$pname'  placeholder='Enter product name'>";
            echo "<input type='text' name='pqty' value='$pqty'  placeholder='Enter product qty'>";
            echo "<input type='text' name='prate' value='$prate'  placeholder='Enter product rate'><br><br>";
            echo "<input type='submit' value='second sub' name='subm'>";
            echo "</form>";
                    
            
            
            
        }
        ?>
    <?php
    if(isset($_POST['subm']))
    {
        $pname=$_SESSION['pname'] = $_POST['pname'];
        $pqty=$_SESSION['pqty'] = $_POST['pqty'];
        $prate=$_SESSION['prate'] = $_POST['prate'];
        echo "<h3>Bill is as follows</h3>";
        echo "<br>Customer name: ".$_SESSION['cname'];
        echo "<br>Customer address: ".$_SESSION['cadd'];
        echo "<br>Customer mobile: ".$_SESSION['cmob'];
        echo "<br>Product name: ".$_SESSION['pname'];
        echo "<br>Product qty: ".$_SESSION['pqty'];
        echo "<br>Product rate:".$_SESSION['prate'];
        echo "<br>Total amount: ".$_SESSION['pqty']*$_SESSION['prate'];
        
    }
    ?>
    <!-- <form method="post">
        <input type="text" placeholder="ashduisawhd">
    </form> -->
</body>
</html>