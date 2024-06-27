<!DOCTYPE html>
<html lang="en">
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EYZT2CV7K5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'G-EYZT2CV7K5');
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Glazed Skin & Beauty</title>
<link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<style>
  .content {
    margin-left: 20px;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .product {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: calc(25% - 20px);
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .product img {
    width: 100%;
    height: auto;
  }

  .product-details {
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    flex-grow: 1;
  }

  .product-details h2 {
    font-size: 18px;
    margin: 0 0 10px 0;
  }

  .price {
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
  }

  .stars {
    margin-bottom: 60px;
  }

  .stars .fa-star {
    color: #FFD700;
  }

  .product button {
    background-color: lightskyblue;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    margin-top: auto;
  }

  .product button:hover {
    background-color: #38B6FF;
  }
</style>
</head>

<body>
  <div class="topnav">
    <a href="homepage.html" class="logo">glazed skin and beauty</a>
    <div class="right-nav">
      <a href="javascript:void(0);" class="shop-icon" onclick="myFunction()">Shop</a>
      <div class="cart-icon" id="cart-icon">&#128722;</div>
    </div>
    <div id="myLinks">
      <a href="shop_by_skinconcern.php">Shop by skin concern</a>
      <a href="shop_by_product.php">Shop by products</a>
      <a href="shop_all.php">Shop All</a>
    </div>
  </div>

  <div class="cart-sidebar" id="cart-sidebar">
    <h2>My Shopping Cart</h2>
    <ul id="cart-items"></ul>
    <div id="cart-total">Total: R0.00</div>
    <button id="checkout-btn">Checkout Now</button>
    <a class="close-btn" id="close-btn">Continue Shopping</a>
  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }

    function toggleCart() {
      var cartSidebar = document.getElementById("cart-sidebar");
      if (cartSidebar.classList.contains("active")) {
        cartSidebar.classList.remove("active");
      } else {
        cartSidebar.classList.add("active");
      }
    }
  </script>

  <div class="hero" style="background-image: url('images/skin.jpg');">
    <div class="hero-text">
      <h1>Shop all</h1>
      <p>shop now</p>
    </div>
  </div>

  <div class="content">
    <?php
    include ('connection.php');

    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
      $rating = $row['rating'];
      $stars = '';
      for ($i = 0; $i < 5; $i++) {
        if ($i < $rating) {
          $stars .= '<span class="fa fa-star checked"></span>';
        } else {
          $stars .= '<span class="fa fa-star"></span>';
        }
      }

      echo '<div class="product" data-id="' . $row['id'] . '" data-name="' . $row['name'] . '" data-price="' . $row['price'] . '">
                <img src="' . $row['image'] . '" alt="' . $row['name'] . '">
                <div class="product-details">
                    <h2>' . $row['name'] . '</h2>
                    <div class="price">R' . $row['price'] . '</div>
                    <div class="stars">' . $stars . '</div>
                    <button>Add to Cart</button>
                </div>
              </div>';
    }

    mysqli_close($conn);
    ?>
  </div>

  <script>
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    document.querySelectorAll('.product button').forEach(button => {
      button.addEventListener('click', () => {
        const productElement = button.closest('.product');
        const product = {
          id: productElement.getAttribute('data-id'),
          name: productElement.getAttribute('data-name'),
          price: parseFloat(productElement.getAttribute('data-price')),
          image: productElement.querySelector('img').src,
          quantity: 1
        };
        addToCart(product);
        updateCart();
      });
    });

    function addToCart(product) {
      const existingProduct = cart.find(item => item.id === product.id);
      if (existingProduct) {
        existingProduct.quantity += 1;
      } else {
        cart.push(product);
      }
      localStorage.setItem('cart', JSON.stringify(cart));
    }

    function updateCart() {
      const cartItemsElement = document.getElementById('cart-items');
      cartItemsElement.innerHTML = '';

      cart.forEach(product => {
        const li = document.createElement('li');

        const img = document.createElement('img');
        img.src = product.image;
        img.alt = product.name;

        const detailsDiv = document.createElement('div');
        detailsDiv.classList.add('product-details');

        const nameDiv = document.createElement('div');
        nameDiv.textContent = product.name;

        const priceDiv = document.createElement('div');
        priceDiv.classList.add('product-price');
        priceDiv.textContent = `R${product.price.toFixed(2)}`;

        const quantityControls = document.createElement('div');
        quantityControls.classList.add('quantity-controls');

        const decreaseBtn = document.createElement('button');
        decreaseBtn.textContent = '-';
        decreaseBtn.addEventListener('click', () => {
          product.quantity -= 1;
          if (product.quantity <= 0) {
            cart.splice(cart.indexOf(product), 1);
          }
          updateCart();
        });

        const quantitySpan = document.createElement('span');
        quantitySpan.textContent = product.quantity;

        const increaseBtn = document.createElement('button');
        increaseBtn.textContent = '+';
        increaseBtn.addEventListener('click', () => {
          product.quantity += 1;
          updateCart();
        });

        quantityControls.appendChild(decreaseBtn);
        quantityControls.appendChild(quantitySpan);
        quantityControls.appendChild(increaseBtn);

        detailsDiv.appendChild(nameDiv);
        detailsDiv.appendChild(priceDiv);
        detailsDiv.appendChild(quantityControls);

        li.appendChild(img);
        li.appendChild(detailsDiv);

        cartItemsElement.appendChild(li);
      });

      const total = cart.reduce((sum, product) => sum + product.price * product.quantity, 0);
      document.getElementById('cart-total').textContent = `Total: R${total.toFixed(2)}`;

      localStorage.setItem('cart', JSON.stringify(cart));
    }

    document.getElementById('cart-icon').addEventListener('click', () => {
      document.getElementById('cart-sidebar').classList.add('active');
    });

    document.getElementById('close-btn').addEventListener('click', () => {
      document.getElementById('cart-sidebar').classList.remove('active');
    });

    document.getElementById('checkout-btn').addEventListener('click', () => {
      window.location.href = 'checkout.html';
    });

    document.querySelector('.continue-shopping').addEventListener('click', (e) => {
      e.preventDefault();
      document.getElementById('cart-sidebar').classList.remove('active');
    });

    updateCart();
  </script>

  <div class="columns-container">
    <div class="column">
      <h2>Contact Us</h2>
      <p> info@glazed.com</p>
      <p><a class="instagram"><i class="fa fa-instagram"></i></a><a href="https://instagram.com"> @glazed_skin</a></p>
      <p><a class="twitter"><i class="fa fa-twitter"></i></a> <a href="https://twitter.com">@glazed_skin</a></p>
      <p><a class="facebook"><i class="fa fa-facebook"></i></a> <a href="https://facebook.com">glazed_skin</a></p>
      <p><a class="youtube"><i class="fa fa-youtube"></i></a> <a href="https://youtube.com">glazed_skin</a></p>
    </div>
    <div class="column">
      <h2>Help</h2>
      <p><a href="faq.html">FAQ</a></p>
      <p><a href="privacy.html">Privacy Policy</a></p>
      <p><a href="terms.html">Terms and Conditions</a></p>
    </div>
    <div class="column">
      <h2>Shopping</h2>
      <p><a href="index.php">Account</a></p>
      <p><a href="refund.html">Refund Policy</a></p>
      <p><a href="shipping.html">Shipping Policy</a></p>
    </div>
  </div>
  </div>



  <footer>

    <p>&copy; 2024 Glazed Skincare All rights reserved.</p>
  </footer>

</body>

</html>