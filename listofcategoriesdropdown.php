<?php

$conn = pg_connect("host=localhost port=5432 dbname=category user=postgres password=najima");

if (!$conn) {
    die("DATABASE CONNECTION ERROR");
}

$result = pg_query($conn, "SELECT cid, cname FROM category");

if (!$result) {
    die("QUERY ERROR: " . pg_last_error($conn));
}

$data = array();

while ($row = pg_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

?>