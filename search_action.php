<?php
include 'db.php';
$key = $_GET['key'];

$result = mysqli_query($conn, 
    "SELECT * FROM products WHERE name LIKE '%$key%' AND display='Yes'"
);
?>

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
