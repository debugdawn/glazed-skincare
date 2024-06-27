<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "glazedskincare";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user_email = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_EMAIL);
    $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $street_address = filter_input(INPUT_POST, 'street_address', FILTER_SANITIZE_STRING);
    $apartment = filter_input(INPUT_POST, 'apartment', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $province = filter_input(INPUT_POST, 'province', FILTER_SANITIZE_STRING);
    $postal_code = filter_input(INPUT_POST, 'postal_code', FILTER_SANITIZE_STRING);
    $mobile_number = filter_input(INPUT_POST, 'mobile_number', FILTER_SANITIZE_STRING);
    $payment_method = filter_input(INPUT_POST, 'payment_method', FILTER_SANITIZE_STRING);
    $billing_address = filter_input(INPUT_POST, 'billing_address', FILTER_SANITIZE_STRING);

    $billing_full_name = filter_input(INPUT_POST, 'billing_full_name', FILTER_SANITIZE_STRING);
    $billing_last_name = filter_input(INPUT_POST, 'billing_last_name', FILTER_SANITIZE_STRING);
    $billing_street_address = filter_input(INPUT_POST, 'billing_street_address', FILTER_SANITIZE_STRING);
    $billing_apartment = filter_input(INPUT_POST, 'billing_apartment', FILTER_SANITIZE_STRING);
    $billing_city = filter_input(INPUT_POST, 'billing_city', FILTER_SANITIZE_STRING);
    $billing_province = filter_input(INPUT_POST, 'billing_province', FILTER_SANITIZE_STRING);
    $billing_postal_code = filter_input(INPUT_POST, 'billing_postal_code', FILTER_SANITIZE_STRING);
    $billing_mobile_number = filter_input(INPUT_POST, 'billing_mobile_number', FILTER_SANITIZE_STRING);

    $delivery_method = filter_input(INPUT_POST, 'delivery_method', FILTER_SANITIZE_STRING);
    $promo_code = filter_input(INPUT_POST, 'promo_code', FILTER_SANITIZE_STRING);
    $delivery_cost = filter_input(INPUT_POST, 'delivery_cost', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $final_total = filter_input(INPUT_POST, 'final_total', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    // Validate required fields
    $errors = [];

    if (empty($user_email) || !filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid or missing email.";
    }
    if (empty($full_name)) {
        $errors[] = "First name is required.";
    }
    if (empty($last_name)) {
        $errors[] = "Last name is required.";
    }
    if (empty($street_address)) {
        $errors[] = "Street address is required.";
    }
    if (empty($city)) {
        $errors[] = "City is required.";
    }
    if (empty($province)) {
        $errors[] = "Province is required.";
    }
    if (empty($postal_code)) {
        $errors[] = "Postal code is required.";
    }
    if (empty($mobile_number)) {
        $errors[] = "Mobile number is required.";
    }
    if (empty($payment_method)) {
        $errors[] = "Payment method is required.";
    }

    if ($billing_address === 'different') {
        if (empty($billing_full_name)) {
            $errors[] = "Billing first name is required.";
        }
        if (empty($billing_last_name)) {
            $errors[] = "Billing last name is required.";
        }
        if (empty($billing_street_address)) {
            $errors[] = "Billing street address is required.";
        }
        if (empty($billing_city)) {
            $errors[] = "Billing city is required.";
        }
        if (empty($billing_province)) {
            $errors[] = "Billing province is required.";
        }
        if (empty($billing_postal_code)) {
            $errors[] = "Billing postal code is required.";
        }
    }
    if (!empty($errors)) {
        header('Location: checkout.html');
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO orders (
        full_name, last_name, email, mobile_number, street_address, apartment, city, province, postal_code, payment_method,
        billing_full_name, billing_last_name, billing_street_address, billing_apartment, billing_city, billing_province, billing_postal_code, billing_mobile_number,
        delivery_method, promo_code, email_opt_in, delivery_cost, final_total
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
        "sssssssssssssssssssssss",
        $full_name, $last_name, $user_email, $mobile_number, $street_address, $apartment, $city, $province, $postal_code, $payment_method,
        $billing_full_name, $billing_last_name, $billing_street_address, $billing_apartment, $billing_city, $billing_province, $billing_postal_code, $billing_mobile_number,
        $delivery_method, $promo_code, $email_opt_in, $delivery_cost, $final_total
    );
    if ($stmt->execute()) {
        header('Location: order_confirmation.html');
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
   
    header('Location: checkout.html');
    exit;
}
?>
