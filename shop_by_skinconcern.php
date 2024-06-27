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
   
<style>
    body {
  margin: 0;
  font-family: Georgia, 'Times New Roman', Times, serif;
  background-color: #FFFFF0;
  position: relative;
  min-height: 100vh;
}

h1 {
  color: #38B6FF;
  font-size: 40px;
}

h4 {
  text-align: center;
}

/* navigation bar */
.topnav {
  overflow: hidden;
  background-color: rgba(56, 182, 255, 0.5);
  font-family: 'Abril Fatface';
  font-size: 22px;
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
    padding: 0 10px;
    z-index: 1000; 
}

.topnav .logo {
  margin-right: auto;
  color: black;
  text-decoration: none;
}

.topnav .right-nav {
    display: flex;
    align-items: center;
}

.topnav #myLinks {
  display: none;
  position: relative;
  font-family: Georgia, 'Times New Roman', Times, serif;
  top: 20px;
  right: 10px;
  width: 100%;
}

.topnav a {
  color: black;
  padding: 14px 16px;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
  display: block;
}


.topnav a.icon {
  font-family: Georgia, 'Times New Roman', Times, serif;
  margin-right: 20px;
  background: #38B6FF;
  display: block;
  position: absolute;
  left: 10;
  top: 0;
}

.topnav .cart-icon {
    margin-right: 20px; 
    font-size: 24px;
    cursor: pointer;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.active {
  background-color: #B0C4DE;
  color: #B0C4DE;
}

/*cart side bar*/
.cart-sidebar {
  position: fixed;
  top: 0;
  right: -300px;
  width: 300px;
  height: 100%;
  background: #fff;
  color: #000000;
  box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
  padding: 20px;
  box-sizing: border-box;
  transition: right 0.3s;
  z-index: 2000;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.cart-sidebar.active {
  right: 0;
  background-color: #fff;
}

.cart-sidebar h2 {
  margin: 0;
  text-align: center;
}

.cart-sidebar ul {
  list-style: none;
  padding: 0;
  flex-grow: 1;
  overflow-y: auto;
}

.cart-sidebar ul li {
  border-bottom: 1px solid #ddd;
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.cart-sidebar ul li img {
  width: 50px;
  height: auto;
  margin-right: 10px;
}

.cart-sidebar .product-details {
  flex: 1;
}

.cart-sidebar .product-price {
  font-weight: bold;
}

.cart-sidebar .quantity-controls {
  display: flex;
  align-items: center;
}

.cart-sidebar .quantity-controls button {
  background: #50b3a2;
  color: #fff;
  border: none;
  padding: 5px;
  cursor: pointer;
  border-radius: 5px;
  margin: 0 5px;
}

.cart-sidebar .quantity-controls button:hover {
  background: #3d8b81;
}

.cart-sidebar #cart-total {
  margin-top: 20px;
  font-weight: bold;
  text-align: center;
}

.cart-sidebar #checkout-btn {
  width: 100%;
  padding: 10px;
  background: #50b3a2;
  color: #fff;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.cart-sidebar #checkout-btn:hover {
  background: #3d8b81;
}

.cart-sidebar .continue-shopping {
  display: block;
  text-align: center;
  margin-top: 20px;
  color: #50b3a2;
  text-decoration: none;
}

.cart-sidebar .continue-shopping:hover {
  text-decoration: underline;
}


/*hero image*/
.hero {
  height: 70vh;
  width: 100%;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
  z-index: 1;
}

.hero-text {
  text-align: right;
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  color: white;
  padding-right: 20px;
  z-index: 2;
}
.content {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: space-between; 
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
   /*tabs */
  .tab {
    display: flex;
}

.tab button {
    background-color: inherit;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

.tab button:hover {
    background-color: #B0C4DE;
}

.tab button.active {
    background-color: white;
}

.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

.tabcontent h3 {
    margin: 50px;
}

/* Ensure active tab content is visible */
.tabcontent.active {
    display: block;
}
  
/* The contact us section*/
.container {
  display: flex;
  justify-content: center; 
  align-items: center; 
  height: 50vh; 
  background-color: #f9f9f9;
}

.columns-container {
  display: flex;
  justify-content: space-around; 
  align-items: flex-start; 
}

.column {
  flex: 1; 
  margin: 0 10px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  max-width: 400px; 
}

.column h2 {
  margin-bottom: 10px;
  font-size: 1.5em;
  color: #333;
}

.column p,
.column a {
  margin: 5px 0;
  font-size: 1.1em;
  color: #555;
  text-decoration: none;
}

.column a {
  color: black;
}

.column a:hover {
  text-decoration: underline;
  color: #B0C4DE;
}

/* Footer */
footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  background-color: #B0C4DE;
  text-align: center;
  padding: 10px 0;
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

<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Oily')">Oily / Acne Prone</button>
    <button class="tablinks" onclick="openCity(event, 'Dry')">Dry Skin/Hydration</button>
    <button class="tablinks" onclick="openCity(event, 'Pigmentation')">Pigmentation</button>
</div>

<div class="hero" style="background-image: url('images/heart.jpg');">
    <div class="hero-text">
        <h1>Shop by skinconcern</h1>
        <p>shop now</p>
    </div>
</div>

<?php
include('connection.php');

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

$skin_types = ['Oily', 'Dry', 'Pigmentation'];

foreach ($skin_types as $skin_type) {
    echo "<div id='$skin_type' class='tabcontent'>";
    echo "<div class='content'>";
    mysqli_data_seek($result, 0);
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['skin_type'] == $skin_type) {
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
    }
    echo "</div>";
    echo "</div>";
}

mysqli_close($conn);
?>



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


    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            const activeButton = document.querySelector(`button[onclick="openCity(event, '${cityName}')"]`);
            if (activeButton) {
                activeButton.classList.add("active");
            }
        }

        window.onload = function () {
            openCity(null, "Oily");
        };
    </script>

    <div class="columns-container">
        <div class="column">
            <h2>Contact Us</h2>
            <p> info@glazed.com</p>
            <p><a class="instagram"><i class="fa fa-instagram"></i></a><a href="https://instagram.com"> @glazed_skin</a>
            </p>
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