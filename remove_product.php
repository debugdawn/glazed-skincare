<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['product_id'];

    $sql = "DELETE FROM products WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Product removed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
