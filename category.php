<?php

$con = pg_connect(
    "host=localhost dbname=college user=root"
);

$query = "SELECT * FROM employee_category";

$res = pg_query($con, $query);

while ($row = pg_fetch_row($res))
{
    echo "<option value='" . $row[0] . "'>";
    echo $row[1];
    echo "</option>";
}

?>
