<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
    <title>Page Management</title>
    <style>
        body {
            background-color: #f4f4f9;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #38B6FF;
            font-size: 40px;
            text-align: center;
            margin-top: 20px;
        }

        .topnav {
            background-color: #333;
            overflow: hidden;
            padding: 10px;
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

        div.content {
            margin-left: 200px;
            padding: 20px;
        }

        .admin-container {
            max-width: 800px;
            margin: auto;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            width: calc(33.333% - 20px);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card a {
            text-decoration: none;
            color: #000;
            margin-bottom: 10px;
        }

        .card button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            width: 100%;
        }

        form {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }

            .card-container {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 80%;
                margin-bottom: 20px;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
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
        <a href="product-management.php">Product Management</a>
        <a href="image-management.html">Image Management</a>
        <a class="active" href="page-management.php">Page Management</a>
        <a href="order-management.html">Order Management</a>
    </div>

    <div class="content">
        <div class="admin-container">
            <h1>Page Management</h1>
            <section id="page-management">
                <h2>Active Pages</h2>
                <div class="card-container">
                <?php
                include('connection.php');
                $sql = "SELECT name FROM pages";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card">
                            <a href="' . $row['name'] . '.php">' . $row['name'] . '</a>
                            <button onclick="window.location.href=\'' . $row['name'] . '.php\'">Go to Page</button>
                          </div>';
                }
                mysqli_close($conn);
                ?>
                </div>
                <form id="add-page-form" action="generate_page.php" method="post">
                    <h3>Add Page</h3>
                    <label for="page-name">Page Name:</label>
                    <input type="text" id="page-name" name="page_name" required>
                    <label for="page-content">Page Content:</label>
                    <textarea id="page-content" name="page_content" required></textarea>
                    <button type="submit">Add Page</button>
                </form>
                <form id="remove-page-form" action="remove_page.php" method="post">
                    <h3>Remove Page</h3>
                    <label for="remove-page-name">Page Name:</label>
                    <input type="text" id="remove-page-name" name="page_name" required>
                    <button type="submit">Remove Page</button>
                </form>
            </section>
        </div>
    </div>
</body>

</html>
