<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $page_name = $_POST['page_name'];
  $page_content = $_POST['page_content'];

  $sql = "INSERT INTO pages (name, content) VALUES ('$page_name', '$page_content')";
  if (mysqli_query($conn, $sql)) {
    $file_path = $page_name . '.html';

    $file_content = "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"UTF-8\"><title>$page_name</title><link rel=\"stylesheet\" href=\"styles.css\"></head><body>
        <div class=\"topnav\">
          <a href=\"homepage.html\" class=\"logo\">glazed skin and beauty</a>
          <div class=\"right-nav\">
            <a href=\"javascript:void(0);\" class=\"shop-icon\" onclick=\"myFunction()\">Shop</a>
            <div class=\"cart-icon\" id=\"cart-icon\">&#128722;</div>
          </div>
          <div id=\"myLinks\">
            <a href=\"shop_by_skinconcern.php\">Shop by skin concern</a>
            <a href=\"shop_by_product.php\">Shop by products</a>
            <a href=\"shop_all.php\">Shop All</a>
          </div>
        </div>

        <div class=\"cart-sidebar\" id=\"cart-sidebar\">
          <h2>My Shopping Cart</h2>
          <ul id=\"cart-items\"></ul>
          <div id=\"cart-total\">Total: R0.00</div>
          <button id=\"checkout-btn\">Checkout Now</button>
          <a class=\"close-btn\" id=\"close-btn\">Continue Shopping</a>
        </div>

        <script>
          function myFunction() {
            var x = document.getElementById(\"myLinks\");
            if (x.style.display === \"block\") {
              x.style.display = \"none\";
            } else {
              x.style.display = \"block\";
            }
          }

          function toggleCart() {
            var cartSidebar = document.getElementById(\"cart-sidebar\");
            if (cartSidebar.classList.contains(\"active\")) {
              cartSidebar.classList.remove(\"active\");
            } else {
              cartSidebar.classList.add(\"active\");
            }
          }
        </script>

        <div class=\"hero\" style=\"background-image: url('images/skin.jpg');\">
          <div class=\"hero-text\">
            <h1>$page_name</h1>
            <p>shop now</p>
          </div>
        </div>
      </body>
    </html>";

    
    file_put_contents($file_path, $file_content);

    
    header("Location: $file_path");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
};
?>

