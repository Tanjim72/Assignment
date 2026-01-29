<?php
include 'db.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id=$id"));

if (isset($_POST['delete'])) {
    mysqli_query($conn, "DELETE FROM products WHERE id=$id");
    header("Location: display.php");
}
?>

<!DOCTYPE html>
<html>
<body>
<h3>DELETE PRODUCT</h3>

Name: <?= $data['name'] ?><br>
Buying Price: <?= $data['buying_price'] ?><br>
Selling Price: <?= $data['selling_price'] ?><br>
Displayable: <?= $data['display'] ?><br><br>

<form method="post">
    <input type="submit" name="delete" value="Delete">
</form>
</body>
</html>
