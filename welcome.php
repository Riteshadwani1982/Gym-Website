<html>
<head>
<style>
a{
float:left;
text-decoration:none;
}h1{
color:#008844;
font-size:20px;
text-align:center;
}
</style>
</head>
<body>
<div style="border: 1px solid #4A0000;color: #4A0000; margin: auto;width: 700px;">
<div style="float:right;">
<?php
include('secure.php');
if($_SESSION['name']){
echo '<a href="logout.php"><input type="submit" name="submit" value="logout"></a>';
}else{
echo '<a href="login.php"><input type="submit" name="submit" value="login"></a>';
}
?>
</div>
<h1>Welcome <?php echo $user; ?></h1>
<h1>YOU ARE ONE STEP AHEAD OF OTHERS BECAUSE </h1>
<h1>YOU HAVE STARTED WORKING ON YOURSELF</h1>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrjoCp43RjT-Dl4lWyZvirbtclRd-8rP-r-pBI1DcBuQ&usqp=CAU&ec=48665699" width="500" height="600" style="padding-left: 14% ">
<h1>THIS IS YOUR TODAYS WORKOUT PLAN</h1>
</div>
</body>
</html>