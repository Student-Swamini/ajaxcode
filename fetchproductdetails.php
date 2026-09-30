<?php

$conn = pg_connect("host=localhost port=5432 dbname=product user=postgres password=najima");

$pid = $_GET["pid"];

$result = pg_query(
    $conn,
    "SELECT * FROM product WHERE pid = $pid"
);

if (pg_num_rows($result) > 0) {

    $row = pg_fetch_assoc($result);

    echo "Product ID: " . $row["pid"] . "<br>";
    echo "Product Name: " . $row["pname"] . "<br>";
    echo "Price: " . $row["price"] . "<br>";
    echo "Quantity: " . $row["quantity"];

}
else {

    echo "Product not found";
}

?>