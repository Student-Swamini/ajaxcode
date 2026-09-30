<?php

$conn = pg_connect(
    "host=localhost port=5432 dbname=customerorder user=postgres password=najima"
);

if (!$conn) {
    die("Database connection failed");
}

if (isset($_GET["action"])) {

    $result = pg_query($conn, "SELECT cno, cname FROM customer");

    if (!$result) {
        die("Customer query failed");
    }

    $data = array();

    while ($row = pg_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);

}
else {

    $cno = $_GET["cno"];

    $result = pg_query(
        $conn,
        "SELECT ono, odate, shipping_address
         FROM orders
         WHERE cno = $cno"
    );

    if (!$result) {
        die("Order query failed");
    }

    $data = array();

    while ($row = pg_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
}

?>