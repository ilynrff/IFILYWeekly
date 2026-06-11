<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "iliyin15",
    "ifilyweekly"
);

function tampilData($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    // siapkan wadah
    $rows = [];

    // ambil data dari database
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

?>