<?php
include 'db.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $buy = $_POST['buy'];
    $sell = $_POST['sell'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';

    $query = "INSERT INTO products VALUES ('','$name','$buy','$sell','$display')";
    mysqli_query($conn, $query);

    header("Location: display.php");
}
?>

<!DOCTYPE html>
<html>
<body>
<h3>ADD PRODUCT</h3>

<form method="post">
    Name <br>
    <input type="text" name="name"><br><br>

    Buying Price <br>
    <input type="number" name="buy"><br><br>

    Selling Price <br>
    <input type="number" name="sell"><br><br>

    <input type="checkbox" name="display"> Display<br><br>

    <input type="submit" name="save" value="SAVE">
</form>
</body>
</html>
