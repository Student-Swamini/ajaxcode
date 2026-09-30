<?php

$name = $_GET["name"] ?? "";

if ($name == "") {
    echo "Stranger, please tell me your name";
}
else if ($name == "Rohit" || 
         $name == "Virat" || 
         $name == "Dhoni" || 
         $name == "Ashwin") {

    echo "Hello, $name!";
}
else {
    echo "Sorry $name, I don't know you";
}

?>