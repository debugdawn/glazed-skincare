<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $page_name = $_POST['page_name'];

    $sql = "DELETE FROM pages WHERE name='$page_name'";
    if (mysqli_query($conn, $sql)) {
        echo "Page removed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

