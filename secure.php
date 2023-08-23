<?php
$con = new mysqli("localhost","root","","demo");
// Check connection
if ($con -> connect_error){
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
session_start();
$check=$_SESSION['name'];
$query= "select username from login where username='$check' ";
$result = $con->query($query);
//$result=mysqli_query($con,$query)
$data = $result->fetch_assoc();
$user=$data['username'];
if(!isset($user))
{
header("Location: login.php");
}
?>