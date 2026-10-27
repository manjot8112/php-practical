<?php
echo "<h2>Browser Information</h2>";

echo "Browser Details: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Browser IP Address: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";

echo "<h2>Server Information</h2>";

echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Server Port: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br>";
echo "Server Protocol: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
?>