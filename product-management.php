<?php
include ('connection.php');

$sql_recent = "SELECT name, description, price, image, created_at FROM products ORDER BY created_at DESC LIMIT 3";
$result_recent = mysqli_query($conn, $sql_recent);

$sql_total = "SELECT COUNT(*) as total_products FROM products";
$result_total = mysqli_query($conn, $sql_total);
$total_products = mysqli_fetch_assoc($result_total)['total_products'];

$inventory_count = $total_products;  

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Abril Fatface', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
        }

        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        .topnav a.logo {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: rgba(169, 248, 255, 0.067);
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active,
        .sidebar a:hover:not(.active) {
            background-color: rgba(56, 182, 255, 0.5);
            color: black;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
        }

        .cards {
            width: 100%;
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1;
            margin: 10px;
        }

        .card h3 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .card p {
            font-size: 20px;
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            flex: 1;
            margin-right: 10px;
        }

        form h3 {
            margin-top: 0;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input,
        textarea,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: lightskyblue;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #38B6FF;
        }

        @media screen and (max-width: 600px) {
            .content {
                margin-left: 0;
            }

            .form {
                width: 100%;
                margin-right: 0;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="topnav">
        <a class="logo">glazed skin and beauty</a>
    </div>

    <div class="sidebar">
        <a href="adminpage.html">Dashboard</a>
        <a class="active" href="product-management.php">Product Management</a>
        <a href="image-management.html">Image Management</a>
        <a href="page-management.php">Page Management</a>
        <a href="order-management.html">Order Management</a>
    </div>

    <div class="content">
        <h1>Product Management</h1>
        <div class="cards">
            <div class="card">
                <h3>Inventory</h3>
                <p><?php echo $inventory_count; ?></p>
            </div>
            <div class="card">
                <h3>Total Products</h3>
                <p><?php echo $total_products; ?></p>
            </div>
            <div class="card">
                <h3>Categories</h3>
                <p>5</p>
            </div>
        </div>

        <h2>Recently Added Products</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Added On</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result_recent) > 0) {
                    while ($row = mysqli_fetch_assoc($result_recent)) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td><img src='" . $row['image'] . "' alt='" . $row['name'] . "' style='width:100px;height:auto;'></td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No products found</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div id="add-product-form">
            <form action="add_product.php" method="post">
                <h3>Add Product</h3>
                <label for="product_name">Name:</label>
                <input type="text" id="product_name" name="product_name" required>
                <label for="product_description">Description:</label>
                <textarea id="product_description" name="product_description" required></textarea>
                <label for="product_price">Price:</label>
                <input type="text" id="product_price" name="product_price" required>
                <label for="product_image">Image Path:</label>
                <input type="text" id="product_image" name="product_image" required>
                <button type="submit">Add Product</button>
            </form>
        </div>

        <div class="content">

    
            <?php
            include('connection.php');

            // Fetch products from the database
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="product">
                        <form action="' . $_SERVER['PHP_SELF'] . '" method="post" class="form">
                            <h3>Product: ' . $row['name'] . '</h3>
                            <input type="hidden" name="product_id" value="' . $row['id'] . '">
                            <input type="submit" name="update_product" value="Update">
                        </form>
                        <form action="' . $_SERVER['PHP_SELF'] . '" method="post" class="form">
                            <input type="hidden" name="product_id" value="' . $row['id'] . '">
                            <input type="submit" name="delete_product" value="Delete">
                        </form>
                    </div>';
            }

            mysqli_close($conn);
            ?>
        </div>

    </div>

</body>

</html>
