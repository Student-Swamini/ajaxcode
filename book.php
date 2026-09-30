<?php

$n = $_GET['n'];

$book = array(
    "Java Programming",
    "Python Programming",
    "Web Technology",
    "DBMS"
);

echo "Book List<br>";

foreach ($book as $b)
{
    $q = substr($b, 0, strlen($n));

    if (strtolower($q) == strtolower($n))
    {
        echo $b . "<br>";
    }
}

?>
