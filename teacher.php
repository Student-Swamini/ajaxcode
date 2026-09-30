<?php

$conn = pg_connect("host=localhost port=5432 dbname=teacher user=postgres password=najima");

if (isset($_GET["tno"])) {

    $tno = $_GET["tno"];

    $result = pg_query(
        $conn,
        "SELECT * FROM teacher WHERE tno = $tno"
    );

    $row = pg_fetch_assoc($result);

    echo json_encode($row);

}
else {

    $result = pg_query(
        $conn,
        "SELECT * FROM teacher"
    );

    $data = array();

    while ($row = pg_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
}

?>