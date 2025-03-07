<?php


define("USERNAME", "admin");
define("PASSWORD", "12345");

echo "Enter username: ";
$inputUsername = readline(); 
echo "Enter password: ";
$inputPassword =  readline();


echo ($inputUsername === USERNAME && $inputPassword === PASSWORD) ? "Login successful!\n" : "Invalid username or password.\n";