<?php
include "db.php";

$title = $_GET['title'];

mysqli_query($conn, "DELETE FROM books WHERE title='$title'");

header("Location: index.php"); 

?>
