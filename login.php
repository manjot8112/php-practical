<?php
session_start();

if ($_POST) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "admin" && $pass == "1234") {
        $_SESSION['username'] = $user;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>

<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>