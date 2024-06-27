<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $page_name = $_POST['page_name'];
    $page_content = $_POST['page_content'];

   
    $sql = "INSERT INTO pages (name, content) VALUES ('$page_name', '$page_content')";
    if (mysqli_query($conn, $sql)) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://localhost/GlazedSkincare/generate_page.php'); // Change to your actual URL
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('page_name' => $page_name, 'page_content' => $page_content)));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        echo "Page added successfully and HTML file created.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

