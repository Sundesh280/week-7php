<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO books VALUES(
        NULL,
        '$_POST[title]',
        '$_POST[author]',
        '$_POST[category]',
        '$_POST[quantity]'
    )";
    mysqli_query($conn, $sql);
}

header("Location: index.php");

?>
