<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $description = $_POST['product_description'];
    $price = $_POST['product_price'];
    $image = $_POST['product_image'];

    $sql = "UPDATE products SET name='$name', description='$description', price='$price', image='$image' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
