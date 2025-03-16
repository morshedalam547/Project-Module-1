<?php


define("USERNAME", "admin");
define("PASSWORD", "12345");

echo "Enter username: ";
$inputUsername = readline(); 
echo "Enter password: ";
$inputPassword =  readline();

if($inputUsername === USERNAME && $inputPassword === PASSWORD){
    echo "Login successful!\n";
} else {
    echo "Invalid username or password.\n";
}


//or you can use ternary operator

// echo ($inputUsername === USERNAME && $inputPassword === PASSWORD) ? "Login successful!\n" : "Invalid username or password.\n";