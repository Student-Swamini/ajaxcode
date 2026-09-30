<?php

$books = array(
    "Java Programming",
    "PHP Programming",
    "Web Development",
    "Python Programming",
    "Data Science",
    "JavaScript"
);

$search = $_GET["search"];
$found = false;

foreach ($books as $book) {

    if (stripos($book, $search) !== false) {

        echo $book . "<br>";

        $found = true;
    }
}

if (!$found && $search != "") {
    echo "Book not found";
}

?>