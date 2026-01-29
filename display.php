<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM products WHERE display='Yes'");
?>

<!DOCTYPE html>
<html>
<body>

<h3>DISPLAY</h3>

<table border="1" cellpadding="8">
<tr>
    <th>NAME</th>
    <th>PROFIT</th>
    <th></th>
    <th></th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { 
    $profit = $row['selling_price'] - $row['buying_price'];
?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $profit ?></td>
    <td><a href="edit.php?id=<?= $row['id'] ?>">edit</a></td>
    <td><a href="delete.php?id=<?= $row['id'] ?>">delete</a></td>
</tr>
<?php } ?>

</table>

<br>
<a href="add_product.php">Add Product</a> |
<a href="search.php">Search</a>

</body>
</html>
