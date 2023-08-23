<?php
$mysqli = new mysqli("localhost", "root", "", "demo");
// Check connection
if ($mysqli->connect_error) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if (isset($_POST['signup'])) {
    $username = $_POST['new_username'];
    $password = $_POST['new_password'];

    if (!empty($username) && !empty($password)) {
        $query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";

        if ($mysqli->query($query)) {
            $success = 'YOU ARE NOW A ELITE MEMBER OF THE GYM';
        } else {
            $error = 'Error creating user: ' . $mysqli->error;
        }
    } else {
        $error = 'Please enter username and password';
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Signup</title>
    <style>
        input {
            color: #4A0000;
            border: 1px solid #4A0000;
        }
    </style>
</head>
<body>
    <div style="background-color: #CCCCCC; border: 1px solid #4A0000; color: #4A0000; margin: auto; padding: 19px 0 18px; width: 295px;">
        <?php if (isset($error)) { ?>
            <div style="color: #C23D29; padding: 0 10px 15px 38px;"><?php echo $error; ?></div>
        <?php } ?>
        <?php if (isset($success)) { ?>
            <div style="color: green; padding: 0 10px 15px 38px;"><?php echo $success; ?></div>
        <?php } ?>
        <form name="signup" action="" method="post">
            <div style="text-align:center;">Username: <input type="text" name="new_username"></div><br>
            <div style="text-align:center;">Password: <input type="password" name="new_password"></div><br>
            <div style="text-align:center;"><input type="submit" name="signup" value="Signup" style="margin: 0 -64px 2px 115px;"></div>
        </form>
    </div>
</body>
</html>
