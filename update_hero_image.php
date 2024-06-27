<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hero_image_url = $_POST['hero_image_url'];

    $sql = "UPDATE hero_images SET url='$hero_image_url' WHERE id=1"; // Assuming there's an id column
    if (mysqli_query($conn, $sql)) {
        echo "Hero image updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
