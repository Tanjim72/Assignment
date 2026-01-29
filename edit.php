<?php
include 'db.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id=$id"));

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';

    $query = "UPDATE products 
              SET name='$name', buying_price='$buy', selling_price='$sell', display='$display'
              WHERE id=$id";
    mysqli_query($conn, $query);

    header("Location: display.php");
}
?>

<!DOCTYPE html>
<html>
<body>
<h3>EDIT PRODUCT</h3>

<form method="post">
    Name <br>
    <input type="text" name="name" value="<?= $data['name'] ?>"><br><br>

    Buying Price <br>
    <input type="number" name="buy" value="<?= $data['buying_price'] ?>"><br><br>

    Selling Price <br>
    <input type="number" name="sell" value="<?= $data['selling_price'] ?>"><br><br>

    <input type="checkbox" name="display" <?= ($data['display']=='Yes')?'checked':'' ?>> Display<br><br>

    <input type="submit" name="update" value="SAVE">
</form>
</body>
</html>
