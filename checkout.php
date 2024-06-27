<!DOCTYPE html>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EYZT2CV7K5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-EYZT2CV7K5');
    </script>
    <html lang="en">
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

        /* Checkout page */
        .checkout {
            width: 60%;
            margin: auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .checkout h2,
        .checkout button,
        .checkout input,
        .checkout select {
            margin: 10px 0;
        }

        .checkout .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .checkout .form-group input,
        .checkout .form-group select {
            width: 48%;
            padding: 8px;
            box-sizing: border-box;
        }

        .checkout .form-group.full-width {
            flex-direction: column;
        }

        .checkout .form-group.full-width input {
            width: 100%;
        }

        .checkout ul {
            list-style: none;
            padding: 0;
        }

        .checkout ul li {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .checkout ul li img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .checkout ul li .product-details {
            flex: 1;
            text-align: left;
        }

        .checkout ul li .product-price {
            margin-left: 10px;
        }

        .checkout #final-total {
            margin-top: 20px;
        }

        .checkout #final-total small {
            display: block;
        }

        .checkout .place-order-btn {
            background: #50b3a2;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            margin-top: 20px;
            text-align: center;
        }

        .checkout .place-order-btn:hover {
            background: #3d8b81;
        }

        .hidden {
            display: none;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: calc(33.333% - 10px);
            padding: 8px;
            margin-right: 10px;
            box-sizing: border-box;
        }

        .form-group input[placeholder="Address"],
        .form-group input[placeholder="Apartment, Suite, etc (optional)"],
        .form-group input[placeholder="Phone Number"],
        .form-group input[type="email"],
        .form-group input[type="text"],
        .form-group select {
            width: calc(100% - 10px);
        }

        .form-group input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }

        #checkout-total,
        #final-total {
            margin-top: 20px;
            font-weight: bold;
        }

        #final-total small {
            display: block;
        }

        .place-order-btn {
            background: #50b3a2;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            margin-top: 20px;
            text-align: center;
        }

        .place-order-btn:hover {
            background: #3d8b81;
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
        <button class="close-btn" onclick="toggleCart()">&times;</button>
        <h2>My Cart</h2>
        <ul id="cart-items"></ul>
        <div id="cart-total"></div>
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

    <form class="checkout" action="order_confirmation.html" method="GET">
        <span id="toggle-order-details" style="cursor: pointer;">Show Order Summary: </span>
        <div id="order-details" class="order-details hidden">
            <ul id="checkout-items"></ul>
            <div class="form-group full-width">
                <input type="text" id="promo-code" placeholder="Enter Promo Code or Gift Card">
                <button id="apply-promo">Apply</button>
            </div>
        </div>
        <div id="final-total">
            <small>Subtotal: R0.00</small>
            <small>Shipping: R0.00</small>
        </div>
        <div id="checkout-total">Total: R0.00</div>
        <h2>Contact</h2>
        <div class="form-group full-width">
            <input type="email" id="user-email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="checkbox" id="newsletter-opt-in"> Receive emails with news and offers
        </div>

        <h2>Delivery</h2>
        <div class="form-group">
            <input type="text" id="full-name" placeholder="First Name" required>
            <input type="text" id="last-name" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <input type="text" id="street-address" placeholder="Address" required>
        </div>
        <div class="form-group">
            <input type="text" id="apartment" placeholder="Apartment, Suite, etc (optional)">
        </div>
        <div class="form-group">
            <input type="text" id="city" placeholder="City" required>
            <select id="province" required>
                <option value="" disabled selected>Province</option>
                <option value="australia">Gauteng</option>
                <option value="canada">Eastern Cape</option>
                <option value="usa">Western Cape</option>
                <option value="australia">Free State</option>
                <option value="canada">Kwa-Zulu Natal</option>
                <option value="usa">Limpopo</option>
                <option value="australia">Mpumalanga</option>
                <option value="canada">North West</option>
                <option value="usa">Northen Cape</option>
            </select>
            <input type="text" id="postal-code" placeholder="Postal Code" required>
        </div>
        <div class="form-group">
            <input type="tel" id="mobile-number" placeholder="Phone Number" required>
        </div>

        <h2>Payment</h2>
        <div class="form-group">
            <label><input type="radio" name="payment-method" value="eft"> EFT</label>
            <div id="bank-details" class="hidden">
                <p>First National Bank (FNB) Glazed Skin and Beauty</p>
                <p>Account Number 9876 5432 123</p>
                <p>Branch code 127099</p>
            </div>
            <label><input type="radio" name="payment-method" value="cod">Pay on Delivery</label>
            <div id="pay-delivery" class="hidden">
            </div>
        </div>

        <h2>Billing Address</h2>
        <div class="form-group">
            <label><input type="radio" name="billing-address" value="same" checked> Same as Shipping</label>
            <label><input type="radio" name="billing-address" value="different"> Use a Different Billing Address</label>
        </div>
        <div id="billing-details" class="hidden">
            <div class="form-group">
                <input type="text" id="full-name" placeholder="First Name" required>
                <input type="text" id="last-name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="text" id="street-address" placeholder="Address" required>
            </div>
            <div class="form-group">
                <input type="text" id="apartment" placeholder="Apartment, Suite, etc (optional)">
            </div>
            <div class="form-group">
                <input type="text" id="city" placeholder="City" required>
                <select id="province" required>
                    <option value="" disabled selected>Province</option>
                    <option value="australia">Gauteng</option>
                    <option value="canada">Eastern Cape</option>
                    <option value="usa">Western Cape</option>
                    <option value="australia">Free State</option>
                    <option value="canada">Kwa-Zulu Natal</option>
                    <option value="usa">Limpopo</option>
                    <option value="australia">Mpumalanga</option>
                    <option value="canada">North West</option>
                    <option value="usa">Northen Cape</option>
                </select>
                <input type="text" id="postal-code" placeholder="Postal Code" required>
            </div>
            <div class="form-group">
                <input type="tel" id="mobile-number" placeholder="Phone Number (optional)">
            </div>
        </div>

        <input type="submit" value="Place Order">
    </form>



    <script>
        const cart = JSON.parse(localStorage.getItem('cart')) || [];

        function updateCheckout() {
            const checkoutItemsElement = document.getElementById('checkout-items');
            checkoutItemsElement.innerHTML = '';

            cart.forEach((product, index) => {
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

                const quantityInput = document.createElement('input');
                quantityInput.type = 'number';
                quantityInput.value = product.quantity;
                quantityInput.min = '1';
                quantityInput.addEventListener('change', function () {
                    cart[index].quantity = parseInt(this.value, 10);
                    updateCheckout();
                });

                detailsDiv.appendChild(nameDiv);
                detailsDiv.appendChild(priceDiv);
                detailsDiv.appendChild(quantityInput);

                li.appendChild(img);
                li.appendChild(detailsDiv);

                checkoutItemsElement.appendChild(li);
            });

            const subtotal = cart.reduce((sum, product) => sum + product.price * product.quantity, 0);
            document.querySelector('#final-total small:first-of-type').textContent = `Subtotal: R${subtotal.toFixed(2)}`;

            const deliveryMethod = document.querySelector('input[name="delivery-method"]:checked')?.value || 'standard';
            const deliveryCost = calculateDeliveryCost(subtotal, deliveryMethod);
            document.querySelector('#final-total small:last-of-type').textContent = `Shipping: R${deliveryCost.toFixed(2)}`;

            const total = subtotal + deliveryCost;
            document.getElementById('checkout-total').textContent = `Total: R${total.toFixed(2)}`;
            document.querySelector('#final-total strong').textContent = `Total: R${total.toFixed(2)}`;

            localStorage.setItem('cart', JSON.stringify(cart));
        }

        function calculateDeliveryCost(total, method) {
            if (total < 500) {
                switch (method) {
                    case 'standard':
                        return 50;
                    case 'same-day':
                        return 80;
                    case 'next-work-day':
                        return 65;
                    default:
                        return 0;
                }
            }
            return 0;
        }

        document.getElementById('toggle-order-details').addEventListener('click', function () {
            const orderDetails = document.getElementById('order-details');
            if (orderDetails.classList.contains('hidden')) {
                orderDetails.classList.remove('hidden');
                this.textContent = 'Hide Order Details';
            } else {
                orderDetails.classList.add('hidden');
                this.textContent = 'Show Order Details';
            }
        });

        document.querySelector('form.checkout').addEventListener('submit', function(event) {
            event.preventDefault();

            const fullName = document.getElementById('full-name').value;
            const lastName = document.getElementById('last-name').value;
            const mobileNumber = document.getElementById('mobile-number').value;
            const userEmail = document.getElementById('user-email').value;
            const streetAddress = document.getElementById('street-address').value;
            const apartment = document.getElementById('apartment').value;
            const city = document.getElementById('city').value;
            const province = document.getElementById('province').value;
            const postalCode = document.getElementById('postal-code').value;
            const billingAddress = document.querySelector('input[name="billing-address"]:checked').value === 'different'
                ? {
                    fullName: document.getElementById('billing-full-name').value,
                    lastName: document.getElementById('billing-last-name').value,
                    streetAddress: document.getElementById('billing-street-address').value,
                    apartment: document.getElementById('billing-apartment').value,
                    city: document.getElementById('billing-city').value,
                    province: document.getElementById('billing-province').value,
                    postalCode: document.getElementById('billing-postal-code').value,
                    mobileNumber: document.getElementById('billing-mobile-number').value,
                }
                : { fullName, lastName, streetAddress, apartment, city, province, postalCode, mobileNumber };
            const deliveryMethod = document.querySelector('input[name="delivery-method"]:checked')?.value || 'standard';
            const promoCode = document.getElementById('promo-code').value;
            const emailOptIn = document.getElementById('newsletter-opt-in').checked;

            if (!fullName || !lastName || !mobileNumber || !streetAddress || !city || !province || !postalCode) {
                alert('Please fill in all required fields.');
                return;
            }

            const subtotal = cart.reduce((sum, product) => sum + product.price * product.quantity, 0);
            const deliveryCost = calculateDeliveryCost(subtotal, deliveryMethod);
            const finalTotal = subtotal + deliveryCost;

            const orderDetails = {
                cart,
                fullName,
                lastName,
                mobileNumber,
                userEmail,
                streetAddress,
                apartment,
                city,
                province,
                postalCode,
                billingAddress,
                deliveryMethod,
                promoCode,
                emailOptIn,
                deliveryCost,
                finalTotal,
            };

            const orderDetailsStr = JSON.stringify(orderDetails);
            localStorage.removeItem('cart');
            window.location.href = `order_confirmation.html?orderDetails=${encodeURIComponent(orderDetailsStr)}`;
        });

        document.querySelectorAll('input[name="payment-method"]').forEach(radio => {
            radio.addEventListener('change', function () {
                if (this.value === 'eft') {
                    document.getElementById('bank-details').classList.remove('hidden');
                } else {
                    document.getElementById('bank-details').classList.add('hidden');
                }
            });
        });

        document.querySelectorAll('input[name="billing-address"]').forEach(radio => {
            radio.addEventListener('change', function () {
                if (this.value === 'different') {
                    document.getElementById('billing-details').classList.remove('hidden');
                } else {
                    document.getElementById('billing-details').classList.add('hidden');
                }
            });
        });

        updateCheckout();
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