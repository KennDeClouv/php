<?php
require 'conn.php';
function query($quary)
{
    global $conn;
    $result = mysqli_query($conn, $quary);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}