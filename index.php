<h2>LibrarySystem </h2>

<form action='add_book.php' method='post'>
<table>
<tr>
            <td><label for="title">Title:</label></td>
            <td><input type="text" id="title" name="title" required></td>
        </tr>
        <tr>
            <td><label for="author">Author:</label></td>
            <td><input type="text" id="author" name="author" required></td>
        </tr>
        <tr>
            <td><label for="category">Category:</label></td>
            <td><input type="text" id="category" name="category"></td>
        </tr>
        <tr>
            <td><label for="quantity">Quantity:</label></td>
            <td><input type="number" id="quantity" name="quantity" min="1" value="" required></td>
        </tr>
        <tr>
           
                <button type="submit">Add Book</button><br></br>
        </tr>
</form>
</table>
<!-- seacrch book  -->

<?php
include "db.php";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $result = mysqli_query($conn, "SELECT * FROM books WHERE category='$category'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM books");
}
?>

<h3>Search by Category</h3>

<form method="get">
    <input type="text" name="category" placeholder="Enter category">
    <button type="submit">Search</button>
</form>

<br>
<!--  view all book  -->
<h3> View Books</h3>

<<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Qty</th>
        <th>Action</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['title']}</td>
                <td>{$row['author']}</td>
                <td>{$row['category']}</td>
                <td>{$row['quantity']}</td>
                <td><a href='deleted.php?title={$row['title']}'>Delete</a></td>
              </tr>";
    }
    ?>
</table>
