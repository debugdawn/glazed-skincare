<?php
include ("connection.php");
include ("login.php")
  ?>


<html>
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
    background-image: url('images/routine.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
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


  #form {
    background-color: rgb(255, 255, 255);
    width: 25%;
    border-radius: 4px;
    margin: 70px auto;
    padding: 50px;
    box-shadow: 10px 10px 5px rgb(70, 130, 180);
    text-align: center;
  }

  #btn {
    color: rgb(255, 255, 255);
    background-color: rgb(70, 130, 180);
    padding: 10px;
    display: inline-block;
  }



  @media screen and (max-width: 570px) {
    #form {
      width: 65%;
      margin-left: none;
      padding: 40px;
    }
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
      <a href="skinconcern.html">Shop by skin concern</a>
      <a href="product.html">Shop by products</a>
      <a href="shopAll.html">Shop All</a>
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



  <br>
  <div id="form">
    <h1>Login</h1>
    <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
      <input type="email" id="email" name="email" placeholder="Email" required><br><br>
      <input type="password" id="pass" name="pass" placeholder="Password" required><br><br>
      <input type="submit" id="btn" value="Login" name="submit" />
      <div class="text-center">
        <div class="login-or">
          <hr class="hr-or">
          <span class="span-or">or</span>
        </div>
      </div>
      <div class="text-center">
        <p class="text-center">
          <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus"></i>
            Signup using Google</a>
        </p>
      </div>
      <div class="form-group">
        <p class="text-center">Don't have an account? <a href="signup.php" id="signup" onclick="toggleModals()">Sign up here</a>
        </p>
      </div>
  </div>
  </form>
  </div>
  <script>
    function isvalid() {
      var email = document.form.email.value;
      var pass = document.form.pass.value;
      if (email.length == "" && pass.length == "") {
        alert(" Email and password field is empty!!!");
        return false;
      }
      else if (Email.length == "") {
        alert(" Email field is empty!!!");
        return false;
      }
      else if (pass.length == "") {
        alert(" Password field is empty!!!");
        return false;
      }

    }
  </script>
</body>

</html>