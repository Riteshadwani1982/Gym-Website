<?php
    $mysqli = new mysqli("localhost", "root", "", "demo");
    // Check connection
    if($mysqli -> connect_error){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }
session_start();
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
if(isset($username) && isset($password)){
$query="SELECT id FROM login WHERE username='$username' and
password='$password'";
$result = $mysqli->query($query);
//$result=mysqli_query($con,$query)
$row = $result->fetch_assoc();
$id=$row['id'];

$count= mysqli_num_rows($result);
$result->free();
if($count==1)
{
//session_register("username");
$_SESSION['name']=$username;
header("location: welcome.php");
}else{
$error = 'please enter username and password';
}
}
}
$mysqli->close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>login</title>
<style>
input{
color:#4A0000;
border:1px solid #4A0000;
}
</style>
</head>
<body>
<div style=" background-color: #CCCCCC;border: 1px solid #4A0000;color: #4A0000; margin: auto;padding: 19px 0 18px;width: 295px;">
        <div style="color:#C23D29;p adding: 0 10px 15px 38px;"><?php ?></div>
            <form name="login" action="" method="post">
                <div style="text-align:center;">Username :&nbsp;<input type="text" name="username"></div></br>
                <div style="text-align:center;">Password :&nbsp;<input type="password" name="password"></div></br>
                <div style="text-align:center;"><input type="submit" name="submit" value="login" style="margin: 0 -64px 2px 115px;"></div>
            </form>
        </div>
    </body>
</html>